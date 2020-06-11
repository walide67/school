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
    Route::get('/logout', 'SubAdminController@logout')->name('subAdmin.logout');

    Route::get('/', 'SubAdminController@index')->name('subAdmin-panel');

    Route::group(['prefix' => 'annonces'], function(){
        Route::get('/', 'AnnonceController@index')->name('subAdmin-annonces');
        Route::get('/add', 'AnnonceController@addAnnonceForm')->name('subAdmin-add-annonce');
    });

    Route::group(['prefix' => 'teachers'], function(){
        Route::get('/', 'TeachersController@index')->name('teachers');
        Route::get('/add', 'TeachersController@addTeacherForm')->name('add-teacher');
        Route::post('/add', 'TeachersController@addTeacher')->name('add.teacher.submit');
    });

    Route::group(['prefix' => 'classes'], function(){
        Route::get('/', 'ClassController@index')->name('classes');
        Route::get('/add', 'ClassController@addClassForm')->name('add-class');
    });

    Route::group(['prefix' => 'user'], function(){
        Route::get('/', 'UserController@schoolInfos')->name('school-infos');
        Route::get('/add', 'UserController@accountInfos')->name('subAdmin-Account-infos');
    });
});
