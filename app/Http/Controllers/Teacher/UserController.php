<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct(){
        
    }
    public function getUserInfos(){
        return view('teacher.user.userInfos');
    }

    public function getAccountInfos(){
        return view('teacher.user.userAccount');
    }
}
