<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoYouth extends Model
{
    //
    protected $fillable = [
    	'photo_id',
    	'youth_id',
    	'type',
    ];


    public function youth()
    {
    	return $this->hasMany('App\Youth');
    }

    public function photos(){
    	return $this->hasMany('App\Photo');
    }
}
