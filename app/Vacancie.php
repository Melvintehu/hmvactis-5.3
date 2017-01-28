<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Photo;


class Vacancie extends Model
{
    protected $fillable = [
    	'title',
    	'details',
    	'description', 
    ];

    public function photos(){
        return $this->belongsToMany('App\Photo')->withPivot('type')->withTimeStamps();      
    }

    public function addPhoto(Photo $photo)
    {
      
      $this->photos()->attach($photo->id, ['type' => 'original']); 
      
      return $this->photos()->save($photo);

    }
    
}
