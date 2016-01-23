<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Unit extends Model
{
    protected $fillable = [
        'name'
    ];

    public function user()
    {
        return $this->belongTo('App\User');
    }

    public function books(){
        return $this->hasMany('App\Book');
    }

    public function scopeForLoggedInUser($query)
    {
        return $query->where('user_id', Auth::id());
    }
}
