<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;
use App\Http\Requests;

class frontEndNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'nieuws' => News::orderBy('publish_date', 'desc')->get(),
        ];

        return view('pages.nieuws', compact('data'));
    }

}
