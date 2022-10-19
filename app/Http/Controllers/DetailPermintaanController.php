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
        ->join('status_permintaan', 'permintaan_barang.id_status_permintaan','=','status_permintaan.id_status_permintaan')
        ->join('jenis_barang', 'detail_kebutuhan.id_jenis_barang','=','jenis_barang.id_jenis_barang')
        ->where('permintaan_barang.id_permintaan_barang', '=', $id_permintaan_barang)
        ->get();

        // dd($data_detail);
        // return view('permintaan-barang.detail-permintaan-barang', ['data_user' => $data_user, 'data_detail' => $data_detail]);
        return view('permintaan-barang.detail-permintaan-barang', compact('data_detail', 'data_user'));
    }

    // public function reject($id_permintaan_barang)
    // {
    //     $tolak = Detail_kebutuhan::findorfail($id_permintaan_barang);
    //     $tolak->status_permintaan = 'Ditolak';
    //     $tolak->save();
    //     return redirect('permintaan-barang.permintaan-barang')->with('success', 'Rapat berhasil diedit!');
    // }

    // public function reject(Request $request, $id_permintaan_barang)
    // {
    //     // dd($request->all());
    //     // $id_permintaan_barang = $request->id_permintaan_barang;
    //     // $status = $request->status_permintaan;
    //     // $update = DB::table('permintaan_barang')
    //     // ->where('id_permintaan_barang','=', $id_permintaan_barang)
    //     // ->update([
    //     //     'id_status_permintaan'=> $nilai
    //     // ]);

    //     //$status = "Ditolak";
        
    //     // $id_status_permintaan = DB::table('status_permintaan')
    //     // ->where('status_permintaan','=', $status)
    //     // ->get ('id_status_permintaan');
    //    //dd($id_status_permintaan);
    //    // dpt id 3
    //     $status = 3;
    //     $update = DB::table('permintaan_barang')
    //     ->where('id_permintaan_barang','=', $id_permintaan_barang)
    //     ->update([
    //         'id_status_permintaan'=> $status
    //     ]);
    //     return back()->with('success', 'Permintaan Berhasil Ditolak!');

    // }

    public function reject(Request $request, $id_permintaan_barang)
    {
        $status = 3;
        $update = DB::table('permintaan_barang')
        ->where('id_permintaan_barang','=', $id_permintaan_barang)
        ->update([
            'id_status_permintaan'=> $status
        ]);
        // return view('permintaan-barang.list_permintaan_barang', compact('update'));
        return back()->with('success', 'Permintaan Berhasil Ditolak!');

    }

    
}