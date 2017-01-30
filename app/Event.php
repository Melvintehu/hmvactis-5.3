<?php

namespace App;

use Auth;
use App\Photo;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    protected $dates = [
        'date',
    ];

    protected $fillable = [
    	'title',
    	'location',
    	'date',
    	'time',
        'end_time',
    	'description',
    	'lustrum_event',
        'subscription'
    ];

    public function photo() {
        return Photo::where([
            ['model_id', $this->id],
            ['type', 'event'],
        ])->first();
    }

    public function getDayAttribute()
    {
        return $this->date->day;
    }

    public function getThumbnailAttribute()
    {
        return "/images/event/{$this->id}/16x11/{$this->photo()->filename}";
    }

    public static function latestOfCurrentMonth($limit = 4)
    {
        return Event::where('date', '>', new Carbon('last day of previous month'))->where('date', '<', new Carbon('first day of next month'))->take($limit)->get();
    }

    public static function ofLoggedinUser()
    {
        return Auth::user()->events()->get();
    }

    public function users()
    {
        return $this->belongsToMany('App\User')->withTimeStamps();
    }

}
