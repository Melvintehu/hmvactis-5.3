<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SponsorDiscountPhoto extends Model
{

    protected $fillable = [
    	'photo_id',
    	'news_id',
    	'type',
    ];


    public function sponsorDiscounts()
    {
    	return $this->hasMany('App\SponsorDiscount');
    }

    public function photos(){
    	return $this->hasMany('App\Photo');
    }

}
