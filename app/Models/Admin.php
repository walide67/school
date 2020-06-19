<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    public $timestamps = false;
    protected $fillable = ['email','phone', 'password', 'fullname', 'last_visit', 'notification_token', 'remember_token'];
    protected $hidden   = ['password', 'notification_token', 'remember_token'];

    public function annonces(){
        return $this->morphMany(Annonce::class, 'annonceable');
    }

}

