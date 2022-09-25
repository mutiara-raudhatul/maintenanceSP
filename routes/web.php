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
Route::get('/admingudang-history', function () {
    return view('adminGudang/history');
});


// ------------------------------------------Maintenance------------------------------------------
Route::get('/permintaan-maintenance', function () {
    return view('maintenance/form-permintaan-maintenance');
});
Route::get('/list-permintaan-maintenance', function () {
    return view('maintenance/list-permintaan-maintenance');
});
Route::get('/form-respon-maintenance', function () {
    return view('maintenance/form-respon-maintenance');
});
Route::get('/maintenance-teknisi', function () {
    return view('maintenance/form-maintenance-teknisi');
});
Route::get('/status', function () {
    return view('maintenance/lihat-status');
});
Route::get('/tambah-status', function () {
    return view('maintenance/tambah-status');
});
Route::get('/update-status', function () {
    return view('maintenance/update-status');
});
Route::get('/jenis-maintenance', function () {
    return view('maintenance/list-jenis-maintenance');
});
Route::get('/tambah-jenis-maintenance', function () {
    return view('maintenance/tambah-jenis-maintenance');
});
Route::get('/update-jenis-maintenance', function () {
    return view('maintenance/update-jenis-maintenance');
});
Route::get('/jenis-check', function () {
    return view('maintenance/list-jenis-check');
});
Route::get('/tambah-jenis-check', function () {
    return view('maintenance/tambah-jenis-check');
});
Route::get('/update-jenis-check', function () {
    return view('maintenance/update-jenis-check');
});
Route::get('/check', function () {
    return view('maintenance/list-check');
});
Route::get('/tambah-check', function () {
    return view('maintenance/tambah-check');
});
Route::get('/update-check', function () {
    return view('maintenance/update-check');
});