<?php

namespace App;

use App\Photo;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
      'title',
      'body',
      'date',
    ];

    public function photos()
    {
    	$photos = Photo::where([
    			["model_id", $this->id],
    			["type", 'album']
    		])->get();

    	return $photos;
    }

    public function hasPhotos()
    {
    	$photos = Photo::where([
    			["model_id", $this->id],
    			["type", 'album']
    		])->get()->isEmpty();
    	return !$photos;
    }	
}
