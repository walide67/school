<?php

namespace App\Http\Controllers\SubAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubAdminAddTeacherRequest;
use App\Traits\Teachers;
use Illuminate\Support\Facades\Auth;
use App\Models\Matter;
use App\Models\Classe;
use App\Models\Teacher;

class TeachersController extends Controller
{
    use Teachers;


    public function index(){
        $teachers = Teacher::where('school_id', auth('subAdmin')->user()->id)->get();
        return view('subAdmin.teachers.showTeachers')->with('teachers', $teachers);
    }

    public function addTeacherForm(){
        $matters = Matter::all();
        $classes = auth('subAdmin')->user()->classes;
        $classes_lvl_1 = array();
        $classes_lvl_2 = array();
        $classes_lvl_3 = array();
        foreach($classes as $classe){
            switch($classe->class_level){
                case 1 :
                    array_push($classes_lvl_1, $classe);
                break;
                case 2 :
                    array_push($classes_lvl_2, $classe);
                break;
                case 3 :
                    array_push($classes_lvl_3, $classe);
                break;
            }
        }
        return view('subAdmin.teachers.addTeacher')->with(compact('matters', 'classes_lvl_1', 'classes_lvl_2', 'classes_lvl_3'));
    }

    public function addTeacher(SubAdminAddTeacherRequest $request){
        $school_id = Auth::guard('subAdmin')->id();
        $teacher = $this->createTeacher($request->all(), $school_id, '', 1);
        if(!empty($teacher)){
            $teacher->classes()->sync($request->classes);
            return redirect()->back()->with('success', 'Teacher added with Success');
        }else{
            return redirect()->back()->with('error', 'fails to insert teacher try later');
        }
        
    }
}
