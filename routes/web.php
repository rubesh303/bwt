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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@home')->name('blog');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add_blog', 'BlogController@create')->name('add');
Route::get('/blogs', 'BlogController@index')->name('blist');
Route::get('/blog_details/{id}', 'BlogController@details')->name('details');
Route::post('/saveblog', 'BlogController@store')->name('store'); 
Route::get('/edit_blog/{id}', 'BlogController@edit')->name('edit');
Route::post('/updateblog', 'BlogController@update')->name('update');
Route::get('/delete_blog/{id}', 'BlogController@destroy')->name('delete');
Route::get('/add_category', 'CategoryController@create')->name('view');
Route::post('/savecategory', 'CategoryController@store')->name('store');
Route::get('/categories', 'CategoryController@index')->name('clist');
Route::get('/edit_category/{id}', 'CategoryController@edit')->name('editc');
Route::post('/updatecategory', 'CategoryController@update')->name('updatec');