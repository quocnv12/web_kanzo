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

// --------------------route fontend viết vào đấy-----------------------



Route::get('/', function () {
    return view('admins.index');
});




// ------------------------route admins viết vào đây-----------------------


                //------router login------
Route::get('login','admin\LoginController@GetLogin')->middleware('CheckLogout');
Route::post('login','admin\LoginController@PostLogin');



Route::group(['prefix' => 'admin','middleware'=>'CheckLogin'], function () {
    Route::get('','admin\IndexController@GetIndex');
    Route::get('logout','admin\LoginController@GetLogout');



    Route::get('form', function () {
        return view('admins.form.list');
    });
    Route::get('form/add', function () {
        return view('admins.form.add');
    });


                 //----------Gioi thieu-----
    Route::group(['prefix' => 'introduce'],function(){
    	Route::get('','admin\IntroduceController@list')->name('introduce.list');
    	Route::get('add','admin\IntroduceController@add')->name('introduce.add');
    	Route::post('add','admin\IntroduceController@post_add')->name('introduce.add');
    	Route::get('edit/{id}','admin\IntroduceController@edit')->name('introduce.edit');
    	Route::post('edit/{id}','admin\IntroduceController@post_edit')->name('introduce.edit');
    	Route::get('del/{id}','admin\IntroduceController@del')->name('introduce.del');
    });

    Route::group(['prefix' => 'account'],function(){
        Route::get('','admin\AccountController@GetList');
        Route::get('add','admin\AccountController@GetAddAccount');
        Route::post('add','admin\AccountController@PostAddAccount');
        Route::get('edit/{id}','admin\AccountController@GetEditAccount');
        Route::post('edit/{id}','admin\AccountController@PostEditAccount');
        Route::get('delete/{id}','admin\AccountController@Delete');
 
    });


});

