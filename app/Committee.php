<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
   protected $fillable = [
   		'name',
   		'description',
   		'email',
   ];

   public function members(){
   		return $this->hasMany('App\CommitteeMember');
   }
}
