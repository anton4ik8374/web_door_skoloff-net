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

Auth::routes();

Route::get('/', 'SiteController@index')->name('home');
Route::get('/ourwork', 'SiteController@ourwork')->name('ourwork');
Route::get('/contacts', 'SiteController@contacts')->name('contacts');
Route::get('/price', 'SiteController@price')->name('price');
Route::middleware('auth','admin')->group(function(){
    Route::get('/admin', 'Admin\AdminController@index')->name('admin');
    Route::resource('/galery','GalleryController')->only(['destroy','store']);
    Route::get('exit',function(){
        Auth::logout();
        return redirect('/');
    })->name('exit');
});

