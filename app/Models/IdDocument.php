<?php

namespace App\Models;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IdDocument extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function profiles(){
        return $this->belongsToMany(Profile::class);
    }
}
