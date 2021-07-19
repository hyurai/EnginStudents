<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = ['user_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function profile_icons()
    {
        return $this->hasManyThrough('App\Models\Icon','App\Models\ProfileIconRelation','profile_id','id',null,'icon_id');
    }
}
