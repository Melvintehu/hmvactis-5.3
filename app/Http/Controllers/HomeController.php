<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Page;
use App\News;
use App\Event;
use App\Board;
use App\Sponsor;
use Carbon\Carbon;
use App\PageSection;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'news' => News::orderBy('publish_date', 'desc')->take(4)->get(),
            'netwerk' => PageSection::where('id', 3)->first(),
            'zelfontplooing' => PageSection::where('id', 4)->first(),
            'cv_building' => PageSection::where('id', 5)->first(),
            'gezelligheid' => PageSection::where('id', 6)->first(),
            'events' => Event::where('date', '>', new Carbon('last day of previous month'))->where('date', '<', new Carbon('first day of next month'))->where('lustrum_event', 'nee')->take(4)->get(),
            'partners' => Sponsor::where('main_partner','nee')->get(),
        ];


        return view('pages.homepage', compact('data'));
    }
}
