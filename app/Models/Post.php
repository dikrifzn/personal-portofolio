<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'category', 'description', 'content', 'closing', 'cover_image', 'content_image'];

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }

    public function likeCount(){
        return $this->likes()->count();
    }

    public function commentCount(){
        return $this->comments()->count();
    }
}
