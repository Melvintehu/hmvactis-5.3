<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommitteeMemberPhoto extends Model
{

	protected $fillable = [
    	'photo_id',
    	'news_id',
    	'type',
    ];

    public function committeeMembers()
    {
    	return $this->hasMany('App\CommitteeMember');
    }

    public function photos(){
    	return $this->hasMany('App\Photo');
    }

}
