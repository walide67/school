<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    public $timestamps = false;
    protected $fillable = ['class_level' ,'field_id', 'school_id', 'class_number'];
    protected $hidden   = [];

    public function matters(){
        return $this->belongsToMany(Matter::class, 'classe_matter');
    }

    public function field(){
        return $this->belongsTo(Field::class);
    }

    public function school(){
        return $this->belongsTo(SubAdmin::class);
    }

    public function teachers(){
        return $this->belongsToMany(Teacher::class , 'teacher_classe');
    }

    public function cours(){
        return $this->belongsToMany(Cour::class, 'classe_cour');
    }

    public function exams(){
        return $this->belongsToMany(Exam::class, 'classe_exam');
    }
}
