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
Route::get('/','pagesController@index');
Route::get('/addemploy','pagesController@addemploy');
Route::post('/add_employ','pagesController@save_employ');
Route::get('/viewdetail','pagesController@viewdetail');
Route::get('/editemploy/{id}','pagesController@editemploy');
Route::put('/updateemploy/{id}','pagesController@updateemploy');
Route::get('/deletemploy/{id}','pagesController@deletemploy');
Route::get('/leaveapprove','leavecontroller@approveleave');
 

 
Route::get('/leave', function () {
    return view('leave.applyleave');
});
Route::get('/home', function () {
    return view('home');
});

Auth::routes();
 