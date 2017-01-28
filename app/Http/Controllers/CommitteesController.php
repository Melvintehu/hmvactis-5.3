<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Committee;
use App\PageSection;
use App\Http\Requests;

class CommitteesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
         $data = [
            'committees' => Committee::all(),
            ];

        return view('cms.pages.committees.overzicht', compact('data'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function overzicht(){
         $data = [
            'pageSection' => PageSection::where('id', 5)->first(),
            'committees' => Committee::all(),
            ];

        return view('pages.commissies', compact('data'));
    }    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('cms.pages.committees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Committee::create($request->all());
         return redirect('cms/committees');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $committee = Committee::find($id);
        return view('cms.pages.committees.update', compact('committee'));
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
        $committee = Committee::findOrFail($id);
        $committee->update($request->all());
        
        return redirect('cms/committees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $committee = Committee::find($id);
        $committee->delete();
        return redirect('cms/committees');
    }
}
