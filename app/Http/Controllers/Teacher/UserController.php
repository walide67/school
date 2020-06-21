<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\UploadTrait;

class UserController extends Controller
{
    use UploadTrait;

    public function __construct(){
        $this->middleware('password.confirm')->only(['getUserInfos', 'getAccountInfos']);
    }
    public function getUserInfos(){
        $classes = auth('teacher')->user()->school->classes;
        $classes_lvl_1 = array();
        $classes_lvl_2 = array();
        $classes_lvl_3 = array();
        foreach($classes as $classe){
            switch ($classe->class_level) {
                case '1':
                    array_push($classes_lvl_1, $classe);
                    break;
                case '2':
                    array_push($classes_lvl_2, $classe);
                    break;
                case '3':
                    array_push($classes_lvl_3, $classe);
                    break;
            }
        }
        return view('teacher.user.userInfos')->with(compact('classes_lvl_1', 'classes_lvl_2', 'classes_lvl_3'));
    }

    public function getAccountInfos(){
        return view('teacher.user.userAccount');
    }

    public function setUserInfos(Request $request){
        $request->validate($this->setUserInfosRules());

        $file_path = 'uploads/teacher/avatars/';

        if($request->hasFile('user_photo') && $request->user_photo->isValid()){
            $file_name = $this->uploadfile($request->user_photo, $file_path);
            auth('teacher')->user()->photo = $file_path.$file_name;
            auth('teacher')->user()->save();
         }

         auth('teacher')->user()->update([
             'first_name' => $request->user_fname,
             'last_name' => $request->user_lname,
         ]);
         
         auth('teacher')->user()->classes()->sync($request->classes);

         return redirect()->back()->with('success', 'Your informations updated with success.');
         
    }

    private function setUserInfosRules(){
        return [
            'user_fname' => 'required|alpha',
            'user_lname' => 'required|alpha',
            'classes' => 'required',
            'user_photo' => 'image|nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    private function setUserInfosMessages(){
        return [

        ];
    }

    private function setUserInfosAttributes(){
        return [

        ];
    }
}
