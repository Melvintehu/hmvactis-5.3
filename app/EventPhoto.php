<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventPhoto extends Model
{
    
	protected $fillable = [
    	'photo_id',
    	'news_id',
    	'type',
    ];

    public function events()
    {
    	return $this->hasMany('App\Event');
    }

    public function photos(){
    	return $this->hasMany('App\Photo');
    }

}
