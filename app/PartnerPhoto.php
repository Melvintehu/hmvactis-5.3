<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartnerPhoto extends Model
{
    //
    protected $fillable = [
    	'photo_id',
    	'news_id',
    	'type',
    ];


    public function Partners()
    {
    	return $this->hasMany('App\Partner');
    }

    public function photos(){
    	return $this->hasMany('App\Photo');
    }
}
