<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matter extends Model
{
    public $timestamps = false;
    protected $fillable = ['matter_name', 'matter_level', 'matter_photo'];
    protected $hidden   = [];


    public function classes(){
        return $this->belongsToMany(Classe::class, 'classe_matter');
    }
}
