<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\photo;

class CommitteeMember extends Model
{
    protected $fillable = [
    	'committee_id',
    	'name',
    	'role',
    	'email',
    	'study',
    ];

    public function photo() {
        return Photo::where([
            ['model_id', $this->id],
            ['type', 'committee-member'],
        ])->first();
    }

    public function getThumbnailAttribute()
    {
        return "/images/committee-member/{$this->id}/1x1/{$this->photo()->filename}";
    }



    public function photos(){
        return $this->belongsToMany('App\Photo')->withPivot('type')->withTimeStamps();
    }

    public function committee(){
    	return $this->belongsTo('App\Committee');
    }

    public function addPhoto(Photo $photo)
    {

      $this->photos()->attach($photo->id, ['type' => 'original']);

      return $this->photos()->save($photo);

    }

}
