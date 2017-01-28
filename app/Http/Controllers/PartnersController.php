<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Photo;
use App\Partner;
use App\Http\Requests;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'partners' => Partner::paginate(20),
        ];

        return view('cms.pages.partners.overzicht', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.pages.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $partner = Partner::create($request->all());
        
        return redirect('cms/partner');
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
            'partner' => Partner::find($id),
        ];

        return view('cms.pages.partners.update', compact('data'));
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
        $partner = Partner::find($id);

        $partner->update($request->all());
    
        return redirect('cms/partner');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::find($id);
        $partner->delete();

        return redirect('cms/partner');
    }



    public function addPhoto($id, Request $request)
    {   

        // check of er een foto bestaat voor dit nieuws id
        $partner = Partner::findOrFail($id);

        $photos  = $partner->photos;

        if(!$photos->isEmpty()){
            $photos->first()->delete();
        }

        $file =  $request->file('file');
        
        $name = time() . $file->getClientOriginalName();

        $file->move('partner/photos', $name);
           
        // create a new photo    

        $photo = Photo::create(['path' => "/partner/photos/{$name}"]);
        
        $partner->photos()->attach($photo->id, ['type' => 'original']);
        return 'done';
    }

}
