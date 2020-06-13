<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   public function __construct(){
        $this->middleware('auth:admin')->except('adminLoginForm', 'adminLogin');
        $this->middleware('guest:admin')->only('adminLoginForm', 'adminLogin');
    }

    public function index(){
        return view('admin.index');
    }

    public function adminLoginForm(){
        return view('admin.login');
    }

    public function adminLogin(Request $request){
       $validate = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
        if($validate->fails()){
            return redirect()->back()
                    ->withInputs()
                    ->withErrors($validate);
        }

        if(Auth::guard('admin')->attempt($request->only(['email', 'password']), $request->remember_me)){
            return redirect()->intended(route('admin.panel'));
        }

        $errors = new MessageBag(['faild' => 'Email and/or password is invalid']);
        return redirect()->back()->withInputs($reqeust->only(['email', 'remember_me']))->withErrors($errors);
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    public function addSchoolForm(){
        return view('admin.schools.add_school');
    }
}
