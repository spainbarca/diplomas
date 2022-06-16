<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\User;
use App\Models\Image;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }
}
