<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Photo;


class News extends Model
{

   	protected $dates = [
   		'publish_date',
   		'date_added'
   	];

 	  protected $fillable = [
   		'title',
   		'publish_date',
   		'date_added',
   		'description',
   	];

    public static function latest($limit)
    {
      return self::orderBy('publish_date', 'desc')->take($limit)->get();
    }

    public function photos()
    {
        return $this->belongsToMany('App\Photo')->withPivot('type')->withTimeStamps();
    }


    public function setMydateAttribute($date)
    {
        $this->attributes['publish_date'] = Carbon::createFromFormat('Y/M/d', $date);
    }

    public function addPhoto(Photo $photo)
    {

      $this->photos()->attach($photo->id, ['type' => 'original']);

      return $this->photos()->save($photo);

    }

}
