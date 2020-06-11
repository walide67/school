<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function __construct(){
        $this->middleware('auth:teacher')->except('LoginForm');
        $this->middleware('guest:teacher')->only('LoginForm');
    }

    public function index(){
        return view('teacher.index');
    }

    public function LoginForm(){
        return view('teacher.login');
    }
}
