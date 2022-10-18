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
use App\Models\Model_barang;
use App\Models\Barang;
use App\Models\Respon_permintaan;
use App\Models\Detail_barang_dipenuhi;

class DetailResponPermintaanController extends Controller
{
    public function index($id_respon_permintaan)
    {
        
        $data   = DB::table('respon_permintaan')
        ->join('permintaan_barang', 'respon_permintaan.id_permintaan_barang', '=', 'permintaan_barang.id_permintaan_barang')
        ->join('users', 'permintaan_barang.id_user', '=', 'users.id')
        ->where('respon_permintaan.id_respon_permintaan', '=', $id_respon_permintaan)
                        ->get();

        $data_detail = DB::table('detail_barang_dipenuhi')
        ->join('respon_permintaan', 'detail_barang_dipenuhi.id_respon_permintaan', '=', 'respon_permintaan.id_respon_permintaan')
        ->join('permintaan_barang', 'respon_permintaan.id_permintaan_barang', '=', 'permintaan_barang.id_permintaan_barang')
        ->join('barang', 'detail_barang_dipenuhi.id_barang', '=', 'barang.id_barang')
        ->join('model_barang', 'barang.id_model_barang', '=', 'model_barang.id_model_barang')
        ->join('jenis_barang', 'model_barang.id_jenis_barang','=','jenis_barang.id_jenis_barang')
        ->where('respon_permintaan.id_respon_permintaan', '=', $id_respon_permintaan)
        ->get();

        // SELECT users.name, permintaan_barang.tanggal_permintaan, respon_permintaan.waktu_pengadaan, permintaan_barang.id_status_permintaan, jenis_barang.jenis_barang, model_barang.model_barang, detail_barang_dipenuhi.jumlah_dipenuhi, barang.hostname
        // FROM detail_barang_dipenuhi
        // JOIN respon_permintaan ON detail_barang_dipenuhi.id_respon_permintaan = detail_barang_dipenuhi.id_respon_permintaan
        // JOIN permintaan_barang ON respon_permintaan.id_permintaan_barang = permintaan_barang.id_permintaan_barang
        // JOIN users ON permintaan_barang.id_user = users.id
        // JOIN status_permintaan ON permintaan_barang.id_status_permintaan = status_permintaan.id_status_permintaan
        // JOIN barang       ON detail_barang_dipenuhi.id_barang = barang.id_barang
        // JOIN model_barang ON barang.id_model_barang = model_barang.id_model_barang
        // JOIN jenis_barang ON model_barang.id_jenis_barang = jenis_barang.id_jenis_barang

        // WHERE id_detail_barang_dipenuhi = '1' ;

        // dd($data_detail);
        // return view('permintaan-barang.detail-permintaan-barang', ['data_user' => $data_user, 'data_detail' => $data_detail]);
        return view('permintaan-barang.detail-respon-permintaan', compact('data', 'data_detail'));
    }

    public function indexUser($id_respon_permintaan)
    {
        
        $data   = DB::table('respon_permintaan')
        ->join('permintaan_barang', 'respon_permintaan.id_permintaan_barang', '=', 'permintaan_barang.id_permintaan_barang')
        ->join('users', 'permintaan_barang.id_user', '=', 'users.id')
        ->where('respon_permintaan.id_respon_permintaan', '=', $id_respon_permintaan)
                        ->get();

        $data_detail = DB::table('detail_barang_dipenuhi')
        ->join('respon_permintaan', 'detail_barang_dipenuhi.id_respon_permintaan', '=', 'respon_permintaan.id_respon_permintaan')
        ->join('permintaan_barang', 'respon_permintaan.id_permintaan_barang', '=', 'permintaan_barang.id_permintaan_barang')
        ->join('barang', 'detail_barang_dipenuhi.id_barang', '=', 'barang.id_barang')
        ->join('model_barang', 'barang.id_model_barang', '=', 'model_barang.id_model_barang')
        ->join('jenis_barang', 'model_barang.id_jenis_barang','=','jenis_barang.id_jenis_barang')
        ->where('respon_permintaan.id_respon_permintaan', '=', $id_respon_permintaan)
        ->get();

        return view('permintaan-barang.detail-respon-permintaan-user', compact('data', 'data_detail'));
    }

