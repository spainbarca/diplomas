<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Role;
use App\Models\Video;
use App\Models\Comment;
use App\Models\Student;
use App\Models\Instructor;
use App\Models\User\Profile;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function videos(){
        return $this->hasMany(Video::class);
    }

    public function role(){
        return $this->belongsTo(Role::class);
    }

    /* public function roles(){
        return $this->belongsToMany(Role::class);
    } */

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

    public function comments(){
        return $this->hasMany(Comment::class, 'commentable');
    }

    public function instructor(){
        return $this->hasOne(Instructor::class);
    }

    public function student(){
        return $this->hasOne(Student::class);
    }
}
