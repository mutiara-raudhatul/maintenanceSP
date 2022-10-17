<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermintaanBarangController;
use App\Http\Controllers\PermintaanBarangUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StatusPermintaanController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\JenisMaintenanceController;
use App\Http\Controllers\JenisCheckController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\DetailPermintaanController;

use App\Http\Controllers\DetailPermintaanUserController;
use App\Http\Controllers\HistoriController;
use App\Http\Controllers\PermintaanMaintenanceController;
use App\Http\Controllers\ResponMaintenanceController;
use App\Http\Controllers\DokumenMaintenanceController;
use App\Http\Controllers\MaintenanceTeknisiController;
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

// ----------------------------------------authenticate------------------------------------
Route::get('/login', 'App\Http\Controllers\LoginController@index')->name('login')-> middleware('guest');
Route::post('/login', 'App\Http\Controllers\LoginController@authenticate')->name('auth');
Route::post('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');

Route::get('/registrasi', 'App\Http\Controllers\RegistrasiController@index')->name('registrasi')-> middleware('guest');
Route::post('/registrasi', 'App\Http\Controllers\RegistrasiController@store')->name('registrasi')-> middleware('guest');

// Route::get('/login', 'App\Http\Controllers\LoginController@index')->name('login')->middleware('guest');
// Route::post('/login', 'App\Http\Controllers\LoginController@authenticate');
// Route::post('/logout', 'App\Http\Controllers\LoginController@logout');

Route::group(['middleware' => ['auth', 'checkRole:adminGudang']], function(){

    Route::get('/dashboard', function () {
        return view('');
    });
    
});

// --------------------------------------------DASHBOARD------------------------------------------

Route::get('/dashboard-admingudang', 'App\Http\Controllers\DashboardController@index')->name('dashboard-admingudang');
// -> middleware('auth');
Route::get('/dashboard-adminteknisi', 'App\Http\Controllers\DashboardController@dashAT')->name('dashboard-adminteknisi');
Route::get('/dashboard-teknisi', 'App\Http\Controllers\DashboardController@dashT')->name('dashboard-teknisi');
Route::get('/dashboard-karyawan', 'App\Http\Controllers\DashboardController@dashK')->name('dashboard-karyawan');

// Route::get('/dashboard-admingudang', function () {
//     return view('dashboard/dashboard-admingudang');
// });

// Route::get('/dashboard-adminteknisi', function () {
//     return view('dashboard/dashboard-adminteknisi');
// });


// Route::get('/dashboard-teknisi', function () {
//     return view('dashboard/dashboard-teknisi');
// });


// Route::get('/dashboard-karyawan', function () {
//     return view('dashboard/dashboard-karyawan');
// });

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

// Route::get('/history-adminteknisi', function () {
//     return view('history/history-adminteknisi');
// });
Route::get('/history-adminteknisi', 'App\Http\Controllers\HistoriController@indexAT')->name('history-adminteknisi');
Route::post('/history-adminteknisi', 'App\Http\Controllers\HistoriController@search')->name('search');

// Route::get('/history-teknisi', function () {
//     return view('history/history-teknisi');
// });

// Route::get('/history-karyawan', function () {
//     return view('history/history-karyawan');
// });

Route::get('/status-admingudang', function () {
    return view('history/status-admingudang');
});

// ------------------------------------------MAINTENANCE------------------------------------------

//----PERMINTAAN MAINTENANCE ADMIN
Route::get('/list-permintaan-maintenance',[PermintaanMaintenanceController::class, 'index']);


Route::get('/permintaan-maintenance',[PermintaanMaintenanceController::class, 'getTambah']);
Route::post('/simpan-permintaan-maintenance',[PermintaanMaintenanceController::class, 'setTambah'])->name('simpan');
Route::get('/update-permintaan-maintenance/{id_permintaan_maintenance}',[PermintaanMaintenanceController::class, 'getUpdate']);
Route::post('/update-permintaan-maintenance/{id_permintaan_maintenance}',[PermintaanMaintenanceController::class, 'setUpdate'])->name('updatePermintaan');
//----PERMINTAAN MAINTENANCE USER
Route::get('/list-permintaan-maintenance-user',[PermintaanMaintenanceController::class, 'userIndex'])->name('list-permintaan-maintenance');
Route::get('/cancel-permintaan-maintenance/{id_permintaan_maintenance}', [PermintaanMaintenanceController::class, 'cancel']);
//----RESPON MAINTENANCE
Route::get('/list-respon-maintenance',[ResponMaintenanceController::class, 'index']);
Route::get('/form-respon-maintenance/{id_permintaan_maintenance}',[ResponMaintenanceController::class, 'getTambah'])->name('respon');
Route::post('/form-respon-maintenance/{id_permintaan_maintenance}',[ResponMaintenanceController::class, 'setTambah'])->name('responS');
Route::get('/update-respon-maintenance/{id_respon_maintenance}',[ResponMaintenanceController::class, 'getUpdate'])->name('update');
Route::post('/update-respon-maintenance/{id_respon_maintenance}',[ResponMaintenanceController::class, 'setUpdate'])->name('update');
//----MAINTENANCE TEKNISI
Route::get('/list-maintenance-teknisi-respon',[MaintenanceTeknisiController::class, 'listRespon']);
Route::get('/list-maintenance-teknisi/{id_permintaan_maintenance}',[MaintenanceTeknisiController::class, 'index']);

