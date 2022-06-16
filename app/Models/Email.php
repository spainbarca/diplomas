<?php

namespace App\Models;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Email extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function profiles(){
        return $this->belongsToMany(Profile::class);
    }
}
