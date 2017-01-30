<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profile;
use App\Http\Requests;
use App\Event;
use Auth;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge(['user_id' => Auth::id()]);

       // $request->request->add(['user_id' => Auth::id()]);
        $profile = Profile::create($request->all());

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = [
            'events' =>  Auth::user()->events()->get(),
        ];

        $events = Event::ofLoggedinUser();
        $profile = Profile::ofLoggedInUser();

        return view('pages.profiel', compact(
            'data',
            'profile',
            'events'
        ));

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $profile = Profile::find($id);
        $profile->delete();


        return redirect('cms/user');


    }


    public function overzichtOudLeden()
    {
        $data = [
            'users' => Profile::onlyTrashed()->get(),
        ];

        return view('cms.pages.users.overzicht', compact('data'));
    }

    public function processUser($id)
    {
        $profile = Profile::where('user_id', $id)->first();
        $profile->processed = 1;
        $profile->save();

        return redirect('cms/members');
    }
}
