<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'name', 'description', 'link', 'counter', 'total', 'image'
    ];

    public function scopeForLoggedInUser($query)
    {
        return $query->where('user_id', Auth::id());
    }

    public function user()
    {
        return $this->belongTo('App\User');
    }

    public function category()
    {
        return $this->belongTo('App\Category');
    }

    public function source()
    {
        return $this->belongTo('App\Source');
    }

    public function unit()
    {
        return $this->belongTo('App\Unit');
    }

    public function setSourceIdAttribute($value) {
        $this->attributes['source_id'] = $value ?: null;
    }

    public function setCategoryIdAttribute($value) {
        $this->attributes['category_id'] = $value ?: null;
    }
}
