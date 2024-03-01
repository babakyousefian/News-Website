<?php

/**
 * Author babak yousefian
 */


use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/','App\Http\Controllers\IndexController@index');
Route::get('/more/{news}','App\Http\Controllers\IndexController@more');
Route::get('/category/{id}','App\Http\Controllers\IndexController@category');
Route::get('/login','App\Http\Controllers\IndexController@login');
Route::post('/login_check','App\Http\Controllers\IndexController@login_check');
Route::post('/search','App\Http\Controllers\IndexController@search');



Route::get('/admin/news/add','App\Http\Controllers\NewsController@add_news_form');
Route::post('/admin/news/add_check','App\Http\Controllers\NewsController@add_news_check');
Route::get('/admin/news/show','App\Http\Controllers\NewsController@show_news');
Route::get('/admin/news/delete/{news}','App\Http\Controllers\NewsController@delete_news');
Route::get('/admin/news/update/{news}','App\Http\Controllers\NewsController@update_news_form');
Route::post('/admin/news/update_check/{news}','App\Http\Controllers\NewsController@update_news_check');



Route::get('/admin/category/add','App\Http\Controllers\CategoryController@add_category_form');
Route::post('/admin/category/add_check','App\Http\Controllers\CategoryController@add_category_check');
Route::get('/admin/category/show','App\Http\Controllers\CategoryController@show_categories');
Route::get('/admin/category/delete/{category}','App\Http\Controllers\CategoryController@delete_category');
Route::get('/admin/category/update/{category}','App\Http\Controllers\CategoryController@update_category_form');
Route::post('/admin/category/update_check/{category}','App\Http\Controllers\CategoryController@update_category_check');



Route::get('/admin/account/update','App\Http\Controllers\AdminController@update_account_form');
Route::post('/admin/account/update_check/{admin}','App\Http\Controllers\AdminController@update_account_check');
Route::get('/admin/panel','App\Http\Controllers\AdminController@panel');
Route::get('/exit','App\Http\Controllers\AdminController@exit');
