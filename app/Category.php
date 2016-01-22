<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Baum\Node;
use Auth;

class Category extends Node
{
    public function user()
    {
        return $this->belongTo('App\User');
    }

    public function scopeForLoggedInUser($query)
    {
        return $query->where('user_id', Auth::id());
    }

}
