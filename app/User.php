<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Authenticatable
{

    use SoftDeletes;


    protected $dates = [
        'deleted_at',
        'created_at',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function events(){
        return $this->belongsToMany('App\Event');
    }

    public function profile(){
        return $this->hasOne('App\Profile');
    }

    // computed properties

    public function getJoinDateAttribute()
    {
        return $this->created_at->format('d-m-Y');
    }

    public function getAdminRightsAttribute()
    {
        if($this->admin == 0) {
            return 'nee';
        }else{
            return 'Ja';
        }

    }

    public function getAddressAttribute()
    {
        return $this->profile->street . ' ' . $this->profile->house_number . ' ' . $this->profile->place;
    }

}
