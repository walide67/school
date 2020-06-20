<?php
namespace App\Traits;

use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;
use App\Traits\UploadTrait;
use App\Models\SubAdmin;

trait Teachers{

    use UploadTrait;

    public function createTeacher($request, $school_id, $status){

        $teacher = null;
        $file_path = 'uploads/teacher/avatars/';
        $file_name = 'avatar.png';

        if($request->hasFile('user_photo') && $request->user_photo->isValid()){
           $file_name = $this->uploadfile($request->user_photo, $file_path);
        }
        $school = SubAdmin::find($school_id);

        if(!empty($school)){
           $teacher = $school->teachers()->create(
                [
                    'identify' => $request->teacher_email,
                    'password' => Hash::make($request->teacher_password),
                    'first_name' => $request->user_fname,
                    'last_name' => $request->user_lname,
                    'school_id' => $school_id,
                    'matter_id' => $request->matter,
                    'photo' => $file_path.$file_name,
                    'status'=> $status,
                    'rate' => 0,
                    'votes_number' => 0,
                    'notification_token' => '',
                ]
            );
        }else{
            return redirect()->back()->with('error', 'school not found!')->withInputs($request->all());
        }
        
        return $teacher;
    }
}