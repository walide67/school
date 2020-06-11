<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class SubAdmin extends Authenticatable
{
    use Notifiable;

    protected $table = 'subadmins';
    protected $guard = "subAdmin";
    public $timestamps = false;
    protected $fillable = [
        'email', 'phone', 'school_name', 'password', 'commune', 'wilaya', 'status', 'photo', 'notification_token', 'remember_token', 'last_visit'
    ];
    protected $hidden = [
        'password', 'notification_token', 'remember_token'
    ];

}
