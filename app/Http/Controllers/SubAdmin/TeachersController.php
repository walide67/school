<?php

namespace App\Http\Controllers\SubAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function index(){
        return view('subAdmin.teachers.showTeachers');
    }

    public function addTeacherForm(){
        return view('subAdmin.teachers.addTeacher');
    }
}
