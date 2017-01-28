<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SponsorPhoto extends Model
{
    //
    protected $fillable = [
    	'photo_id',
    	'news_id',
    	'type',
    ];


    public function sponsors()
    {
    	return $this->hasMany('App\Sponsor');
    }

    public function photos(){
    	return $this->hasMany('App\Photo');
    }
}
