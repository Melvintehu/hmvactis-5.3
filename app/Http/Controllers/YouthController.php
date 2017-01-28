<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Youth;
use App\Photo;
use App\Http\Requests;

class YouthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'youth' => Youth::paginate(10),
        ];

        return view('cms.pages.youth.overzicht', compact('data'));
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
        $youth = Youth::create($request->all());
        
        return redirect('cms/youth');
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
            'youth' => Youth::find($id),
        ];

        return view('cms.pages.youth.update', compact('data'));
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
        $youth = Youth::find($id);

        $youth->update($request->all());
    
        return redirect('cms/youth');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $youth = Youth::find($id);
        $youth->delete();

        return redirect('cms/youth');
    }

    public function addPhoto($id, Request $request)
    {   

        // check of er een foto bestaat voor dit nieuws id
        $youth = Youth::findOrFail($id);

        $photos  = $youth->photos;

        if(!$photos->isEmpty()){
            $photos->first()->delete();
        }

        $file =  $request->file('file');
        
        $name = time() . $file->getClientOriginalName();

        $file->move('youth/photos', $name);
           
        // create a new photo    

        $photo = Photo::create(['path' => "/youth/photos/{$name}"]);
        
        $youth->photos()->attach($photo->id, ['type' => 'original']);
        return 'done';
    }
}
