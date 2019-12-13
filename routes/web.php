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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/school', 'SchoolController@index')->name('school');

Route::get('/teacher', 'TeacherController@index')->name('teacher');
Route::get('/teacher/add', 'TeacherController@add')->name('teacher.add');

Route::get('/subject', 'SubjectController@index')->name('Subject');

Route::get('/student', 'StudentController@index')->name('student');
Route::get('/student/add', 'StudentController@add')->name('student.add');


Route::get('/analysis', 'AnalysisController@index')->name('analysis');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/sms/send/{to}', function(\Nexmo\Client $nexmo, $to){
    $message = $nexmo->message()->send([
        'to' => $to,
        'from' => env('NEXMO_NUMBER'),
        'text' => 'Sending SMS from Laravel. Woohoo!'
    ]);
    Log::info('sent message: ' . $message['message-id']);
});
