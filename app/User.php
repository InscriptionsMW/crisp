<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'firstname', 'lastname', 'role', 'email', 'password','avatar','provider','provider_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function pictures(){
        return $this->hasMany('App\Picture');
    }

    public function votes(){
        return $this->hasMany('App\Vote');
    }

    public function likes(){
        return $this->hasMany('App\Like');
    }
}
