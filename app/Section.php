<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
    	'title',
    	'body',
    	'page_id'
    ];

    
    public function page()
    {
    	return $this->belongsTo('App\Page');
    }

    public function photos(){
        return $this->belongsToMany('App\Photo')->withPivot('type')->withTimeStamps();      
    } 


}
