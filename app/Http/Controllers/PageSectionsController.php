<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use App\PageSection;
use App\Http\Requests;
use App\Photo;

class PageSectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
         $data = [
            'pages' => Page::all(),
            'pageSections' => PageSection::all(),
            ];

        return view('cms.pages.pageSections.overzicht', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        
        $pages = Page::lists('title', 'id');


        return view('cms.pages.pageSections.create', compact('pages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         PageSection::create($request->all());
         return redirect('cms/pageSections');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $pages = Page::lists('title', 'id');
        $pageSection = PageSection::find($id);
        return view('cms.pages.pageSections.update', compact('pages', 'pageSection'));
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
        $pageSection = PageSection::findOrFail($id);
        $pageSection->update($request->all());
        return redirect('cms/pageSections');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pageSection = PageSection::find($id);
        $pageSection->delete();
        return redirect('cms/pageSections');

    }


    public function addPhoto($id, Request $request)
    {   

        // check of er een foto bestaat voor dit nieuws id
        $pageSection = PageSection::findOrFail($id);

        $photos  = $pageSection->photos;

        if(!$photos->isEmpty()){
            $photos->first()->delete();
        }

        $file =  $request->file('file');
        
        $name = time() . $file->getClientOriginalName();

        $file->move('application-photos/secties/photos', $name);
           
        // create a new photo    

        $photo = Photo::create(['path' => "application-photos/secties/photos/{$name}"]);
        
        $pageSection->photos()->attach($photo->id, ['type' => 'original']);
        return 'done';
    }


}
