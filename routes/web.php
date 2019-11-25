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

Route::get('/calculate' , 'CalculatorController@index')->name('calculate');
Route::post('/calculate' , 'CalculatorController@predictor')->name('calculate');

Route::get('/contact' , 'ContactController@index')->name('contact');
Route::post('/contact/send', 'ContactController@send');

Route::get('/about' , 'AboutController@index')->name('about');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('checkout' , 'OrderController');

Route::group(['as' => 'products.' , 'prefix' => 'products'], function ()
{
    Route::get('/' , 'HomeController@show')->name('all');
    Route::get('/{product}', 'HomeController@single')->name('single');
    Route::get('/addToCart/{product}' , 'HomeController@addToCart')->name('addToCart');
});

Route::group(['as' => 'cart.' , 'prefix' => 'cart'], function ()
{
    Route::get('/' , 'HomeController@cart')->name('all');
    Route::post('/remove/{product}' , 'HomeController@removeProduct')->name('remove');
    Route::post('/update/{product}' , 'HomeController@updateProduct')->name('update');
});


Route::get('/change-password' , 'Auth\ChangePasswordController@index')->name('password.change');
Route::post('change-password' , 'Auth\ChangePasswordController@changePassword')->name('password.update');
Route::get('/users/logout' , 'Auth\LoginController@logout')->name('user.logout');

Route::prefix('admin')->group(function()
{
    Route::get('/register' , 'Auth\AdminRegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register' , 'Auth\AdminRegisterController@register')->name('admin.register.submit');


    Route::get('/login' , 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login' , 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');

    Route::get('/change-password' , 'Auth\AdminChangePasswordController@index')->name('admin.password.change');
    Route::post('change-password' , 'Auth\AdminChangePasswordController@changePassword')->name('admin.password.update');

    Route::get('/logout' , 'Auth\AdminLoginController@logout')->name('admin.logout');

    Route::post('/password/email' , 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset' , 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset' , 'Auth\AdminForgotPasswordController@reset');
    Route::get('/password/reset/{token}' , 'Auth\AdminForgotPasswordController@showResetForm')->name('admin.password.reset');
});

Route::prefix('shopkeeper')->group(function()
{
    Route::get('/register' , 'Auth\ShopkeeperRegisterController@showRegistrationForm')->name('shopkeeper.register');
    Route::post('/register' , 'Auth\ShopkeeperRegisterController@register')->name('shopkeeper.register.submit');



    Route::get('/login' , 'Auth\ShopkeeperLoginController@showLoginForm')->name('shopkeeper.login');
    Route::post('/login' , 'Auth\ShopkeeperLoginController@login')->name('shopkeeper.login.submit');

    Route::get('category/{category}/remove', 'CategoryController@remove')->name('category.remove');
    Route::get('category/trash', 'CategoryController@trash')->name('category.trash');
    Route::get('category/recover/{id}', 'CategoryController@recoverCat')->name('category.recover');

    Route::get('product/{product}/remove', 'ProductController@remove')->name('product.remove');
    Route::get('product/trash', 'ProductController@trash')->name('product.trash');
    Route::get('product/recover/{id}', 'ProductController@recoverProduct')->name('product.recover');


    Route::get('/', 'ShopkeeperController@index')->name('shopkeeper.dashboard');


    Route::get('/change-password' , 'Auth\ShopkeeperChangePasswordController@index')->name('shopkeeper.password.change');
    Route::post('change-password' , 'Auth\ShopkeeperChangePasswordController@changePassword')->name('shopkeeper.password.update');

    Route::get('/logout' , 'Auth\ShopkeeperLoginController@logout')->name('shopkeeper.logout');

    Route::post('/password/email' , 'Auth\ShopkeeperForgotPasswordController@sendResetLinkEmail')->name('shopkeeper.password.email');
    Route::get('/password/reset' , 'Auth\ShopkeeperForgotPasswordController@showLinkRequestForm')->name('shopkeeper.password.request');
    Route::post('/password/reset' , 'Auth\ShopkeeperForgotPasswordController@reset');
    Route::get('/password/reset/{token}' , 'Auth\ShopkeeperForgotPasswordController@showResetForm')->name('shopkeeper.password.reset');

    Route::resource('category' , 'CategoryController');
    Route::resource('product' , 'ProductController');
    Route::resource('contact' , 'ContactController');
    Route::resource('about' , 'AboutController');
});

