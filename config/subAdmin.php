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

    'sub_admin_name' => env('SUBADMIN_NAME', ''),
    'sub_admin_email' => env('SUBADMIN_EMAIL', ''),
    'sub_admin_phone' => env('SUBADMIN_PHONE', ''),
    'sub_admin_commune' => env('SUBADMIN_COMMUNE', ''),
    'sub_admin_wilaya' => env('SUBADMIN_WILAYA', ''),
    'sub_admin_photo' => env('SUBADMIN_PHOTO', ''),
    'sub_admin_status' => env('SUBADMIN_STATUS', ''),
    'sub_admin_notification_token' => env('SUBADMIN_NOTIFICATIONTOKEN', ''),
    'sub_admin_remember_token' => env('SUBADMIN_REMTOKEN', ''),
    'sub_admin_password' =>env('SUBADMIN_PASSWORD', '')
    ];