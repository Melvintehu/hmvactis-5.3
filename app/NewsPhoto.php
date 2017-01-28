<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsPhoto extends Model
{
    //
    protected $fillable = [
    	'photo_id',
    	'news_id',
    	'type',
    ];


    public function newsMessages()
    {
    	return $this->hasMany('App\News');
    }

    public function photos(){
    	return $this->hasMany('App\Photo');
    }
}
