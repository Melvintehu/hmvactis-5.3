<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use App\News;
use App\Event;
use App\Board;
use App\Vacancie;
use App\Committee;
use App\CommitteeMember;
use App\SponsorDiscount;
use App\Sponsor;
use Carbon\Carbon;
use App\PageSection;
use App\Http\Requests;
use Auth;
use App\Album;
use App\Profile;
use App\Photo;


class PagesController extends Controller
{

    public function __construct(){
         setlocale(LC_TIME, 'Dutch');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $pages = page::all();
        $profile = Profile::ofLoggedInUser();

        return view('cms.pages.pages.index', compact(
            'pages',
            'profiel'
        ));
    }

    public function overOns(){

        $data = [
            'inleidende_tekst' => PageSection::where('id', 1)->first(),
            'de_vereniging' => PageSection::where('id', 2)->first(),
            'onze_hoofddoelstelling' => PageSection::where('id', 3)->first(),
        ];

        $boards = Board::where('id', 7)->first();
        $news = News::latest(4);

        return view('pages.over-ons', compact(
            'data',
            'news',
            'boards'
        ));
    }

    public function homepage(){

        $sections = [
            'netwerk' => PageSection::where('id', 10)->first(),
            'zelfontplooing' => PageSection::where('id', 11)->first(),
            'cv_building' => PageSection::where('id', 12)->first(),
            'gezelligheid' => PageSection::where('id', 13)->first(),
        ];

        $partners = Sponsor::otherPartners();
        $hoofdpartner = Sponsor::where('main_partner', 'ja')->orderBy('created_at', 'DESC')->first();
        $news = News::latest(4);
        $events = Event::latestOfCurrentMonth(4);

        return view('pages.homepage', compact(
            'sections',
            'news',
            'events',
            'partners',
            'hoofdpartner'
        ));
    }

    public function contact(){
        $pageSection = PageSection::find(9);

        return view('pages.contact', compact('pageSection'));
    }


    public function showActiviteit($id)
    {
        $data = [
            'activiteit' => Event::find($id),
        ];

        return view('pages.activiteit_voorbeeld', compact('data'));
    }

    public function showNieuws($id)
    {

        $data = [

            'nieuws' => News::find($id),

        ];

        return view('pages.nieuws_voorbeeld', compact('data'));

    }

    public function albums(){

        $albums = Album::all();

        return view('pages.albums', compact('albums'));
    }

    public function showAlbum($id){

        $album = Album::find($id);

        return view('pages.album_voorbeeld', compact('album'));
    }

    public function showCommissie($id)
    {

        $data = [

            'committee' => Committee::find($id),
            'committeemembers' => CommitteeMember::where('committee_id', $id)->get(),

        ];

        return view('pages.commissie_voorbeeld', compact('data'));

    }

    public function showSponsor($id)
    {

        $data = [

            'sponsor' => Sponsor::find($id),

        ];

        return view('pages.sponsor_voorbeeld', compact('data'));

    }

    public function showVacature($id)
    {
        $data = [
            'vacature' => Vacancie::find($id),
        ];

        return view('pages.vacatures_voorbeeld', compact('data'));

    }

    public function showKorting($id)
    {

        $data = [

            'korting' => SponsorDiscount::find($id),

        ];

        return view('pages.kortingen_voorbeeld', compact('data'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('cms.pages.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Page::create($request->all());
         return redirect('cms/pages');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page = Page::find($id);
        return view('cms.pages.pages.update', compact('page'));
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
        $page = Page::findOrFail($id);
        $page->update($request->all());
        return redirect('cms/pages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::find($id);
        $page->delete();
        return redirect('cms/pages');
    }
}
