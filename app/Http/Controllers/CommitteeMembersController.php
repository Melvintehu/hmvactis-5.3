<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Committee;
use App\CommitteeMember;
use App\Http\Requests;
use App\Photo;

class CommitteeMembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
         $data = [
            'committees' => Committee::all(),
            'committeeMembers' => CommitteeMember::all(),
            ];

        return view('cms.pages.committeeMembers.overzicht', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $committees = Committee::pluck('name', 'id');
        return view('cms.pages.committeeMembers.create', compact('committees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         CommitteeMember::create($request->all());
         return redirect('cms/committeeMembers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photo = Photo::where([
            ['model_id', $id],
            ['type', 'committee-member']
        ])->first();

        $committees = Committee::pluck('name', 'id');
        $committeeMember = CommitteeMember::find($id);
        return view('cms.pages.committeeMembers.update', compact('committeeMember', 'committees', 'photo'));
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


        $committeeMember = CommitteeMember::findOrFail($id);
        $committeeMember->update($request->all());


        return redirect('cms/committeeMembers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $committeeMember = CommitteeMember::find($id);
        $committeeMember->delete();


         return redirect('cms/committeeMembers');

    }

    public function addPhoto($id, Request $request)
    {

        // check of er een foto bestaat voor dit nieuws id
        $committeeMember = CommitteeMember::findOrFail($id);

        // indien er al een foto is, verwijder deze.
        $photos = $committeeMember->photos;

            // dd($photos);
        if(!$photos->isEmpty()){
            $photos->first()->delete();
        }

        // create a new photo
        $photo = $this->makePhoto($request->file('file'));


        $committeeMember->addPhoto($photo);

        return 'done';
    }


    public function makePhoto($file)
    {

        return Photo::named($file->getClientOriginalName(), 'commissie_leden')
            ->setThumbnailDimensions(170,170)
            ->move($file);

    }



}
