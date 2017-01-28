<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MentorPhoto extends Model
{
    //
    protected $fillable = [
    	'photo_id',
    	'mentor_id',
    	'type',
    ];


    public function mentor()
    {
    	return $this->hasMany('App\Mentor');
    }

    public function photos(){
    	return $this->hasMany('App\Photo');
    }
}
