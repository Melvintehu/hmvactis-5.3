<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Photo;

class Sponsor extends Model
{
    protected $fillable = [
    	'name',
    	'website',
    	'description',
    	'main_partner',
        'no_sponsor'
    ];

    public function photo() {
        return Photo::where([
            ['model_id', $this->id],
            ['type', 'sponsor'],
        ])->first();
    }

    public function getThumbnailAttribute()
    {
        return "/images/sponsor/{$this->id}/16x9/{$this->photo()->filename}";
    }


    public static function otherPartners()
    {
        return Sponsor::where('main_partner','nee')->get();
    }

    public static function mainPartner()
    {
        return Sponsor::where('main_partner', 'ja')->get();
    }


    public function discounts(){
    	return $this->hasMany('App\SponsorDiscount');
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
