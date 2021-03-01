<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'body',
        'img_path'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
