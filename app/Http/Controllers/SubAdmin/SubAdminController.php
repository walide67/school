<?php

namespace App\Http\Controllers\SubAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubAdminLoginRaquest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;

class SubAdminController extends Controller
{

    public function __construct(){
        $this->middleware('auth:subAdmin')->except('loginForm', 'login');
        $this->middleware('guest:subAdmin')->only('loginForm', 'login');
    }

    public function index(){
        return view('subAdmin.index');
    }

    public function loginForm(){
        return view('subAdmin.login');
    }

    public function login(SubAdminLoginRaquest $request){
        $column_name = 'email';
        if(!filter_var($request->email, FILTER_VALIDATE_EMAIL)){
            $column_name = 'phone';
        }

        if (Auth::guard('subAdmin')->attempt([$column_name => $request->email, 'password' => $request->password], $request->remember_me)) {
            return redirect()->intended(route('subAdmin-panel'));
        }
        $errors = new MessageBag(['faild' => ['Email and/or password invalid.']]);
        return redirect()->back()->withInput($request->only('email', 'remember_me'))->withErrors($errors);
    }

    public function logout()
    {
        Auth::guard('subAdmin')->logout();
        return redirect(route('subAdmin.login'));
    }
}
