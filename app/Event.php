<?php

namespace App;

use Auth;
use App\Photo;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

	protected $dates = [
		'date'
	];

    protected $fillable = [
    	'title',
    	'location',
    	'date',
    	'time',
    	'description',
    	'lustrum_event',
        'subscription'
    ];

    public static function latestOfCurrentMonth($limit = 4)
    {
        return Event::where('date', '>', new Carbon('last day of previous month'))->where('date', '<', new Carbon('first day of next month'))->take($limit)->get();
    }

    public static function ofLoggedinUser()
    {
        return Auth::user()->events()->get();
    }


    public function addPhoto(Photo $photo)
    {


      $this->photos()->attach($photo->id, ['type' => 'original']);


      return $this->photos()->save($photo);

    }

    public function photos(){
        return $this->belongsToMany('App\Photo')->withPivot('type')->withTimeStamps();
    }


    public function setMydateAttribute($date)
    {
        $this->attributes['date'] = Carbon::createFromFormat('Y/M/d', $date);
    }

    public function users(){
        return $this->belongsToMany('App\User')->withTimeStamps();
    }

}
