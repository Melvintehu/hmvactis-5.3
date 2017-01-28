<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventUser extends Model
{
   
	public function users(){
		return $this->hasMany('App\User');
	}

	public function events(){
		return $this->hasMany('App\Event');
	}


}
