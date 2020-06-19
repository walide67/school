<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $guarded = ['id'];
    protected $hidden = [];

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }

    public function classes(){
        return $this->belongsToMany(Classe::class, 'classe_exam');
    }
}
