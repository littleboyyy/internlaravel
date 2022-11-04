<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory;
    

    public function roles(){
        return this->belongsToMany(Role::class);
    }
    public function tags(){
        return this->hasMany(Tag::class);
    }
    public function schools(){
        return this->belongsTo(School::class);
    }
    public function massages(){
        return this->hasMany(Massage::class);
    }
    public function attachments(){
        return this->hasMany(Attachment::class);
    }
}
