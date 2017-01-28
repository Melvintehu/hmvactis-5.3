<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageSectionPhoto extends Model
{
    //
    protected $fillable = [
    	'photo_id',
    	'news_id',
    	'type',
    ];


    public function pageSections()
    {
    	return $this->hasMany('App\PageSection');
    }

    public function photos(){
    	return $this->hasMany('App\Photo');
    }
}
