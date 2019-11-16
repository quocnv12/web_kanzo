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

Route::group(['prefix' => 'admin','namespace' => 'admin'], function () {
    Route::get('', function () {
        return view('admins.index');
    });

    Route::get('form', function () {
        return view('admins.form.list');
    });
    Route::get('form/add', function () {
        return view('admins.form.add');
    });

    
    //-----------------Gioi thieu
    Route::group(['prefix' => 'introduce'],function(){
    	Route::get('','IntroduceController@list')->name('introduce.list');
    	Route::get('add','IntroduceController@add')->name('introduce.add');
    	Route::post('add','IntroduceController@post_add')->name('introduce.add');
    	Route::get('edit/{id}','IntroduceController@edit')->name('introduce.edit');
    	Route::post('edit/{id}','IntroduceController@post_edit')->name('introduce.edit');
    	Route::get('del/{id}','IntroduceController@del')->name('introduce.del');
    });
    //-----------------Gioi thieu chung
    Route::group(['prefix' => 'intro_general'],function(){
        Route::get('','IntrogeneralController@list')->name('intro.list');
        Route::get('edit/{id}','IntrogeneralController@edit')->name('intro.edit');
        Route::post('edit/{id}','IntrogeneralController@post_edit')->name('intro.edit');
    });
    //-----------------Chinh sach
    Route::group(['prefix' => 'polycies'],function(){
        Route::get('','PolyciesController@list')->name('polycies.list');
        Route::get('add','PolyciesController@add')->name('polycies.add');
        Route::post('add','PolyciesController@post_add')->name('polycies.add');
        Route::get('edit/{id}','PolyciesController@edit')->name('polycies.edit');
        Route::post('edit/{id}','PolyciesController@post_edit')->name('polycies.edit');
        Route::get('del/{id}','PolyciesController@del')->name('polycies.del');
    });


});

