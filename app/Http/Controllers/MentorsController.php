<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Mentor;
use App\Photo;
use App\Http\Requests;

class MentorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'mentors' => Mentor::paginate(20),
        ];

        return view('cms.pages.mentors.overzicht', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('cms.pages.mentors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $mentor = Mentor::create($request->all());
        
        return redirect('cms/mentor');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $data =[
            'mentor' => Mentor::find($id),
        ];

        return view('cms.pages.mentors.update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mentor = Mentor::find($id);

        $mentor->update($request->all());
    
        return redirect('cms/mentor');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mentor = Mentor::find($id);
        $mentor->delete();

        return redirect('cms/mentor');
    }

    public function addPhoto($id, Request $request)
    {   

        // check of er een foto bestaat voor dit nieuws id
        $mentor = Mentor::findOrFail($id);

        $photos  = $mentor->photos;

        if(!$photos->isEmpty()){
            $photos->first()->delete();
        }

        $file =  $request->file('file');
        
        $name = time() . $file->getClientOriginalName();

        $file->move('mentor/photos', $name);
           
        // create a new photo    

        $photo = Photo::create(['path' => "/mentor/photos/{$name}"]);
        
        $mentor->photos()->attach($photo->id, ['type' => 'original']);
        return 'done';
    }      

}
