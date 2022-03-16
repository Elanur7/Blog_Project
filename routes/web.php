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

//back
Route::get('admin/panel','back\Dashboard@index')->name('admin.dashboard');
Route::get('admin/giris','back\AuthController@login')->name('admin.login');
Route::post('admin/giris','back\AuthController@loginPost')->name('admin.login.post');
Route::get('admin/cikis','back\AuthController@logout')->name('admin.logout');

//front
Route::get('/','front\Homepage@index')->name('homepage');
Route::get('sayfa','front\Homepage@index');
Route::get('/iletisim','front\Homepage@contact')->name('contact');
Route::get('/kategori/{category}','front\Homepage@category')->name('category');
Route::get('/{category}/{slug}','front\Homepage@single')->name('single');
Route::get('/{sayfa}','front\Homepage@page')->name('page');

