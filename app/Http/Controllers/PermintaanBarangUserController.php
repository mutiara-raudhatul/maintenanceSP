<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Permintaan_barang;
use App\Models\Status_permintaan;
use App\Models\User;
use App\Models\Users;

class PermintaanBarangUserController extends Controller
{
    public function index()
    {
        $data_permintaan = DB::table('permintaan_barang')
        ->join('users', 'permintaan_barang.id_user', '=', 'users.id')
        ->join('status_permintaan', 'permintaan_barang.id_status_permintaan','=','status_permintaan.id_status_permintaan')
        ->get([
            'permintaan_barang.id_permintaan_barang', 'permintaan_barang.tanggal_permintaan', 'status_permintaan.status_permintaan'
        ]);

        return view('permintaan-barang.list-permintaan-barang-user', compact('data_permintaan'));
    }

    public function cancel($id_status_permintaan)
    {
        $permintaan_batal = Permintaan_barang::findorfail($id_status_permintaan);
        $permintaan_batal->delete();
        return back()->with('success', 'Data berhasil dihapus!');
    }

}
