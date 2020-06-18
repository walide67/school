<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Traits\SubAdminTrait;
use App\Http\Requests\AddSubAdminRequest;
use App\Models\SubAdmin;
class SchoolController extends Controller
{
    use SubAdminTrait;
   public function __construct(){
        $this->middleware('auth:admin');
    }

    public function index(){
        $schools = SubAdmin::all();
        return view('admin.schools.show_schools')->with('schools', $schools);
    }

    public function addSchoolForm(){
        return view('admin.schools.add_school');
    }

    public function addSchool(AddSubAdminRequest $request){

        $this->createSubAdmin($request->all(), '', 1);

        return redirect()->back()->with('success', 'School Added with success');
    }
}