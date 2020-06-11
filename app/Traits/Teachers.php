<?php
namespace App\Traits;

use App\Models\Teacher;

trait Teachers{

    public function createTeacher($data, $photo_path){
        return Teacher::create(
            [
                'identify' => $data['teacher_email'],
                'password' => $data['teacher_password'],
                'first_name' => $data['user_fname'],
                'last_name' => $data['user_lname'],
                'school_id' => $data['school_id'],
                'matter_id' => $data['matter'],
                'photo' => $photo_path,
                'rate' => 0,
                'votes_number' => 0,
                'notification_token' => '',
                'remember_token' => '',
            ]
        );
    }
}