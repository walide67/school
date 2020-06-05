<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Cours extends Controller
{
    public function index(){
        return view('teacher.cours.showCours');
    }

    public function addCourForm($action){
        $label = $action == 'edit'? 'تعديل' : 'اضافة';
        return view('teacher.cours.addCour')->with(compact('label'));
    }
}
