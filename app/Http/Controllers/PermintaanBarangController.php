<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Permintaan_barang;
use App\Models\Detail_permintaan_barang;
use App\Models\Status_permintaan;
use App\Models\User;
use App\Models\Users;


class PermintaanBarangController extends Controller
{
    //list permintaan barang
    public function index()
    {
        $data_permintaan = DB::table('permintaan_barang')
        ->join('users', 'permintaan_barang.nip_peminta', '=', 'users.id')
        ->join('detail_permintaan_barang', 'permintaan_barang.id_permintaan_barang', '=', 'detail_permintaan_barang.id_permintaan_barang')
        ->join('status_permintaan', 'detail_permintaan_barang.id_status_permintaan','=','status_permintaan.id_status_permintaan')
        // ->select('users.name','users.role', 'permintaan_barang.tanggal_permintaan', 'permintaan_barang.surat_izin', 'status_permintaan.status_permintaan')
        ->orderBy('permintaan_barang.id_permintaan_barang', 'desc')
        ->groupBy('permintaan_barang.id_permintaan_barang')
        ->get();

        return view('permintaan-barang.list-permintaan-barang', compact('data_permintaan'));
    }
    //detail permintaan barang Admin
    public function indexDetail($id_permintaan_barang)
    {
        $data_user = DB::table('permintaan_barang')
        ->join('users', 'permintaan_barang.nip_peminta', '=', 'users.id')
        ->where('permintaan_barang.id_permintaan_barang', '=', $id_permintaan_barang)
        ->get();

        $data_detail = DB::table('detail_permintaan_barang')
        ->join('permintaan_barang', 'detail_permintaan_barang.id_permintaan_barang', '=', 'permintaan_barang.id_permintaan_barang')
        ->join('jenis_barang', 'detail_permintaan_barang.kode_jenis','=','jenis_barang.kode_jenis')
        ->join('status_permintaan', 'detail_permintaan_barang.id_status_permintaan','=','status_permintaan.id_status_permintaan')
        ->where('detail_permintaan_barang.id_permintaan_barang', '=', $id_permintaan_barang)
        ->get();

        return view('permintaan-barang.detail-permintaan-barang', compact('data_detail', 'data_user'));
    }

    //tolak permintaan oleh admin
    public function reject(Request $request, $id_permintaan_barang, $kode_jenis)
    {
        $status = 3;
        $update = DB::table('detail_permintaan_barang')
        ->where('id_permintaan_barang','=', $id_permintaan_barang )
        ->where('kode_jenis', '=', $kode_jenis )
        ->update([
            'id_status_permintaan'=> $status
        ]);
        return back()->with('success', 'Permintaan Berhasil Ditolak!');
    }
    public function pending(Request $request, $id_permintaan_barang, $kode_jenis)
    {
        $status = 4;
        $update = DB::table('detail_permintaan_barang')
        ->where('id_permintaan_barang','=', $id_permintaan_barang )
        ->where('kode_jenis', '=', $kode_jenis )
        ->update([
            'id_status_permintaan'=> $status
        ]);
        return back()->with('success', 'Permintaan Berhasil Dipending!');

    }

}
