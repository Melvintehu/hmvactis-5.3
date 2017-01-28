<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Photo;

class BoardMember extends Model
{


    protected $fillable = [
    	'board_id',
    	'name',
    	'description',
    	'role',
    	'email',
    	'study',
    ];


    public function board(){
    	return $this->belongsTo('App\Board');
    }

    public function photos(){
        return $this->belongsToMany('App\Photo')->withPivot('type')->withTimeStamps();      
    }

 
    public function addPhoto(Photo $photo)
    {
      
      $this->photos()->attach($photo->id, ['type' => 'original']); 
      
      return $this->photos()->save($photo);

    }

}
