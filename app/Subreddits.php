<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subreddits extends Model
{
    protected $fillable = [
        'title',
        'desc',
        'slug'
    ];
    public function post() {
        return $this->hasMany('App\Post');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
