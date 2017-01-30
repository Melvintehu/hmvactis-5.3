<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageSection extends Model
{
    protected $fillable = [
    	'page_id',
    	'name',
    	'title',
    	'description'
    ];

    public function photo() {
        return Photo::where([
            ['model_id', $this->id],
            ['type', 'section'],
        ])->first();
    }

    public function getThumbnailAttribute()
    {
        return "/images/section/{$this->id}/10x3/{$this->photo()->filename}";
    }

    public function photos(){
        return $this->belongsToMany('App\Photo')->withPivot('type')->withTimeStamps();
    }

    public function page(){
    	return $this->belongsTo('App\Page');
    }
}
