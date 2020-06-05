<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function showExams(){
        return view('teacher.exams.exams');
    }

    public function addExamForm(){
        return view('teacher.exams.addExam');
    }
}
