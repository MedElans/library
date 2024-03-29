<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function categories(){
        return $this->hasMany('App\Category');
    }

    public function units(){
        return $this->hasMany('App\Unit');
    }

    public function sources(){
        return $this->hasMany('App\Source');
    }

    public function books(){
        return $this->hasMany('App\Book');
    }
}
