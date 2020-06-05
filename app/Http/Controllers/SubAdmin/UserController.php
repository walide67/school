<?php

namespace App\Http\Controllers\SubAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function schoolInfos(){
        return view('subAdmin.user.schoolInfos');
    }

    public function accountInfos(){
        return view('subAdmin.user.userAccount');
    }
}
