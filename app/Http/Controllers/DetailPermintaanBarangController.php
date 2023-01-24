<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Permintaan_barang;
use App\Models\Status_permintaan;
use App\Models\Detail_permintaan_barang;
use App\Models\User;
use App\Models\Users;
use App\Models\Jenis_barang;
use Illuminate\Support\Facades\Auth;


class DetailPermintaanBarangController extends Controller
{
    //list respon permintaan
    public function index()
    {
        $status2 = '2';
        $data = DB::table('permintaan_barang')
        ->join('users', 'permintaan_barang.nip_peminta', '=', 'users.id')
        ->join ('detail_permintaan_barang', 'permintaan_barang.id_permintaan_barang','=','detail_permintaan_barang.id_permintaan_barang')
        ->join('status_permintaan', 'detail_permintaan_barang.id_status_permintaan','=','status_permintaan.id_status_permintaan')
        -> where('detail_permintaan_barang.id_status_permintaan', '=', $status2)
        ->groupBy('permintaan_barang.id_permintaan_barang')
        ->orderBy('permintaan_barang.tanggal_permintaan', 'DESC')
        ->get();
        return view('permintaan-barang.list-respon-permintaan', ['data' => $data]);
    }
    //list respon permintaan user
    public function indexUser()
    {   
         $id_user = Auth::user()->id;
        // $nip_peminta = 3030;
        $status2 = '2';
        $data = DB::table('permintaan_barang')
        ->join('users', 'permintaan_barang.nip_peminta', '=', 'users.id')
        ->join ('detail_permintaan_barang', 'permintaan_barang.id_permintaan_barang','=','detail_permintaan_barang.id_permintaan_barang')
        ->join('status_permintaan', 'detail_permintaan_barang.id_status_permintaan','=','status_permintaan.id_status_permintaan')
        -> where('detail_permintaan_barang.id_status_permintaan', '=', $status2)
        ->where('permintaan_barang.nip_peminta', '=', $id_user)
        ->groupBy('permintaan_barang.id_permintaan_barang')
        ->orderBy('permintaan_barang.tanggal_permintaan', 'DESC')
        ->get();

        return view('permintaan-barang.list-respon-permintaan-user', ['data' => $data]);

    }
    //detail list respon permintaan
    public function indexDetail($id_permintaan_barang)
    {
        
        $data   = DB::table('permintaan_barang')
        ->join('users', 'permintaan_barang.nip_peminta', '=', 'users.id')
        ->where('permintaan_barang.id_permintaan_barang', '=', $id_permintaan_barang)
        ->get();

        $data_detail = DB::table('detail_permintaan_barang')
        ->join('permintaan_barang', 'permintaan_barang.id_permintaan_barang', '=', 'detail_permintaan_barang.id_permintaan_barang')
        ->join('jenis_barang', 'detail_permintaan_barang.kode_jenis','=','jenis_barang.kode_jenis')
        ->join('status_permintaan', 'detail_permintaan_barang.id_status_permintaan','=','status_permintaan.id_status_permintaan')
        ->where('detail_permintaan_barang.id_permintaan_barang', '=', $id_permintaan_barang)
        ->get();

        // return view('permintaan-barang.detail-permintaan-barang', ['data_user' => $data_user, 'data_detail' => $data_detail]);
        return view('permintaan-barang.detail-respon-permintaan', compact('data', 'data_detail'));
    }

    //detail list respon permintaan user
    public function indexDetailUser($id_permintaan_barang)
    {
        
        $data   = DB::table('permintaan_barang')
        ->join('users', 'permintaan_barang.nip_peminta', '=', 'users.id')
        ->where('permintaan_barang.id_permintaan_barang', '=', $id_permintaan_barang)
        ->get();

        $data_detail = DB::table('detail_permintaan_barang')
        ->join('permintaan_barang', 'permintaan_barang.id_permintaan_barang', '=', 'detail_permintaan_barang.id_permintaan_barang')
        ->join('jenis_barang', 'detail_permintaan_barang.kode_jenis','=','jenis_barang.kode_jenis')
        ->join('status_permintaan', 'detail_permintaan_barang.id_status_permintaan','=','status_permintaan.id_status_permintaan')
        ->where('detail_permintaan_barang.id_permintaan_barang', '=', $id_permintaan_barang)
        ->get();

        // return view('permintaan-barang.detail-permintaan-barang', ['data_user' => $data_user, 'data_detail' => $data_detail]);
        return view('permintaan-barang.detail-respon-permintaan-user', compact('data', 'data_detail'));
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



}
