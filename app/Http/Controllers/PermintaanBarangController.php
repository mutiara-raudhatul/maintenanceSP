<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Permintaan_barang;


class PermintaanBarangController extends Controller
{

    public function listpermintaanbarang()
    {
    	// mengambil data dari table pegawai
        // $minta = Permintaan_barang::all();
    	$minta = DB::table('permintaan_barang')
        ->select('permintaan_barang.id_user', 'permintaan_barang.tanggal_permintaan', 'permintaan_barang.surat_izin', 'permintaan_barang.id_status_permintaan');
 
    	// mengirim data pegawai ke view index
        return view ('permintaan-barang.list-permintaan-barang', compact('minta'));


    	// return view('permintaan-barang.list-permintaan-barang',['permintaan_barang' => $minta]);
 
    }

    public function listpermintaanbarang()
    {
    	// mengambil data dari table pegawai
        // $minta = Permintaan_barang::all();
    	$minta = DB::table('permintaan_barang')
        ->select('permintaan_barang.id_user', 'permintaan_barang.tanggal_permintaan', 'permintaan_barang.surat_izin', 'permintaan_barang.id_status_permintaan');
 
    	// mengirim data pegawai ke view index
        return view ('permintaan-barang.list-permintaan-barang', compact('minta'));


    	// return view('permintaan-barang.list-permintaan-barang',['permintaan_barang' => $minta]);
 
    }
}
