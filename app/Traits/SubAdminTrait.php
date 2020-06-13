<?php

namespace App\Traits;

use App\Models\SubAdmin;
use Illustrate\Support\Facades\Hash;

trait SubAdminTrait {
    
    public function createSubAdmin($data, $path_photo, $status){
        return SubAdmin::create(
            [
                'email' => $data['email'],
                'phone' => $data['phone'],
                'password' => Hash::make($data['password']),
                'school_name' => $data['school_name'],
                'commune' => $data['commune'],
                'wilaya' => $data['wilaya'],
                'notification_token' => '',
                'remember_token' => '',
            ]
        );
    }
}