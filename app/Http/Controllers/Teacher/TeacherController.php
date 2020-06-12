<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherLoginRaquest;
use illuminate\Support\Facades\Auth;
use illuminate\Support\MessageBag;

class TeacherController extends Controller
{
    public function __construct(){
        $this->middleware('auth:teacher')->except('LoginForm','login');
        $this->middleware('guest:teacher')->only('LoginForm','login');
    }

    public function index(){
        return view('teacher.index');
    }

    public function LoginForm(){
        return view('teacher.login');
    }

    public function login(TeacherLoginRaquest $request){
        
        if (Auth::guard('teacher')->attempt($request->only(['identify', 'password']), $request->remember_me)) {
            return redirect()->intended(route('teacher.panel'));
        }
        $errors = new MessageBag(['faild' => ['Email and/or password invalid.']]);
        return redirect()->back()->withInput($request->only('email', 'remember_me'))->withErrors($errors);
     }

     public function logout(){
         Auth::guard('teacher')->logout();
         return redirect()->route('teacher.login');
     }
}
