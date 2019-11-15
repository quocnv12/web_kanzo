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

// route fontend viết vào đấy

Route::get('/', function () {
    return view('admins.index');
});





// route admins viết vào đây

Route::group(['prefix' => 'admin'], function () {
    Route::get('', function () {
        return view('admins.index');
    });


    Route::get('form', function () {
        return view('admins.form.list');
    });
    Route::get('form/add', function () {
        return view('admins.form.add');
    });



});

