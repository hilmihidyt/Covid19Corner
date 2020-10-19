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

Route::get('/','FrontController@home')->name('home');
Route::get('blog','FrontController@blog')->name('blog');
Route::get('blog/search','FrontController@search')->name('search');
Route::get('blog/{slug}','FrontController@blogshow')->name('blogshow');
Route::get('categories/{category:slug}','FrontController@category')->name('category');
Route::get('tags/{tag:slug}','FrontController@tag')->name('tag');
Route::get('hubungi-kami','FrontController@contact')->name('contact');
Route::post('hubungi-kami','FrontController@message')->name('message');


Auth::routes();

Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('dashboard','DashboardController')->name('dashboard');

    // Manage Blog
    Route::get('post','PostController@index')->name('admin.post');

    Route::get('post/create','PostController@create')->name('admin.post.create');

    Route::post('post/create','PostController@store')->name('admin.post.store');

    Route::get('post/edit/{id}','PostController@edit')->name('admin.post.edit');

    Route::post('post/edit/{id}','PostController@update')->name('admin.post.update');

    Route::get('post/trash','PostController@trash')->name('admin.post.trash');

    Route::post('post/{id}/restore','PostController@restore')->name('admin.post.restore');

    Route::delete('post/trash/{id}','PostController@destroy')->name('admin.post.destroy');

    Route::delete('post/destroy/{id}','PostController@deletePermanent')->name('admin.post.deletePermanent');

    // Manage Blog Tag
    Route::get('tag','TagController@index')->name('admin.tag');

    Route::get('tag/create','TagController@create')->name('admin.tag.create');

    Route::post('tag/create','TagController@store')->name('admin.tag.store');

    Route::get('tag/edit/{id}','TagController@edit')->name('admin.tag.edit');

    Route::post('tag/edit/{id}','TagController@update')->name('admin.tag.update');

    Route::delete('tag/destroy/{id}','TagController@destroy')->name('admin.tag.destroy');

    // Manage Blog Category
    Route::get('category','CategoryController@index')->name('admin.category');

    Route::get('category/create','CategoryController@create')->name('admin.category.create');

    Route::post('category/create','CategoryController@store')->name('admin.category.store');

    Route::get('category/edit/{id}','CategoryController@edit')->name('admin.category.edit');

    Route::post('category/edit/{id}','CategoryController@update')->name('admin.category.update');

    Route::delete('category/destroy/{id}','CategoryController@destroy')->name('admin.category.destroy');

    // Manage Symptom
    Route::get('symptom','SymptomController@index')->name('admin.symptom');

    Route::post('symptom','SymptomController@store')->name('admin.symptom.store');

    Route::get('symptom/edit/{id}','SymptomController@edit')->name('admin.symptom.edit');

    Route::post('symptom/edit/{id}','SymptomController@update')->name('admin.symptom.update');

    Route::delete('symptom/destroy/{id}','SymptomController@destroy')->name('admin.symptom.destroy');

    // Manage Protect
    Route::get('protect','ProtectController@index')->name('admin.protect');

    Route::post('protect','ProtectController@store')->name('admin.protect.store');

    Route::get('protect/edit/{id}','ProtectController@edit')->name('admin.protect.edit');

    Route::post('protect/edit/{id}','ProtectController@update')->name('admin.protect.update');

    Route::delete('protect/destroy/{id}','ProtectController@destroy')->name('admin.protect.destroy');

    // Manage Messages
    Route::get('message','MessageController@index')->name('admin.message');

     // General Settings

     Route::get('general/edit','GeneralController@edit')->name('admin.general.edit');
 
     Route::post('general/edit','GeneralController@update')->name('admin.general.update');


});

