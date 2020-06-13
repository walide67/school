<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use App\Traits\SubAdminTrait;

class SchoolController extends Controller
{
    use SubAdminTrait;
   public function __construct(){
        $this->middleware('auth:admin');
    }

    public function index(){
        return view('admin.schools.show_schools');
    }

    public function addSchoolForm(){
        return view('admin.schools.add_school');
    }

    public function addSchool(Request $request){
        
    }

}