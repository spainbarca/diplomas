<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function courses(){
        return $this->hasMany(Course::class);
    }
}
