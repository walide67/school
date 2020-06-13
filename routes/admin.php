<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin.panel');
    Route::get('/login', 'AdminController@adminLoginForm')->name('admin.login');
    Route::post('/login', 'AdminController@adminLogin')->name('admin.login.submit');
    Route::get('/logout', 'AdminController@logout')->name('admin.logout');

    Route::group(['prefix' => 'schools'], function(){
        Route::get('/', 'SchoolController@index')->name('admin.schools');
        Route::get('/add', 'SchoolController@addSchoolForm')->name('admin.add.school');
        Route::post('/add', 'SchoolController@addSchool')->name('admin.add.school.submit');    
    });

    Route::group(['prefix' => 'matters'], function(){
        Route::get('/', 'MatterController@index')->name('admin.matters');
        Route::get('/add', 'MatterController@addMatterForm')->name('admin.add.matter');
        Route::post('/add', 'MatterController@addMatter')->name('admin.add.matter.submit');    
    });

    Route::group(['prefix' => 'fields'], function(){
        Route::get('/', 'FieldController@index')->name('admin.fields');
        Route::get('/add', 'FieldController@addFieldForm')->name('admin.add.field');
        Route::post('/add', 'FieldController@addField')->name('admin.add.fields.submit');    
    });

    Route::group(['prefix' => 'annonces'], function(){
        Route::get('/', 'AnnonceController@index')->name('admin.annonces');
        Route::get('/add', 'AnnonceController@addAnnonceForm')->name('admin.add.annonce');
        Route::post('/add', 'AnnonceController@addAnnonce')->name('admin.add.annonce.submit');    
    });


});
