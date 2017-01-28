<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sponsor;
use App\PageSection;
use App\Http\Requests;
use App\Photo;

class SponsorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
         $data = [
            'sponsors' => Sponsor::all(),
            ];

        return view('cms.pages.sponsors.overzicht', compact('data'));
    }

    public function overzicht(){
         $data = [
            'pageSection' => PageSection::where('id', 6)->first(), 
            'hoofdpartners' => Sponsor::where('main_partner', 'ja')->get(),
            'partners' => Sponsor::where('main_partner','nee')->where('no_sponsor', 'nee')->get(),
            ];

        return view('pages.partners', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('cms.pages.sponsors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Sponsor::create($request->all());
         return redirect('cms/sponsors');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $sponsor = Sponsor::find($id);
        return view('cms.pages.sponsors.update', compact('sponsor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $sponsor = Sponsor::findOrFail($id);
        $sponsor->update($request->all());

        return redirect('cms/sponsors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sponsor = Sponsor::find($id);
        $sponsor->delete();
        return redirect('cms/sponsors');
    }

    public function addPhoto($id, Request $request)
    {   

        // check of er een foto bestaat voor dit nieuws id
        $sponsor = Sponsor::findOrFail($id);

        // indien er al een foto is, verwijder deze.
        $photos = $sponsor->photos;

            // dd($photos);
        if(!$photos->isEmpty()){
            $photos->first()->delete();
        }

        // create a new photo    
        $photo = $this->makePhoto($request->file('file'));


        $sponsor->addPhoto($photo);
        
        return 'done';
    }


    public function makePhoto($file)
    {
        
        return Photo::named($file->getClientOriginalName(), 'partners')
            ->setThumbnailDimensions(250,150)
            ->move($file);

    }


}
