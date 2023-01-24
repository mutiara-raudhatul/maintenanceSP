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
use App\Models\Model_barang;
use App\Models\Barang;
use Illuminate\Support\Facades\Auth;


class ResponPermintaanController extends Controller
{
    public function index()
    {
        $status2 = '2';
        // $status3 = '3';
        $data = DB::table('respon_permintaan')
        ->join('permintaan_barang', 'permintaan_barang.id_permintaan_barang', '=', 'respon_permintaan.id_permintaan_barang')
        ->join('users', 'permintaan_barang.id_user', '=', 'users.id')
        ->join('status_permintaan', 'permintaan_barang.id_status_permintaan','=','status_permintaan.id_status_permintaan')
        // ->where(permintaan_barang.id_status_permintaan , '=',' $status2')
        -> where('permintaan_barang.id_status_permintaan', '=', $status2)
        // ->orderBy('permintaan_barang.tanggal_permintaan', 'DESC')
        ->get();
        // dd($data);

        return view('permintaan-barang.list-respon-permintaan', ['data' => $data]);
    }

    public function indexUser()
    {   
        // $id_user = Auth::user()->id;
        $nip_peminta = 3733;
        $status2 = '2';
        // $status3 = '3';
        $data = DB::table('respon_permintaan')
        ->join('permintaan_barang', 'permintaan_barang.id_permintaan_barang', '=', 'respon_permintaan.id_permintaan_barang')
        ->join('users', 'permintaan_barang.id_user', '=', 'users.id')
        ->join('status_permintaan', 'permintaan_barang.id_status_permintaan','=','status_permintaan.id_status_permintaan')
        ->where('permintaan_barang.id_status_permintaan', '=', $status2)
        ->where('permintaan_barang.id_user', '=', $nip_peminta)
        ->get();

        return view('permintaan-barang.list-respon-permintaan-user', ['data' => $data]);

    }
    
    //tampil form respon permintaan 
    public function getTambah($id_permintaan_barang, $kode_jenis)
    {
        $status_brg = 1 ;
        $respon = Users::all();
        $barang = Barang::join ('status_barang', 'barang.id_status_barang', '=', 'status_barang.id_status_barang')
        ->join('model_barang', 'model_barang.id_model_barang', '=', 'barang.id_model_barang')
        ->join('jenis_barang', 'jenis_barang.kode_jenis','=','model_barang.kode_jenis')
        ->select('barang.id_serial_number','model_barang.model_barang','jenis_barang.nama','jenis_barang.kode_jenis')
        ->where('jenis_barang.kode_jenis', 'like', '%'.$kode_jenis.'%')
        ->where('barang.id_status_barang', $status_brg )
        ->orderBy('jenis_barang.nama', 'asc')
        ->paginate(15);

        // $cek = Permintaan_barang::select('nip_teknisi')
        // ->where('id_permintaan_barang',$id_permintaan_barang)
        // ->first();

        // $detail = Detail_permintaan_barang::select('detail_permintaan_barang.id_permintaan_barang','detail_permintaan_barang.kode_jenis')
        // ->where('detail_permintaan_barang.id_permintaan_barang',$id_permintaan_barang)
        // ->orWhere('detail_permintaan_barang.kode_jenis',$kode_jenis);
       
        $detail=Detail_permintaan_barang::where([
            ['detail_permintaan_barang.id_permintaan_barang','=', $id_permintaan_barang],
            ['detail_permintaan_barang.kode_jenis','=', $kode_jenis]        
        ])
        ->first();
           
        return view('permintaan-barang.respon-permintaan', compact( 'respon','barang', 'detail') );
    }
    
    //simpan data permintaan
    public function setTambah(Request $request, $id_permintaan_barang, $kode_jenis)
    {  
        // $cek = Permintaan_barang::select('permintaan_barang.nip_teknisi')
        // ->where('id_permintaan_barang',$id_permintaan_barang)
        // ->get();
          
        // if(empty($request->nip_teknisi))
        // {
            $update = Permintaan_barang::where('id_permintaan_barang',$id_permintaan_barang)
            ->update([
                // 'waktu_pengadaan'      => $request->waktu_pengadaan,
                'nip_teknisi'          => $request->nip_teknisi,
                'catatan'              => $request->catatan, 
            ]);
            // dd($update);
          
        // }
               
        $id_status_permintaan = 2;
        $updateStatus = Detail_permintaan_barang::where([
            ['detail_permintaan_barang.id_permintaan_barang','=', $id_permintaan_barang],
            ['detail_permintaan_barang.kode_jenis','=', $kode_jenis]            
        ])
        ->update([
            'id_status_permintaan' => $id_status_permintaan
        ]);
  
        $id_status_barang = 2;
        $updateNip =Barang::where('id_serial_number','=', $request->id_serial_number)
        ->update([
            'nip' => $request->nip,
            'id_status_barang' => $id_status_barang,
        ]);
        // return redirect('/detail-permintaan-barang')->with('toast_success', 'Respon Berhasil Dilakukan');
        return redirect()->route(
            'detail-permintaan-barang',
            ['id_permintaan_barang' => $id_permintaan_barang]);
    }

}
