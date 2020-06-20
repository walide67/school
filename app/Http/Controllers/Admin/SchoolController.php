<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Traits\SubAdminTrait;
use App\Traits\UploadTrait;
use App\Http\Requests\AddSubAdminRequest;
use App\Models\SubAdmin;


class SchoolController extends Controller
{
    use SubAdminTrait;
    use UploadTrait;

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

        $file_path = 'uploads/school/avatars/';
        $file_name = 'avatar.jpg';

        if($request->hasFile('school_pic') && $request->school_pic->isValid()){
           $file_name = $this->uploadfile($request->school_pic, $file_path);
        }

        $this->createSubAdmin($request->all(), $file_path.$file_name, 1);

        return redirect()->back()->with('success', 'School Added with success');
    }
}