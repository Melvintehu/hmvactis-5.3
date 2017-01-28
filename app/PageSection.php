<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageSection extends Model
{
    //

    protected $fillable = [
    	'page_id',
    	'name',
    	'title',
    	'description'
    ];

    public function photos(){
        return $this->belongsToMany('App\Photo')->withPivot('type')->withTimeStamps();      
    }
    
    public function page(){
    	return $this->belongsTo('App\Page');
    }
}
