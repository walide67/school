<?php

namespace App\Traits;

use App\Models\SubAdmin;
use Illuminate\Support\Facades\Hash;

trait SubAdminTrait {
    
    public function createSubAdmin($data, $path_photo, $status){
        return SubAdmin::create(
            [
                'email' => $data['email'],
                'phone' => $data['phone_num'],
                'password' => Hash::make($data['password']),
                'school_name' => $data['school_name'],
                'commune' => $data['commune'],
                'wilaya' => $data['wilaya'],
                'status'    => $status,
                'photo' => $path_photo,
                'notification_token' => '',
            ]
        );
    }
}