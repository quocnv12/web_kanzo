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
Route::group(['prefix' => '','namespace' => 'frontend'],function(){
    //-----------------Trang chu
    Route::get('','HomeController@index')->name('home');
    //---------------tìm kiếm
    Route::get('seacrh','HomeController@Getsearch');
    //-----------------gioi thieu
    Route::get('gioi-thieu/{slug}','IntroduceController@index')->name('intro');
    //-----------------chinh sach
    Route::get('chinh-sach/{slug}','PolyciesController@index')->name('polycies');
    //--------------Khuyến mại
    Route::group(['prefix' => 'khuyen-mai'], function () {
        Route::get('','PromotionController@GetPromotion');
        Route::get('{slug}','PromotionController@GetDetail');
    });
   
    //-----------------Cau hoi thuong gap
    Route::get('cau-hoi/{slug}','QuestionController@index')->name('question');
    //product
    Route::get('danh-muc/{slug}','ProductController@index')->name('product');
    // Route::get('/product', function () {
    //     return view('pages.product');
    // })->name('product');
    Route::get('/product_detail/{slug}', 'ProductController@getProductDetail'
    )->name('product_detail');
    //new

    Route::group(['prefix' => 'tin-tuc'], function () {
        Route::get('','TintucController@Getnew')->name('new');
        Route::get('{slug}','TintucController@GetDetail')->name('new_detail');
    });
    // Route::get('/new', function () {
    //     return view('pages.new');
    // })->name('new');

    // Route::get('/new_detail', function () {
    //     return view('pages.new_detail');
    // })->name('new_detail');

    
    Route::get('/policy_detail', function () {
        return view('pages.policy_detail');
    })->name('policy_detail');

    //contact
    Route::group(['prefix' => 'contact'], function () {
        Route::get('','ContactController@GetContact')->name('contact');
        Route::post('','ContactController@PostContact');
    });
   
    //------đại lý
    Route::group(['prefix' => 'diemban'], function () {
        Route::get('','AgencyController@GetAgency')->name('diemban');
        Route::get('search','AgencyController@GetSearch');
    });
   
});

// ------------End


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

            //-------đổi quyền
    Route::group(['prefix' => 'phanquyen'],function(){
        Route::get('','LoginController@GetPhanQuyen');
        Route::get('edit/{id}','LoginController@GetEditPhanQuyen');
        Route::post('edit/{id}','LoginController@PostEditPhanQuyen');
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
        Route::get('', 'ProductController@getListProduct')->name('product.list');
        Route::get('add', 'ProductController@getAddProduct')->name('product.add');
        Route::post('add', 'ProductController@postAddProduct')->name('product.add.post');
        Route::get('edit/{id_product}', 'ProductController@getEditProduct')->name('product.edit');
        Route::post('edit/{id_product}', 'ProductController@postEditProduct')->name('product.edit.post');
        Route::get('delete/{id_product}', 'ProductController@getDeleteProduct')->name('product.delete');
    });
    Route::group(['prefix' => 'category'], function(){
        Route::get('', 'CategoryController@getListCategory')->name('category.list');
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
    //-------------------khuyen mai
    Route::group(['prefix' => 'promotion'], function(){
        Route::get('','PromotionController@list')->name('promotion.list');
        Route::get('add','PromotionController@add')->name('promotion.add');
        Route::post('add','PromotionController@post_add')->name('promotion.add');
        Route::get('edit/{id}','PromotionController@edit')->name('promotion.edit');
        Route::post('edit/{id}','PromotionController@post_edit')->name('promotion.edit');
        Route::get('delete/{id}','PromotionController@del')->name('promotion.del');
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
        Route::get('banner','PolyciesController@banner')->name('polycies.banner');
        Route::get('banner-edit/{id}','PolyciesController@banner_edit')->name('polycies.banner_edit');
        Route::post('banner-edit/{id}','PolyciesController@post_banner_edit')->name('polycies.banner_edit');
    });

    //-----------------Lien he
    Route::group(['prefix' => 'contact'],function(){
        Route::get('','ContactController@list')->name('contact.list');
        Route::get('edit/{id}','ContactController@edit')->name('contact.edit');
        Route::post('edit/{id}','ContactController@post_edit')->name('contact.edit');
    });
    //-----------------Don hang
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

    //-----------------pop-up
    Route::group(['prefix' => 'popup'],function(){
        Route::get('see','PopupController@list')->name('popup.list');
        Route::get('','PopupController@list2')->name('popup.list2');
        Route::get('add','PopupController@add')->name('popup.add');
        Route::post('add','PopupController@post_add')->name('popup.add');
        Route::get('active-edit/{id}','PopupController@active_edit')->name('popup.active_edit');
        Route::get('edit/{id}','PopupController@edit')->name('popup.edit');
        Route::post('edit/{id}','PopupController@post_edit')->name('popup.edit');
        Route::get('del/{id}','PopupController@del')->name('popup.del');
    });
    //--------------------Đại lý
    Route::group(['prefix' => 'agency'],function(){
        Route::get('','AgencyController@GetList');
        Route::get('add','AgencyController@GetAdd');
        Route::post('add','AgencyController@PostAdd');
        Route::get('edit/{id}','AgencyController@GetEdit');
        Route::post('edit/{id}','AgencyController@PostEdit');
        Route::get('delete/{id}','AgencyController@delete');
    });
    //-------------------Video
    Route::group(['prefix' => 'video'], function(){
        Route::get('', 'VideoController@list')->name('video.list');
        Route::get('add', 'VideoController@add')->name('video.add');
        Route::post('add', 'VideoController@post_add')->name('video.add');
        Route::get('edit/{id}', 'VideoController@edit')->name('video.edit');
        Route::post('edit/{id}', 'VideoController@post_edit')->name('video.edit');
        Route::get('delete/{id}', 'VideoController@del')->name('video.del');

        Route::get('add_image', 'VideoController@add_image')->name('video.add_image');
        Route::post('add_image', 'VideoController@post_add_image')->name('video.add_image');
        Route::get('edit_image/{id}', 'VideoController@edit_image')->name('video.edit_image');
        Route::post('edit_image/{id}', 'VideoController@post_edit_image')->name('video.edit_image');
    });

});

