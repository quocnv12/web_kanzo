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

    
    //Gioi thieu
    Route::group(['prefix' => 'introduce'],function(){
    	Route::get('','IntroduceController@list')->name('introduce.list');
    	Route::get('add','IntroduceController@add')->name('introduce.add');
    	Route::post('add','IntroduceController@post_add')->name('introduce.add');
    	Route::get('edit/{id}','IntroduceController@edit')->name('introduce.edit');
    	Route::post('edit/{id}','IntroduceController@post_edit')->name('introduce.edit');
    	Route::get('del/{id}','IntroduceController@del')->name('introduce.del');
    });
    Route::group(['prefix' => 'product'], function(){
        Route::get('list', 'ProductController@getListProduct')->name('product.list');
        Route::get('add', 'ProductController@getAddProduct')->name('product.add');
        Route::post('add', 'ProductController@postAddProduct')->name('product.add.post');
        Route::get('edit/{id_product}', 'ProductController@getEditProduct')->name('product.edit');
        Route::post('edit/{id_product}', 'ProductController@postEditProduct')->name('product.edit.post');
        Route::get('delete/{id_product}', 'ProductController@getDeleteProduct')->name('product.delete');
    });
    Route::group(['prefix' => 'category'], function(){
        Route::get('list', 'CategoryController@getListCategory')->name('category.list');
        Route::get('add', 'CategoryController@getAddCategory')->name('category.add');
        Route::post('add', 'CategoryController@postAddCategory')->name('category.add.post');
        Route::get('edit/{id_category}', 'CategoryController@getEditCategory')->name('category.edit');
        Route::post('edit/{id_category}', 'CategoryController@postEditCategory')->name('category.edit.post');
        Route::get('delete/{id_category}', 'CategoryController@getDeleteCategory')->name('category.delete');
    });

});

