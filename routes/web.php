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

Route::get('hi', function () {
    return view('hi');
});

Route::view('bye', 'bye');


//Route::get('people', function () {

    //$people = ['sadi', 'smaira', 'shakibur', 'tahmeed' ];

    //return view('internals.people',['peoples_list' => $people]);
//});

Route::get('people', 'PeopleController@peopleList' );

Route::get('students', 'StudentController@insertStudentList' );

//Route::post('students', 'StudentController@showStudentList' );

//show
Route::get('students/show', 'StudentController@showStudentList' );
Route::get('students', 'StudentController@showStudentList' );

//Route::get('show', 'StudentController@show');

//add
Route::get('students/add', 'StudentController@addStudent');
Route::post('students/add', 'StudentController@addSave');

//update
//Route::get('students/edit/{id}', 'StudentController@findStudent');
Route::get('students/update/{id}', 'StudentController@updateStudent');
Route::post('students/update/{id}', 'StudentController@updateSave');

//delete
Route::get('students/delete/{id}', 'StudentController@deleteStudent');