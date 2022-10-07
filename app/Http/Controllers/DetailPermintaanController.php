<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Permintaan_barang;
use App\Models\Status_permintaan;
use App\Models\User;
use App\Models\Users;
use App\Models\Detail_kebutuhan;
use App\Models\Jenis_barang;

class DetailPermintaanController extends Controller
{
    public function index($id_permintaan_barang)
    {
        // $kabinet = Kepengurusan::select('id_kepengurusan', 'nama_kabinet')
        //             ->where('status_kepengurusan', 1)
        //             ->first();

        // $dinas_biro = Dinas_biro::select('dinas_biro.id_dinasbiro', 'dinas_biro.nama_dinasbiro')
        //             ->join('kepengurusan', 'kepengurusan.id_kepengurusan', '=', 
        //             'dinas_biro.id_kepengurusan')
        //             ->where('dinas_biro.id_kepengurusan', $kabinet->id_kepengurusan)
        //             ->get();

        // return view('pendaftaran', ['dinas_biro' => $dinas_biro, 'kabinet' => $kabinet, 'id_pendaftar' => $kodePendaftar]);

        $data_user   = DB::table('permintaan_barang')
        ->join('users', 'permintaan_barang.id_user', '=', 'users.id')
        ->where('permintaan_barang.id_permintaan_barang', '=', $id_permintaan_barang)
                        ->get();
        // $data_detail = Detail_kebutuhan::select('detail_kebutuhan.id_detail_kebutuhan','detail_kebutuhan.jumlah_permintaan')
        //     ->join('permintaan_barang', 'detail_kebutuhan.id_permintaan_barang', '=', 'permintaan_barang.id_permintaan_barang')
        //     ->join('users', 'permintaan_barang.id_user', '=', 'users.id')
        //     ->join('jenis_barang', 'detail_kebutuhan.id_jenis_barang','=','jenis_barang.id_jenis_barang')
        //     ->get();

        $data_detail = DB::table('detail_kebutuhan')
        ->join('permintaan_barang', 'permintaan_barang.id_permintaan_barang', '=', 'detail_kebutuhan.id_permintaan_barang')
        ->join('users', 'permintaan_barang.id_user', '=', 'users.id')
        ->join('jenis_barang', 'detail_kebutuhan.id_jenis_barang','=','jenis_barang.id_jenis_barang')
        ->where('permintaan_barang.id_permintaan_barang', '=', $id_permintaan_barang)
        ->get();
        // dd($data_detail);
        // return view('permintaan-barang.detail-permintaan-barang', ['data_user' => $data_user, 'data_detail' => $data_detail]);
        return view('permintaan-barang.detail-permintaan-barang', compact('data_detail', 'data_user'));
    }
}
// [
//     'detail_kebutuhan.id_detail_kebutuhan', 'users.name', 'users.unit_kerja', 'jenis_barang. jenis_barang', 'detail_kebutuhan.jumlah_permitaan' 
// ]