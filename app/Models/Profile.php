<?php

namespace App\Models;

use App\Models\User;
use App\Models\Email;
use App\Models\Gender;
use App\Models\Telephone;
use App\Models\CivilState;
use App\Models\IdDocument;
use App\Models\SocialNetwork;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function iddocuments(){
        return $this->belongsToMany(IdDocument::class);
    }

    public function gender(){
        return $this->belongsTo(Gender::class);
    }

    public function civilstate(){
        return $this->belongsTo(CivilState::class);
    }

    public function telephones(){
        return $this->belongsToMany(Telephone::class);
    }

    public function emails(){
        return $this->belongsToMany(Email::class);
    }

    public function socialnetworks(){
        return $this->belongsToMany(SocialNetwork::class);
    }
}
