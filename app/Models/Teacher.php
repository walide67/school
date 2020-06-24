<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;

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

    public function school(){
        return $this->belongsTo(SubAdmin::class);
    }

    public function matter(){
        return $this->belongsTo(Matter::class);
    }

    public function classes(){
        return $this->belongsToMany(Classe::class, 'teacher_classe');
    }

    public function annonces(){
        return $this->morphMany(Annonce::class, 'annonceable');
    }

    public function cours(){
        return $this->hasMany(Cour::class);
    }

    public function exams(){
        return $this->hasMany(Exam::class);
    }

    public function getEmailForPasswordReset()
    {
        return $this->identify;
    }

    public function routeNotificationFor($driver)
    {
        if (method_exists($this, $method = 'routeNotificationFor'.Str::studly($driver))) {
            return $this->{$method}();
        }

        switch ($driver) {
            case 'database':
                return $this->notifications();
            case 'mail':
                return $this->identify;
            case 'nexmo':
                return $this->identify;
        }
    }
}