    public function getTambah()
    { 

        //
        //dd($respon);
        $id_terakhir = Respon_permintaan::select('id_respon_permintaan')
        ->ORDERBY('id_respon_permintaan', 'DESC')
        ->limit(1)
         //->first();
         ->get();
         
         $respon = Barang::join ('status_barang', 'barang.id_status_barang', '=', 'status_barang.id_status_barang')
         ->get();

         $id = Respon_permintaan::max('id_respon_permintaan');
         //select(max['id_respon_permintaan'])
         //->ORDERBY('id_respon_permintaan', 'DESC')
         //->first();
          //->get();

         $data_barang = DB::table('detail_barang_dipenuhi')
        ->join('respon_permintaan', 'detail_barang_dipenuhi.id_respon_permintaan', '=', 'respon_permintaan.id_respon_permintaan')
        ->join('permintaan_barang', 'respon_permintaan.id_permintaan_barang', '=', 'permintaan_barang.id_permintaan_barang')
        ->join('barang', 'detail_barang_dipenuhi.id_barang', '=', 'barang.id_barang')
        ->join('model_barang', 'barang.id_model_barang', '=', 'model_barang.id_model_barang')
        ->join('jenis_barang', 'model_barang.id_jenis_barang','=','jenis_barang.id_jenis_barang')
        ->where('detail_barang_dipenuhi.id_respon_permintaan', '=', $id)
        ->get();
        
       return view('permintaan-barang.form-respon-barang', compact('id_terakhir', 'respon', 'data_barang'));
    }

    public function setTambah(Request $request)
    {  
            $tambah = Detail_barang_dipenuhi::create([
                'id_barang'             =>$request->id_barang,
                'id_respon_permintaan'  =>$request->id_terakhir,
                'jumlah_dipenuhi'       =>$request->jumlah_dipenuhi
            ]);

            $id_status_barang = 2;
            $status_barang = Barang::where('id_barang','=', $request->id_barang)->update([
                'id_status_barang' => $id_status_barang
            ]); 

            $user = DB::table('detail_barang_dipenuhi')
            ->join('respon_permintaan', 'detail_barang_dipenuhi.id_respon_permintaan', '=', 'respon_permintaan.id_respon_permintaan')
            ->join('permintaan_barang', 'respon_permintaan.id_permintaan_barang', '=', 'permintaan_barang.id_permintaan_barang')
            ->join('users', 'permintaan_barang.id_user', '=', 'users.id')
            ->select('users.nip')
            ->first();
            //  dd($user);

            $kodebrg = DB::table('barang')
            ->join('model_barang', 'barang.id_model_barang', '=', 'model_barang.id_model_barang')
            ->join('jenis_barang', 'model_barang.id_jenis_barang','=','jenis_barang.id_jenis_barang')
            ->select('jenis_barang.kode_barang')
            ->where('barang.id_barang', '=', $request->id_barang)
            ->first();
            // dd($kodebrg);

            $huruf='SP';
            $hostname = $huruf."".$user->nip."".$kodebrg->kode_barang;
            $hsname = Barang::where('id_barang','=', $request->id_barang)->update([
                'hostname' => $hostname
            ]); 


            if($tambah == true){
                return redirect('/form-respon-barang')->with('toast_success', 'Tambah Berhasil Dilakukan');
            }
            else{
                return redirect('/permintaan-barang-user')->with('error', 'Tambah Gagal Dilakukan!');
            }
        }

        public function hapusBarang($id_detail_barang_dipenuhi)
        { 
            $hapus_barang = Detail_barang_dipenuhi::findorfail($id_detail_barang_dipenuhi);
            $brg = Detail_barang_dipenuhi::select('id_barang')
            ->where('id_detail_barang_dipenuhi', '=', $id_detail_barang_dipenuhi)
            ->first();

            $id_status_barang = 1;
            $status_barang = Barang::where('id_barang','=', $brg ->id_barang)->update([
                'id_status_barang' => $id_status_barang
            ]); 

            $hapus_barang->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus!');

        }

        public function cancelRespon($id_respon_permintaan)
    {
        // dd($id_permintaan_barang);
        $brg = Detail_barang_dipenuhi::join('respon_permintaan', 'detail_barang_dipenuhi.id_respon_permintaan', '=', 'respon_permintaan.id_respon_permintaan')
            ->join('barang', 'detail_barang_dipenuhi.id_barang', '=', 'barang.id_barang')
            ->select('detail_barang_dipenuhi.id_barang')
            ->where('detail_barang_dipenuhi.id_respon_permintaan', '=', $id_respon_permintaan)
            ->first();

        $permintaan_batal=Respon_permintaan::select('id_respon_permintaan')
        ->where('id_respon_permintaan','=', $id_respon_permintaan)
        
        ->delete();

        $id_status_barang = 1;
        $status_barang = Barang::where('id_barang','=', $brg ->id_barang)->update([
            'id_status_barang' => $id_status_barang
        ]); 

        return redirect('/list-respon-permintaan');
    }


}

