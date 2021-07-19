<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hashtag extends Model
{
    use HasFactory;
    protected $fillable = ['hastag_name'];

    public function hashtag_tweets(){
        return $this->hasManyThrough('App\Models\Tweet','App\Models\TweetHashtagRelation','hashtag_id','id',null,'tweet_id');
    }
}
