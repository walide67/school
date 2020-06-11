<?php

namespace App\Http\Controllers\SubAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubAdminAddTeacherRequest;
use App\Traits\Teachers;

class TeachersController extends Controller
{
    use Teachers;


    public function index(){
        return view('subAdmin.teachers.showTeachers');
    }

    public function addTeacherForm(){
        return view('subAdmin.teachers.addTeacher');
    }

    public function addTeacher(SubAdminAddTeacherRequest $request){
        // $check = $this->createTeacher($request->all(), '');
        // if($check != null){
        //     redirect()->back()->with('success', 'Teacher added with Success');
        // }else{
        //     redirect()->back()->with('error', 'Teacher registration faild!');
        // }
    }
}
