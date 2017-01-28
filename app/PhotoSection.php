<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoSection extends Model
{
    //
    protected $fillable = [
    	'photo_id',
    	'section_id',
    	'type',
    ];


    public function sections()
    {
    	return $this->hasMany('App\Section');
    }

    public function photos(){
    	return $this->hasMany('App\Photo');
    }
}
