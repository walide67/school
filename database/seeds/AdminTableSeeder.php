<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(config('admin.admin_name')){
            Admin::firstOrCreate(
                [
                    'fullname' => 'admin.admin_name',
                    'email' => config('admin.admin_email'),
                    'phone' => config('admin.admin_phone'),
                    'password' => bcrypt(config('admin.admin_password')),
                    'notification_token' => config('admin.admin_notification_token'),
                    'remember_token' => config('admin.admin_remember_token'),
                ]
            );
        }
    }
}
