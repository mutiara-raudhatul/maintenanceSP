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

// --------------------------------------------DASHBOARD------------------------------------------
Route::get('/dashboard-admingudang', function () {
    return view('dashboard/dashboard-admingudang');
});

Route::get('/dashboard-adminteknisi', function () {
    return view('dashboard/dashboard-adminteknisi');
});


Route::get('/dashboard-teknisi', function () {
    return view('dashboard/dashboard-teknisi');
});


Route::get('/dashboard-karyawan', function () {
    return view('dashboard/dashboard-karyawan');
});

// --------------------------------------------HISTORY------------------------------------------
Route::get('/history-admingudang', function () {
    return view('history/history-admingudang');
});

Route::get('/history-adminteknisi', function () {
    return view('history/history-adminteknisi');
});

Route::get('/history-teknisi', function () {
    return view('history/history-teknisi');
});

Route::get('/history-karyawan', function () {
    return view('history/history-karyawan');
});

Route::get('/status-admingudang', function () {
    return view('history/status-admingudang');
});

