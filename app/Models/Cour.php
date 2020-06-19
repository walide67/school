<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{
    protected $hidden = [];
    protected $guarded = ['id'];

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }

    public function classes(){
        return $this->belongsToMany(Classe::class, 'classe_cour');
    }
}
