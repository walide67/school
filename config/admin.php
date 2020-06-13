<?php
return [

    /*
    |--------------------------------------------------------------------------
    | Default sub admin user
    |--------------------------------------------------------------------------
    |
    | Default user will be created at project installation/deployment
    |
    */

    'admin_name' => env('ADMIN_FULLNAME', ''),
    'admin_email' => env('ADMIN_EMAIL', ''),
    'admin_phone' => env('ADMIN_PHONE', ''),
    'admin_notification_token' => env('ADMIN_NOTIFICATIONTOKEN', ''),
    'admin_remember_token' => env('ADMIN_REMTOKEN', ''),
    'admin_password' =>env('ADMIN_PASSWORD', '')
    ];