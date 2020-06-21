<?php

namespace App\Http\Controllers\SubAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\UploadTrait;

class UserController extends Controller
{
    use UploadTrait;

    public function __construct(){
        $this->middleware('password.confirm')->only(['schoolInfos', 'accountInfos']);
    }

    public function schoolInfos(){
        return view('subAdmin.user.schoolInfos');
    }

    public function accountInfos(){
        return view('subAdmin.user.userAccount');
    }

    public function setSchoolinfos(Request $request){

        $request->validate($this->setSchoolInfosRules());

        $file_path = 'uploads/school/avatars/';

        if($request->hasFile('school_photo') && $request->school_photo->isValid()){
            $file_name = $this->uploadfile($request->school_photo, $file_path);
            auth('subAdmin')->user()->photo = $file_path.$file_name;
            auth('subAdmin')->user()->save();
         }

         auth('subAdmin')->user()->update([
             'school_name' => $request->school_name,
             'wilaya' => $request->wilaya,
             'commune' => $request->commune,
         ]);
         
         auth('teacher')->user()->classes()->sync($request->classes);

         return redirect()->back()->with('success', 'Your informations updated with success.');
         
    }

    private function setSchoolInfosRules(){
        return [
            'school_name' => 'required',
            'school_photo' => 'image|nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'wilaya' => 'required',
            'commune' => 'required',
        ];
    }
}
