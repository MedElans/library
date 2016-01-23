<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Source extends Model
{
    protected $fillable = [
        'name', 'link', 'description'
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
