<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;
use App\Photo;
use Carbon\carbon;
use App\PageSection;
use App\Http\Requests;
use App\User;
use Auth;

class EventsController extends Controller
{

    // public function __construct(){
    //      setlocale(LC_TIME, 'Dutch');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
         $data = [
            'events' => Event::all(),
            ];

        return view('cms.pages.events.overzicht', compact('data'));
    }

    public function signUpUser($id){
        $user = User::find(Auth::user()->id);
        $user->events()->attach($id);

        return redirect('/activiteit/'. $id);
    }

    public function overzicht(){
        $data = [
            'pageSection'  => PageSection::where('id', 4)->first(),
            'currentMonthsEvents' => Event::where('date', '>', new Carbon('last day of previous month'))
              ->where('date', '<', new Carbon('first day of next month'))
              ->get(),

            'nextMonthsEvents' => Event::where('date', '>=', new Carbon('first day of next month'))
              ->where('date', '<=', new Carbon('last day of next month'))
              ->get(),

        ];

        return view('pages.activiteiten', compact('data'));
    }

    public function lustrumOverzicht(){
        $data = [
            'pageSection'  => PageSection::where('id', 11)->first(),
            'events' => Event::where('lustrum_event', 'ja')->get(),
        ];

        return view('pages.lustrum', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('cms.pages.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


         Event::create($request->all());
         return redirect('cms/events');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        return view('cms.pages.events.update', compact('event'));
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

        $event = Event::findOrFail($id);
        $event->update($request->all());

        return redirect('cms/events');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect('cms/events');
    }


  public function addPhoto($id, Request $request)
    {

        // check of er een foto bestaat voor dit nieuws id
        $event = Event::findOrFail($id);

        // indien er al een foto is, verwijder deze.
        $photos = $event->photos;

            // dd($photos);
        if(!$photos->isEmpty()){
            $photos->first()->delete();
        }

        // create a new photo
        $photo = $this->makePhoto($request->file('file'));


        $event->addPhoto($photo);

        return 'done';
    }


    public function makePhoto($file)
    {

        return Photo::named($file->getClientOriginalName(), 'activiteiten')
            ->setThumbnailDimensions(250,150)
            ->move($file);

    }

    public function uitschrijven($id)
    {
        $user = Auth::user();


        $user->events()->detach($id);

        return redirect('/profiel');
    }

    public function displayDeelnemers($id)
    {
        $data = [
            'event' => Event::find($id),

        ];


        return view('cms.pages.events.deelnemerOverzicht', compact('data'));
    }

}
