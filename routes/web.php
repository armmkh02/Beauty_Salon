<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

//admin part
Route::group(['prefix' => 'test-admin' , 'middleware' => 'auth', 'middleware' => 'check', 'namespace' => 'Admin'], function () {
    Route::get('/'                            , 'AdminController@index')->name('admin-index');
    Route::get('/messages'                    , 'AdminController@messages')->name('admin-messages');
    Route::post('/template-image-delete'      , 'AdminController@deleteImage')->name('admin-delete-template-message');
    Route::get('/template-image'              , 'AdminController@updateImageView')->name('admin-update-template-image');
    Route::post('/template-image-update-view' , 'AdminController@updateImage')->name('admin-update-template-image-view');
    Route::post('/template-image-update'      , 'AdminController@updateImageDB')->name('admin-update-template-image-db');
    Route::get('/change-status/{id}'          , 'AdminController@changeStatus');
});


//front part
Route::group(['namespace' => 'Front'], function () {
    Route::get('/'               , 'FrontController@index')->name('index');
    Route::get('/templates'      , 'FrontController@templates')->name('templates');
    Route::get('/pricing'        , 'FrontController@pricing')->name('pricing');
    Route::get('/contact'        , 'FrontController@contact')->name('contact');
    Route::get('/about-us'       , 'FrontController@AboutUs')->name('about-us');
    Route::get('/profile'        , 'FrontController@profile')->name('profile');
    Route::get('/order/{id?}'    , 'FrontController@order')->name('order');
    Route::get('/login-register' , 'FrontController@loginRegister')->name('login-register');
    Route::post('/user-update'   , 'FrontController@userUpdate')->name('user-update');
    Route::post('/send'          , 'OrderController@send')->name('sendEmail');
});

//front-templates part
Route::group(['prefix' => 'them1', 'namespace' => 'Themplates'], function () {

    Route::get('/'                 ,'ThemOneController@index')->name('index1');
    Route::get('/about'            ,'ThemOneController@about')->name('about1');
    Route::get('/categories/{id?}' ,'ThemOneController@categories')->name('categories1');
    Route::get('/specialists'      ,'ThemOneController@specialists')->name('specialists1');
    Route::get('/contact'          ,'ThemOneController@contact')->name('contact1');
    Route::get('/booking'          ,'ThemOneController@booking')->name('booking1');

});
Route::group(['prefix' => 'them2', 'namespace' => 'Themplates'], function () {

    Route::get('/'                 ,'ThemTwoController@index')->name('index2');
    Route::get('/about'            ,'ThemTwoController@about')->name('about2');
    Route::get('/categories/{id?}' ,'ThemTwoController@categories')->name('categories2');
    Route::get('/specialists'      ,'ThemTwoController@specialists')->name('specialists2');
    Route::get('/contact'          ,'ThemTwoController@contact')->name('contact2');
    Route::get('/booking'          ,'ThemTwoController@booking')->name('booking2');

});
Route::group(['prefix' => 'them3', 'namespace' => 'Themplates'], function () {

    Route::get('/'                 ,'ThemThreeController@index')->name('index3');
    Route::get('/about'            ,'ThemThreeController@about')->name('about3');
    Route::get('/categories/{id?}' ,'ThemThreeController@categories')->name('categories3');
    Route::get('/specialists'      ,'ThemThreeController@specialists')->name('specialists3');
    Route::get('/contact'          ,'ThemThreeController@contact')->name('contact3');
    Route::get('/booking'          ,'ThemThreeController@booking')->name('booking3');

});
Route::group(['prefix' => 'them4', 'namespace' => 'Themplates'], function () {

    Route::get('/'                 ,'ThemForthController@index')->name('index4');
    Route::get('/about'            ,'ThemForthController@about')->name('about4');
    Route::get('/categories/{id?}' ,'ThemForthController@categories')->name('categories4');
    Route::get('/specialists'      ,'ThemForthController@specialists')->name('specialists4');
    Route::get('/contact'          ,'ThemForthController@contact')->name('contact4');
    Route::get('/booking'          ,'ThemForthController@booking')->name('booking4');

});
Route::group(['prefix' => 'them5', 'namespace' => 'Themplates'], function () {

    Route::get('/'                 ,'ThemFiveController@index')->name('index5');
    Route::get('/about'            ,'ThemFiveController@about')->name('about5');
    Route::get('/categories/{id?}' ,'ThemFiveController@categories')->name('categories5');
    Route::get('/specialists'      ,'ThemFiveController@specialists')->name('specialists5');
    Route::get('/contact'          ,'ThemFiveController@contact')->name('contact5');
    Route::get('/booking'          ,'ThemFiveController@booking')->name('booking5');

});
Route::group(['prefix' => 'them6', 'namespace' => 'Themplates'], function () {

    Route::get('/'                 ,'ThemSixController@index')->name('index6');
    Route::get('/about'            ,'ThemSixController@about')->name('about6');
    Route::get('/categories/{id?}' ,'ThemSixController@categories')->name('categories6');
    Route::get('/specialists'      ,'ThemSixController@specialists')->name('specialists6');
    Route::get('/contact'          ,'ThemSixController@contact')->name('contact6');
    Route::get('/booking'          ,'ThemSixController@booking')->name('booking6');

});
Route::group(['prefix' => 'them7', 'namespace' => 'Themplates'], function () {

    Route::get('/'                 ,'ThemSevenController@index')->name('index7');
    Route::get('/about'            ,'ThemSevenController@about')->name('about7');
    Route::get('/categories/{id?}' ,'ThemSevenController@categories')->name('categories7');
    Route::get('/specialists'      ,'ThemSevenController@specialists')->name('specialists7');
    Route::get('/contact'          ,'ThemSevenController@contact')->name('contact7');
    Route::get('/booking'          ,'ThemSevenController@booking')->name('booking7');

});
Route::group(['prefix' => 'them8', 'namespace' => 'Themplates'], function () {

    Route::get('/'                 ,'ThemEightController@index')->name('index8');
    Route::get('/about'            ,'ThemEightController@about')->name('about8');
    Route::get('/categories/{id?}' ,'ThemEightController@categories')->name('categories8');
    Route::get('/specialists'      ,'ThemEightController@specialists')->name('specialists8');
    Route::get('/contact'          ,'ThemEightController@contact')->name('contact8');
    Route::get('/booking'          ,'ThemEightController@booking')->name('booking8');

});
Route::group(['prefix' => 'them9', 'namespace' => 'Themplates'], function () {

    Route::get('/'                 ,'ThemNineController@index')->name('index9');
    Route::get('/about'            ,'ThemNineController@about')->name('about9');
    Route::get('/categories/{id?}' ,'ThemNineController@categories')->name('categories9');
    Route::get('/specialists'      ,'ThemNineController@specialists')->name('specialists9');
    Route::get('/contact'          ,'ThemNineController@contact')->name('contact9');
    Route::get('/booking'          ,'ThemNineController@booking')->name('booking9');

});
Route::group(['prefix' => 'them10', 'namespace' => 'Themplates'], function () {

    Route::get('/'                 ,'ThemTenController@index')->name('index10');
    Route::get('/about'            ,'ThemTenController@about')->name('about10');
    Route::get('/categories/{id?}' ,'ThemTenController@categories')->name('categories10');
    Route::get('/specialists'      ,'ThemTenController@specialists')->name('specialists10');
    Route::get('/contact'          ,'ThemTenController@contact')->name('contact10');
    Route::get('/booking'          ,'ThemTenController@booking')->name('booking10');

});




