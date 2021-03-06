<?php

/*
|--------------------------------------------------------------------------
| SubAdmin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => 'sub-admin', 'namespace'=> 'SubAdmin'], function () {
    
    Route::get('/login', 'SubAdminController@loginForm')->name('subAdmin.login');
    Route::post('/login', 'SubAdminController@login')->name('subAdmin.login.submit');

    Route::group(['namespace' => 'Auth', 'prefix' => 'password'], function(){
        Route::get('reset', 'ForgotPasswordController@ShowLinkrequestForm')->name('subadmin.password.request');
        Route::post('email','ForgotPasswordController@sendResetLinkEmail')->name('subadmin.password.email');
        Route::get('reset/{token}', 'ResetPasswordController@showResetForm')->name('subadmin.password.reset');
        Route::post('reset','ResetPasswordController@reset')->name('subadmin.password.update');
    });

    Route::group(['middleware' => 'auth:subAdmin'], function(){
    Route::get('/logout', 'SubAdminController@logout')->name('subAdmin.logout');

    Route::get('/', 'SubAdminController@index')->name('subAdmin-panel');

    Route::group(['prefix' => 'annonces'], function(){
        Route::get('/', 'AnnonceController@index')->name('subAdmin-annonces');
        Route::get('/add', 'AnnonceController@addAnnonceForm')->name('subAdmin-add-annonce');
        Route::post('/add', 'AnnonceController@addAnnonce')->name('subAdmin.add.annonce.submit');
    });

    Route::group(['prefix' => 'teachers'], function(){
        Route::get('/', 'TeachersController@index')->name('teachers');
        Route::get('/add', 'TeachersController@addTeacherForm')->name('add-teacher');
        Route::post('/add', 'TeachersController@addTeacher')->name('add.teacher.submit');
    });

    Route::group(['prefix' => 'classes'], function(){
        Route::get('/', 'ClassController@index')->name('classes');
        Route::get('/add', 'ClassController@addClassForm')->name('add-class');
        Route::post('/add', 'ClassController@addClass')->name('add.class.submit');
    });

    Route::group(['prefix' => 'user'], function(){
        Route::get('/user', 'UserController@schoolInfos')->name('school-infos');
        Route::post('/user', 'UserController@setSchoolInfos')->name('school.infos.submit');
        Route::get('/account', 'UserController@accountInfos')->name('subAdmin-Account-infos');
    });
});
});
