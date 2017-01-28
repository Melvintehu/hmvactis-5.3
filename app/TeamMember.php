<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $fillable = [
    	'first_name',
    	'last_name',
    	'description',
    	'role',
    ];
}
