<?php

use Illuminate\Support\Facades\Route;
use App\Product;
use App\Products_type;
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
    return view('welcome')
        ->with('product', Product::all())
        ->with('category', Products_type::all());
})->name('welcome');

//ค้นหาข้อมูลแบบเลือกประเภทสินค้า
Route::get('/product/category/{id}', 'Admin\ProductController@findCategory');


Auth::routes();



Route::middleware(['auth'])->group(function () {

    Route::middleware(['verifyisadmin'])->group(function () {
        //admin
        Route::get('/index', 'Admin\AdminController@index')->name('index');

        //product
        Route::get('/product/index', 'Admin\ProductController@index')->name('product');
        Route::post('/product/create', 'Admin\ProductController@create')->name('createP');
        Route::get('/admin/product/edit/{id}', 'Admin\ProductController@edit');
        Route::post('admin/product/update/{id}', 'Admin\ProductController@update');
        Route::get('admin/product/delete/{id}', 'Admin\ProductController@delete');

        //product type
        Route::get('/product_type/index', 'Admin\Product_typeController@index')->name('type');
        Route::post('/product_type/create', 'Admin\Product_typeController@create')->name('createtype');
        Route::get('admin/product_type/Edit/{id}', 'Admin\Product_typeController@edit');
        Route::post('admin/product_type/Update/{id}', 'Admin\Product_typeController@update');
        Route::get('admin/product_type/Delete/{id}', 'Admin\Product_typeController@delete');



        //user
        Route::get('/user/index', 'Admin\UserController@index')->name('user');
        Route::get('/admin/user/edit/{id}', 'Admin\UserController@edit');
        Route::post('/admin/user/update/{id}', 'Admin\UserController@update');
        Route::get('/admin/user/delete/{id}', 'Admin\UserController@delete');

        // //header
        // Route::get('/header/index','Admin\HeaderController@index')->name('header');
        // //body
        // Route::get('/body/index','Admin\BodyController@index')->name('body');



        // Route::get('/about','HomeController@about');
    });

    Route::get('/home', 'HomeController@index')->name('home');
});
