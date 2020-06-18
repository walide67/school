<?php
namespace App\Traits;

use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;

trait Teachers{

    public function createTeacher($data, $school_id, $photo_path, $status){
        return Teacher::create(
            [
                'identify' => $data['teacher_email'],
                'password' => Hash::make($data['teacher_password']),
                'first_name' => $data['user_fname'],
                'last_name' => $data['user_lname'],
                'school_id' => $school_id,
                'matter_id' => $data['matter'],
                'photo' => $photo_path,
                'status'=> $status,
                'rate' => 0,
                'votes_number' => 0,
                'notification_token' => '',
                'remember_token' => '',
            ]
        );
    }
}