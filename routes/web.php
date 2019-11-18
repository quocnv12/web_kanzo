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

                //--lấy lại mật khẩu
Route::get('lay-lai-mat-khau','Auth\ForgotPasswordController@GetResetPassword');
Route::post('lay-lai-mat-khau','Auth\ForgotPasswordController@PostResetPassword');
Route::get('thay-doi-mat-khau','Auth\ForgotPasswordController@ResetPassword')->name('link.reset.password');
Route::post('thay-doi-mat-khau','Auth\ForgotPasswordController@PosetReset');

Route::group(['prefix' => 'admin','namespace'=>'admin','middleware'=>'CheckLogin'], function () {
    Route::get('','IndexController@GetIndex');
    Route::get('logout','LoginController@GetLogout');

            //------------Đổi mật khẩu
    Route::get('password','LoginController@GetPassword');
    Route::post('password','LoginController@PostPassword');


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
        Route::get('banner','IntroduceController@banner')->name('introduce.banner');
        Route::get('banner-edit/{id}','IntroduceController@banner_edit')->name('introduce.banner_edit');
        Route::post('banner-edit/{id}','IntroduceController@post_banner_edit')->name('introduce.banner_edit');
    });

    //---------------San Pham
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

    //-------------------Tin Tuc
    Route::group(['prefix' => 'news'], function(){
        Route::get('', 'NewsController@list')->name('news.list');
        Route::get('add', 'NewsController@add')->name('news.add');
        Route::post('add', 'NewsController@post_add')->name('news.add');
        Route::get('edit/{id}', 'NewsController@edit')->name('news.edit');
        Route::post('edit/{id}', 'NewsController@post_edit')->name('news.edit');
        Route::get('delete/{id}', 'NewsController@del')->name('news.del');
    });

        // -------------tài khoản
    Route::group(['prefix' => 'account'],function(){
        Route::get('','AccountController@GetList');
        Route::get('add','AccountController@GetAddAccount');
        Route::post('add','AccountController@PostAddAccount');
        Route::get('edit/{id}','AccountController@GetEditAccount');
        Route::post('edit/{id}','AccountController@PostEditAccount');
        Route::get('delete/{id}','AccountController@Delete');
 
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

    //-----------------Lien he
    Route::group(['prefix' => 'contact'],function(){
        Route::get('','ContactController@list')->name('contact.list');
        Route::get('edit/{id}','ContactController@edit')->name('contact.edit');
        Route::post('edit/{id}','ContactController@post_edit')->name('contact.edit');
    });
    //-----------------Khach hang lien he
    Route::group(['prefix' => 'sent_us'],function(){
        Route::get('','SentusController@list')->name('sentus.list');
        Route::get('processed','SentusController@list2')->name('sentus.list2');
        Route::get('edit/{id}','SentusController@edit')->name('sentus.edit');
        Route::get('add','SentusController@add')->name('sentus.add');
        Route::post('add','SentusController@post_add')->name('sentus.add');
        Route::get('del/{id}','SentusController@del')->name('sentus.del');
    });
    //-----------------Cau hoi thuong gap
    Route::group(['prefix' => 'question'],function(){
        Route::get('','QuestionController@list')->name('question.list');
        Route::get('add','QuestionController@add')->name('question.add');
        Route::post('add','QuestionController@post_add')->name('question.add');
        Route::get('edit/{id}','QuestionController@edit')->name('question.edit');
        Route::post('edit/{id}','QuestionController@post_edit')->name('question.edit');
        Route::get('del/{id}','QuestionController@del')->name('question.del');
    });



});

