<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profile;

class Tweet extends Model
{
    use HasFactory;
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
    public function likes()
    {
        return $this->hasMany('App\Model\Like');
    }
    public function tweet_hashtag()
    {
        return $this->hasManyThrough('App\Models\Hashtag','App\Models\TweetHashtagRelation','tweet_id','id',null,'hashtag_id');
    }
}