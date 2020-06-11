<?php

use Illuminate\Database\Seeder;
use App\Models\SubAdmin;

class SubAdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(config('subAdmin.sub_admin_name')){
            SubAdmin::firstOrCreate(
                [
                    'email' => config('subAdmin.sub_admin_email'),
                    'phone' => config('subAdmin.sub_admin_phone'),
                    'school_name' => config('subAdmin.sub_admin_name'),
                    'password' => bcrypt(config('subAdmin.sub_admin_password')),
                    'status' => config('subAdmin.sub_admin_status'),
                    'photo' => config('subAdmin.sub_admin_photo'),
                    'commune' => config('subAdmin.sub_admin_commune'),
                    'wilaya' => config('subAdmin.sub_admin_wilaya'),
                    'notification_token' => config('subAdmin.sub_admin_notification_token'),
                    'remember_token' => config('subAdmin.sub_admin_remember_token'),
                ]
            );
        }
    }
}
