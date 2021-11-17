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
//bai1
Route::get('/', function () {
 return view('master');
});
Route::get('/trang-chu', function () {
 return view('pages.home');
});
Route::get('/product', function () {
 return view('pages.product');
});
Route::get('/news', function () {
 return view('pages.news');
});
Route::get('/contact', function () {
 return view('pages.contact');
});
//bai2
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashnoard');
//bai3
Route::post('/admin-dashboard','AdminController@dashboard');
Route::get('/logout','AdminController@logout');
//Brand Product
Route::get('/add-brand-product','BrandProduct@add_brand_product');
Route::get('/all-brand-product','BrandProduct@all_brand_product');
Route::post('/save-brand-product','BrandProduct@save_brand_product');
Route::get('/unactive-brandproduct/{brand_product_id}','BrandProduct@unactive_brand_product');
Route::get('/active-brandproduct/{brand_product_id}','BrandProduct@active_brand_product');
?>
