<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoardMemberPhoto extends Model
{
    //
    protected $fillable = [
    	'photo_id',
    	'news_id',
    	'type',
    ];


    public function boardMembers()
    {
    	return $this->hasMany('App\BoardMember');
    }

    public function photos(){
    	return $this->hasMany('App\Photo');
    }
}
