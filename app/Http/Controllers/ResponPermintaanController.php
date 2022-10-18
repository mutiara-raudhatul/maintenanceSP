<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Permintaan_barang;
use App\Models\Status_permintaan;
use App\Models\Respon_permintaan;
use App\Models\User;
use App\Models\Users;
use App\Models\Jenis_barang;
use Illuminate\Support\Facades\Auth;


class ResponPermintaanController extends Controller
{
    public function index()
    {
        //  $data = Respon_permintaan::join('permintaan_barang', 'permintaan_barang.id_permintaan_barang', '=', 'respon_permintaan.id_permintaan_barang')
        //  ->join('users', 'users.id', '=', 'permintaan_barang.id_user')
        //  ->join('status_permintaan', 'status_permintaan.id_status_permintaan', '=', 'permintaan_barang.id_status_permintaan')
        //  ->select('users.name, permintaan_barang.tanggal_permintaan, respon_permintaan.waktu_pengadaan, status_permintaan.status_permintaan')
        //  ->paginate(15);
        // return view('permintaan-barang.list-respon-permintaan', ['data' => $data]);

        $status2 = '2';
        $status3 = '3';
        $data = DB::table('respon_permintaan')
        ->join('permintaan_barang', 'permintaan_barang.id_permintaan_barang', '=', 'respon_permintaan.id_permintaan_barang')
        ->join('users', 'permintaan_barang.id_user', '=', 'users.id')
        ->join('status_permintaan', 'permintaan_barang.id_status_permintaan','=','status_permintaan.id_status_permintaan')
        // ->where(permintaan_barang.id_status_permintaan , '=',' $status2')
        -> whereBetween('permintaan_barang.id_status_permintaan', [$status2, $status3])
        ->get();
        // dd($data);

        return view('permintaan-barang.list-respon-permintaan', ['data' => $data]);


        // SELECT users.name, permintaan_barang.tanggal_permintaan, respon_permintaan.waktu_pengadaan, permintaan_barang.id_status_permintaan
        //    FROM respon_permintaan
        //  JOIN permintaan_barang ON respon_permintaan.id_permintaan_barang = permintaan_barang.id_permintaan_barang
        //     JOIN users ON permintaan_barang.id_user = users.id
        //     JOIN status_permintaan ON permintaan_barang.id_status_permintaan = status_permintaan.id_status_permintaan

        //   WHERE id_respon_permintaan = '1' AND status_permintaan='Diterima' OR status_permintaan = 'Ditolak';

    }

    public function indexUser()
    {
        $status2 = '2';
        $status3 = '3';
        $data = DB::table('respon_permintaan')
        ->join('permintaan_barang', 'permintaan_barang.id_permintaan_barang', '=', 'respon_permintaan.id_permintaan_barang')
        ->join('users', 'permintaan_barang.id_user', '=', 'users.id')
        ->join('status_permintaan', 'permintaan_barang.id_status_permintaan','=','status_permintaan.id_status_permintaan')
        -> whereBetween('permintaan_barang.id_status_permintaan', [$status2, $status3])
        ->get();

        return view('permintaan-barang.list-respon-permintaan-user', ['data' => $data]);

    }
    
    //tampil form respon permintaan 
    public function getTambah($id_permintaan_barang)
    {
        // $role = 'teknisi';
        // $data = Respon_permintaan::join('permintaan_barang', 'permintaan_barang.id_permintaan_barang', '=', 'respon_permintaan.id_permintaan_barang')
        // ->join('users', 'permintaan_barang.id_user', '=', 'users.id')
        //  //  $data = Respon_permintaan::join('detail_barang_dipenuhi', 'respon_permintaan.id_detail_barang_dipenuhi', '=', 'respon_maintenance.id_detail_barang_dipenuhi')
        // //  ->join('barang', 'detail_barang_dipenuhi.id_barang', '=', 'barang.id_barang')
        // //  ->join('model_barang','barang.id_model_barang', '=','model_barang.id_model_barang')
        // //  ->join('jenis_barang','model_barang.id_jenis_barang', '=','jenis_barang.id_jenis_barang')
        // ->select('users.id','users.name','users.role')
        //  ->paginate(15);
        // ->where('users.role', '=',  $role)
        // ->get();
        $respon = Users::all();
        $id_simpan = $id_permintaan_barang;
    
        // $id_user = Auth::user()->id; 
        // $nip = Users::select('nip')
        // ->where('id', '=', $id);
        // $kode = Jenis_barang::select('kode_barang')
        // ->where('id_jenis_barang', '=', $id_jenis_barang);

        // $huruf = "SP";
        // $kodeBarang = $huruf . $nip . $kode;

          return view('permintaan-barang.respon-permintaan', compact( 'respon', 'id_simpan') );
    }
    
    //simpan data permintaan
    public function setTambah(Request $request)
    {  
        $tambah = Respon_permintaan::create([
            'waktu_pengadaan'      => $request->waktu_pengadaan,
            'id_user_teknisi'      => $request->id_user_teknisi,
            'id_permintaan_barang' => $request->id_simpan
        ]);

        $id_status_permintaan = 2;
        Permintaan_barang::where('id_permintaan_barang','=', $request->id_simpan)->update([
            'id_status_permintaan' => $id_status_permintaan
        ]);

        return redirect('/form-respon-barang')->with('toast_success', 'Data Berhasil Tersimpan');
    }

    //menampilkan data model
    public function pilihModelbarang()
    {
        // $jenis_barang;
        //  $data = Respon_permintaan::join('detail_barang_dipenuhi', 'respon_permintaan.id_detail_barang_dipenuhi', '=', 'respon_maintenance.id_detail_barang_dipenuhi')
        //  ->join('barang', 'detail_barang_dipenuhi.id_barang', '=', 'barang.id_barang')
        //  ->join('model_barang','barang.id_model_barang', '=','model_barang.id_model_barang')
        //  ->join('jenis_barang','model_barang.id_jenis_barang', '=','jenis_barang.id_jenis_barang')
        //  ->select('model_barang.id_model_barang','model_barang.model')
        //  ->paginate(15);
        // return view('permintaan-barang.respon-permintaan', ['data' => $data]);
    }

}
