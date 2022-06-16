<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function posts(){
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
