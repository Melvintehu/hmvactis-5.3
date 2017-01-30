<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Photo;

class SponsorDiscount extends Model
{
    protected $fillable = [
    	'sponsor_id',
    	'title',
    	'description',
    ];


    public function photo() {
        return Photo::where([
            ['model_id', $this->id],
            ['type', 'sponsor-discount'],
        ])->first();
    }

    public function getThumbnailAttribute()
    {
        return "/images/sponsor-discount/{$this->id}/16x9/{$this->photo()->filename}";
    }





    public function sponsor(){
    	return $this->belongsTo('App\Sponsor');
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
