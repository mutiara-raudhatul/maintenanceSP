<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Permintaan_barang;
use App\Models\Status_permintaan;
use App\Models\User;
use App\Models\Users;


class PermintaanBarangController extends Controller
{

    public function index()
    {
        $data_permintaan = DB::table('permintaan_barang')
        ->join('users', 'permintaan_barang.id_user', '=', 'users.id')
        ->join('status_permintaan', 'permintaan_barang.id_status_permintaan','=','status_permintaan.id_status_permintaan')
        ->get([
            'permintaan_barang.id_permintaan_barang', 'users.name', 'permintaan_barang.tanggal_permintaan', 'permintaan_barang.surat_izin', 'status_permintaan.status_permintaan'
        ]);

        return view('permintaan-barang.list-permintaan-barang', compact('data_permintaan'));
    }

    // public function setTambah(Request $request)
    // {        
    //     $id_status_maintenance = 1;
    //     $id_user = Auth::user()->id;
    //     Permintaan_maintenance::create([
    //         'tanggal_permintaan' => $request->tanggal_permintaan,
    //         'id_jenis_barang' =>$request->id_jenis_barang,
    //         'id_user' =>$id_user,
    //         'id_status_maintenance' =>$id_status_maintenance,
    //     ]);

    //     return redirect('list-permintaan-maintenance-user')->with('toast_success', 'Data Berhasil Tersimpan');
    // }

    // public function index()
    // {
    //     $data_permintaan = Permintaan_barang::join('users', 'permintaan_barang.id_user', '=', 'users.id')
    //     ->join('status_permintaan', 'permintaan_barang.id_status_permintaan','=','status_permintaan.id_status_permintaan')
    //     ->select('permintaan_barang.id_permintaan_barang',' users.name', 'permintaan_barang.tanggal_permintaan', 'permintaan_barang.surat_izin', 'status_permintaan.status_permintaan');

    //     // dd($data_permintaan);
    //     return view('permintaan-barang.list-permintaan-barang', compact('data_permintaan'));
    // }
}
