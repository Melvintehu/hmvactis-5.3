<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VacanciePhoto extends Model
{
    //
    protected $fillable = [
    	'photo_id',
    	'news_id',
    	'type',
    ];


    public function Vacancies()
    {
    	return $this->hasMany('App\Vacancie');
    }

    public function photos(){
    	return $this->hasMany('App\Photo');
    }
}
}