Route::get('/list-maintenance-teknisi',[MaintenanceTeknisiController::class, 'getMaintenance']);
//Route::get('/list-maintenance-teknisi-t')
Route::get('/form-maintenance-teknisi/{id_permintaan_maintenance}',[MaintenanceTeknisiController::class, 'getTambah']);
Route::post('/simpan-maintenance-teknisi/{id_permintaan_maintenance}',[MaintenanceTeknisiController::class, 'setTambah'])->name('simpanM');
Route::get('/update-maintenance-teknisi/{id_maintenance_teknisi}',[MaintenanceTeknisiController::class, 'getUpdate']);
Route::post('/update-maintenance-teknisi/{id_maintenance_teknisi}',[MaintenanceTeknisiController::class, 'setUpdate'])->name('updatePermintaan');

//------------------------------------DOKUMEN MAINTENANCE
Route::get('/list-dokumen-maintenance',[DokumenMaintenanceController::class, 'index'])->name('dokumen');
Route::get('/update-dokumen-maintenance/{id_jenis_barang}',[DokumenMaintenanceController::class, 'getUpdate'])->name('dokumen');
Route::post('/update-dokumen-maintenance/{id_jenis_barang}',[DokumenMaintenanceController::class, 'setUpdate']);
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
Route::post('/update-status-permintaan/{id_status_permintaan}', [StatusPermintaanController::class, 'setUpdate'])->name('update-status-permintaan');

//------- PERMINTAAN ADMIN----------
//read permintaan
// Route::get('/permintaan-barang', [PermintaanBarangController::class, 'index']);
Route::get('/permintaan-barang', [PermintaanBarangController::class, 'index'])->name('permintaan-barang');

//------- PERMINTAAN USER----------
Route::get('/permintaan-barang-user', [PermintaanBarangUserController::class, 'index'])->name('permintaan-barang-user');
Route::get('/cancel-permintaan-barang/{id_permintaan_barang}', [PermintaanBarangUserController::class, 'cancel']);

//-------DETAIL PERMINTAAN----------
//read
Route::get('/detail-permintaan-barang/{id_permintaan_barang}', [DetailPermintaanController::class, 'index'])->name('detail-permintaan-barang');
Route::get('/detail-permintaan-barang-user/{id_permintaan_barang}', [DetailPermintaanUserController::class, 'index'])->name('detail-permintaan-barang-user');
// tolak permintaan barang
Route::get('/tolak-permintaan-barang/{id_permintaan_barang}',[DetailPermintaanController::class, 'reject'])->name('tolak-permintaan-barang');


// Route::get('/respon-permintaan-barang/{id_permintaan_barang}', function () {
//     return view('permintaan-barang/respon-permintaan');
// });

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
//-----------------------------------------BARANG DI GUDANG-------------------------------------
Route::get('/barang-masuk', function () {
    return view('gudang/barang-masuk');
});

Route::get('/data-barang', function () {
    return view('gudang/data-barang');
});

Route::get('/edit-barang', function () {
    return view('gudang/edit-barang');
});

//---------------------------------------------AUNTENTIKASI--------------------------------------------
//LOGIN
Route::get('/sign-in', function () {
    return view('auth/sign-in');
});

Route::get('/sign-up', function () {
    return view('auth/sign-up');
});

Route::get('/verify', function () {
    return view('auth/verify');
});

//PASSWORD
Route::get('/reset', function () {
    return view('auth/password/reset');
});

//---------------------------------------------HALAMAN UTAMA--------------------------------------------
Route::get('/halaman-utama', function () {
    return view('gudang/halaman-utama');
});

// Route::get('/register', function () {
//     return view('user/register');
// });

Route::get('/data-user', function () {
    return view('user/data-user');
});

Route::get('/edit-user', function () {
    return view('user/edit-user');
});

Route::get('/coba', function () {
    return view('user/coba');
});

// Route::get('/coba-data-barang', function () {
//     return view('gudang/coba-data-barang');
// });

// Route::get('/tabel', function () {
//     return view('gudang/tabel');
// });

// Route::get('/bismillah_barang', function () {
//     return view('gudang/bismillah_barang');
// });
