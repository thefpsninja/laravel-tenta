<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'subreddits_id',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function subreddit(){
        return $this->belongsTo('App\Subreddit');
    }
}
