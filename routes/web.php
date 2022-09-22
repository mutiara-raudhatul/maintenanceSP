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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::group(['middleware' => ['auth', 'checkRole:adminGudang']], function(){

    Route::get('/dashboard', function () {
        return view('');
    });
    
});


Route::get('/admingudang', function () {
    return view('adminGudang/dashboard');
});


Route::get('/adminteknisi', function () {
    return view('adminTeknisi/dashboard');
});

Route::get('/teknisi', function () {
    return view('teknisi/dashboard');
});

Route::get('/karyawan', function () {
    return view('karyawan/dashboard');
});