<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Students;
use App\Teachers;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/school', 'SchoolController@index')->name('school');

Route::get('/teacher', function () {
    $teacher = Teachers::all();
     return view('dashboard.teacher.index', compact('teacher'));
});
Route::get('/teacher/add', 'TeacherController@add')->name('teacher.add');
Route::post('/teacher/store', 'TeacherController@store')->name('teacher.store');



Route::get('/subject', 'SubjectController@index')->name('Subject');


Route::get('/student', function () {
    $student = Students::all();
     return view('dashboard.student.index', compact('student'));
});
Route::get('/student/add', 'StudentController@add')->name('student.add');
Route::post('/student/store', 'StudentController@store')->name('student.store');


Route::get('/analysis', 'AnalysisController@index')->name('analysis');
Route::get('/analysis/view', 'AnalysisController@show')->name('analysis.view');


Route::get('/home', 'HomeController@index')->name('home');


