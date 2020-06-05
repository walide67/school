<?php

namespace App\Http\Controllers\SubAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index(){
        return view('subAdmin.classes.showClasses');
    }

    public function addClassForm(){
        return view('subAdmin.classes.addClass');
    }
}
