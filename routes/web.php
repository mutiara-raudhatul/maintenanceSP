<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermintaanBarangController;

use App\Http\Controllers\PermintaanBarangController;
use App\Http\Controllers\StatusPermintaanController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\JenisMaintenanceController;
use App\Http\Controllers\JenisCheckController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\DetailPermintaanController;
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

Route::get('/dashboard-admingudang', 'App\Http\Controllers\DashboardController@index')->name('dashboard-admingudang');
// Route::get('/dashboard-admingudang', function () {
//     return view('dashboard/dashboard-admingudang');
// });

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
// Route::get('/history-admingudang', function () {
//     return view('history/history-admingudang');
// });

// Route::get('/history-admingudang', function () {
//     return view('history/history-admingudang');
// });

Route::get('/history-admingudang', 'App\Http\Controllers\HistoriController@indexAG')->name('history-admingudang');
Route::post('/history-admingudang', 'App\Http\Controllers\HistoriController@search')->name('search');
Route::get('/history-karyawan', 'App\Http\Controllers\HistoriController@indexK')->name('history-karyawan');
Route::get('/history-teknisi', 'App\Http\Controllers\HistoriController@indexT')->name('history-teknisi');
Route::get('/history-adminteknisi', [PermintaanMaintenanceController::class, 'index'])->name('history-adminteknisi');

Route::get('/historyp-adminteknisi', function () {
    return view('history/history-adminteknisi');
});

Route::get('/history-teknisi', function () {
    return view('history/history-teknisi');
});

// Route::get('/history-karyawan', function () {
//     return view('history/history-karyawan');
// });

Route::get('/status-admingudang', function () {
    return view('history/status-admingudang');
});

// ------------------------------------------MAINTENANCE------------------------------------------
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
//------------------------------------STATUS
Route::get('/status',[StatusController::class, 'index'])->name('status');
Route::get('/tambah-status',[StatusController::class, 'getTambahStatus'])->name('tambah-status');
Route::post('/simpan-statusM',[StatusController::class, 'createStatus'])->name('simpan-statusM');
Route::get('/update-status/{id_status_maintenance}',[StatusController::class, 'getUpdate'])->name('updateStatus');
Route::post('/update-status/{id_status_maintenance}',[StatusController::class, 'setUpdate']);
Route::get('/delete-status-maintenance/{id_status_maintenance}', [StatusController::class, 'destroy']);

//-----------------------------------JENIS MAINTENANCE
Route::get('/jenis-maintenance',[JenisMaintenanceController::class, 'index'])->name('jenis-maintenance');
Route::get('/tambah-jenis-maintenance',[JenisMaintenanceController::class, 'getTambah']);
Route::post('/simpan-jenis-maintenance',[JenisMaintenanceController::class, 'setTambah'])->name('simpan-jenis');
Route::get('/delete-jenis-maintenance/{id_jenis_maintenance}', [JenisMaintenanceController::class, 'destroy']);
Route::get('/update-jenis-maintenance/{id_jenis_maintenance}',[JenisMaintenanceController::class, 'getUpdate'])->name('updateJenisM');
Route::post('/update-jenis-maintenance/{id_jenis_maintenance}',[JenisMaintenanceController::class, 'setUpdate']);

//----------------------------------JENIS CHECK

Route::get('/jenis-check',[JenisCheckController::class, 'index'])->name('jenis-check');
Route::get('/tambah-jenis-check',[JenisCheckController::class, 'getTambah'])->name('tJenisCheck');
Route::post('/simpan-jenis-check',[JenisCheckController::class, 'setTambah'])->name('simpan-jenisC');
Route::get('/delete-jenis-check/{id_jenis_check}', [JenisCheckController::class, 'destroy']);

Route::get('/update-jenis-check', function () {
    return view('maintenance/update-jenis-check');
});
//---------------------------------CHECK
Route::get('/check',[CheckController::class, 'index'])->name('check');
Route::get('/tambah-check',[CheckController::class, 'getTambah'])->name('tCheck');
Route::post('/simpan-check',[CheckController::class, 'setTambah'])->name('simpan-Check');
Route::get('/delete-check/{id_check}', [CheckController::class, 'destroy']);


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
//update status
// Route::get('/edit-status-permintaan/{id_status_permintaan}', [StatusPermintaanController::class, 'edit'])->name('edit-status-permintaan');
Route::get('/edit-status-permintaan/{id_status_permintaan}', [StatusPermintaanController::class, 'getUpdate'])->name('edit-status-permintaan');
Route::post('/update-status-permintaan/{id_status_permintaan}', [StatusPermintaanController::class, 'setUpdate'])->name('update-status-permintaan');;

//------- PERMINTAAN----------
//read permintaan
// Route::get('/permintaan-barang', [PermintaanBarangController::class, 'index']);
Route::get('/permintaan-barang', [PermintaanBarangController::class, 'index'])->name('permintaan-barang');
Route::get('/permintaan-barang-user', [PermintaanBarangController::class, 'index'])->name('permintaan-barang');

//-------DETAIL PERMINTAAN----------
//read
Route::get('/detail-permintaan-barang/{id_permintaan_barang}', [DetailPermintaanController::class, 'index'])->name('detail-permintaan-barang');


Route::get('/respon-permintaan-barang', function () {
    return view('permintaan-barang/respon-permintaan');
});

// Route::get('/list-permintaan-barang',[PermintaanBarangController::class, 'listpermintaanbarang']);
// Route::get('/list-permintaan-barang', function (listpermintaanbarang) {
//     return view('permintaan-barang/list-permintaan-barang');
// });

Route::get('/tolak-permintaan-barang', function () {
    return view('permintaan-barang/tolak-permintaan-barang');
});

Route::get('/detail-permintaan-barang', function () {
    return view('permintaan-barang/detail-permintaan-barang');
});

Route::get('/form-permintaan', function () {
    return view('permintaan-barang/form-permintaan');
});
