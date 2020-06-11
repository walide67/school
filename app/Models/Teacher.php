<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable
{
    use Notifiable;

    protected $guard = 'teacher';
    public $timestamps = false;
    protected $fillable = [
    'identify',
    'password',
    'first_name',
    'last_name',
    'school_id',
    'matter_id',
    'photo',
    'rate',
    'votes_number',
    'notification_token',
    'remember_token'];
    protected $hidden = ['password','notification_token','remember_token'];
}
