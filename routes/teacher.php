<?php
/*
|--------------------------------------------------------------------------
| teacher Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix'=> 'teacher-area', 'namespace' => 'Teacher'],function () {
    
    Route::get('/login', 'TeacherController@LoginForm')->name('teacher.login');
    Route::post('/login', 'TeacherController@login')->name('teacher.login.submit');

    Route::group(['middleware' => 'auth:teacher'], function(){
        
        Route::get('/logout', 'TeacherController@logout')->name('teacher.logout');
    
        Route::get('/', 'TeacherController@index')->name('teacher.panel');
    
        Route::group(['prefix'=> 'cours'],function(){
            Route::get('/', 'Cours@index')->name('showcours');
            Route::get('/add', 'Cours@addCourForm')->name('add-cour');
            Route::post('/add', 'Cours@addCour')->name('add.cour.submit');
        });
    
        Route::group(['prefix'=> 'exams'],function(){
            Route::get('/', 'ExamController@showExams')->name('show-exams');
            Route::get('/add', 'ExamController@addExamForm')->name('add-exam');
            Route::post('/add', 'ExamController@addExam')->name('add.exam.submit');
    
        });
    
        Route::group(['prefix'=> 'annonces'], function(){
            Route::get('/', 'AnnonceController@showAnnonces')->name('show-annonces');
            Route::get('/add', 'AnnonceController@addAnnonceForm')->name('add-annonce');
            Route::post('/add', 'AnnonceController@addAnnonce')->name('teacher.addAnnonce.submit');
        });
    
        Route::group(['prefix'=> 'user'], function(){
            Route::get('/', 'UserController@getUserInfos')->name('user-infos')->middleware('password.confirm');
            Route::get('/account', 'UserController@getAccountInfos')->name('account-infos');
        });
    });
});
