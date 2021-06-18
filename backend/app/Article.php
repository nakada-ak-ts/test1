<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];


public function path()
{
    return route('articles.show', $this);
}

public function user()
{
    return $this->belongsTo(User::class, 'User_id');
}

public function tags()
{
    return $this->belongsToMany(Tag::class);
}
}
