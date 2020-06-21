<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ConfirmsPasswords;
use Illuminate\Http\Request;

class ConfirmPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Confirm Password Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password confirmations and
    | uses a simple trait to include the behavior. You're free to explore
    | this trait and override any functions that require customization.
    |
    */

    use ConfirmsPasswords;

    /**
     * Where to redirect users when the intended url fails.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo($guard){
        if($guard == "teacher"){
            return 'teacher.panel';
        }

        if($guard == "subAdmin"){
            return 'subAdmin-panel';
        }

        if($guard == "admin"){
            return 'admin.panel';
        }

    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        if(auth('teacher')->check()){
            $this->middleware('auth:teacher');
        }

        if(auth('subAdmin')->check()){
            $this->middleware('auth:subAdmin');
        }

        if(auth('admin')->check()){
            $this->middleware('auth:admin');
        }
    }

    public function rules($guard){
        return [
            'password' => "required|password:$guard"
        ];
    }

    public function confirm(Request $request)
    {
        $guard = "";
        if(auth('teacher')->check()){
            $guard = "teacher";
        }

        if(auth('subAdmin')->check()){
            $guard = "subAdmin";
        }

        if(auth('admin')->check()){
            $guard = "admin";
        }
        $request->validate($this->rules($guard), $this->validationErrorMessages());

        $this->resetPasswordConfirmationTimeout($request);

        return redirect()->intended($this->redirectTo($guard));
    }
}
