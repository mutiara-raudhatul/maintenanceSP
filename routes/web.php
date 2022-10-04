<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PermintaanBarangController;
use App\Http\Controllers\StatusPermintaanController;
use App\Http\Controllers\StatusController;
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
//lihat-status
Route::get('/status',[StatusController::class, 'index'])->name('status');
//tambah-status
Route::get('/tambah-status',[StatusController::class, 'getTambahStatus'])->name('tambah-status');
Route::post('/simpan-statusM',[StatusController::class, 'createStatus'])->name('simpan-statusM');
//update-status
Route::get('/update-status/{id_status_maintenance}',[StatusController::class, 'getUpdate'])->name('updateStatus');
//simpan update-kepengurusan
Route::post('/update-kepengurusan/{id_kepengurusan}',[KepengurusanController::class, 'setUpdate'])->name('simpan-update-kepengurusan');

// Route::get('/update-status', function () {
//     return view('maintenance/update-status');
// });
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

// ------------------------------------------Permintaan Barang------------------------------------------

//-------STATUS PERMINTAAN----------
//read status
Route::get('/status-permintaan', [StatusPermintaanController::class, 'index']);
//create status
Route::get('/tambah-status-permintaan',[StatusPermintaanController::class, 'getTambahStatus'])->name('tambah-status-permintaan');
Route::post('/simpan-statusP',[StatusPermintaanController::class, 'createStatus'])->name('simpan-statusP');
//delete status
Route::get('/delete-permintaan/{id_status_permintaan}', [StatusPermintaanController::class, 'destroy']);
Route::get('/tambah-status-permintaan', function () {
    return view('permintaan-barang/tambah-status-permintaan');
});

Route::get('/update-status-permintaan', function () {
    return view('permintaan-barang/update-status-permintaan');
});

Route::get('/permintaan-barang', function () {
    return view('permintaan-barang/form-permintaan');
});

Route::get('/respon-permintaan-barang', function () {
    return view('permintaan-barang/respon-permintaan');
});

Route::get('/list-permintaan-barang',[PermintaanBarangController::class, 'listpermintaanbarang']);
// Route::get('/list-permintaan-barang', function (listpermintaanbarang) {
//     return view('permintaan-barang/list-permintaan-barang');
// });

Route::get('/tolak-permintaan-barang', function () {
    return view('permintaan-barang/tolak-permintaan-barang');
});

Route::get('/detail-permintaan-barang', function () {
    return view('permintaan-barang/detail-permintaan-barang');
});
