<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Permintaan_barang;
use App\Models\Status_permintaan;
use App\Models\Detail_kebutuhan;
use App\Models\User;
use App\Models\Users;
use App\Models\Jenis_barang;
use Illuminate\Support\Facades\Auth;

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
    //batal permintaan user
    public function cancel($id_status_permintaan)
    {
        $permintaan_batal = Permintaan_barang::findorfail($id_status_permintaan);
        $permintaan_batal->delete();
        return back()->with('success', 'Data berhasil dihapus!');
    }

    //tampil form permintaan 
    public function getTambah()
    {
        return view('permintaan-barang.form-permintaan');
    }

    //simpan data permintaan
    public function setTambah(Request $request)
    {   

        $this->validate($request, [
            
            'dokumen' => 'mimes:doc,docx,pdf,xls,xlsx,pdf,ppt,pptx',
        ]);

        $id_status_permintaan = 1;
        $id_user = Auth::user()->id;
        $template_name = $request->surat_izin->getClientOriginalName() . '-' . time() . '-' . $request->surat_izin->extension();
        $request->surat_izin->move(public_path('template-doc'), $template_name);

        $tambah = Permintaan_barang::create([
            'tanggal_permintaan'   => $request->tanggal_permintaan,
            'surat_izin'           => $template_name,
            'id_user'              => $id_user,
            'id_status_permintaan' => $id_status_permintaan
        ]);

        if($tambah == true){
            return redirect('/form-barang')->with('toast_success', 'Tambah Berhasil Dilakukan');
        }
        else{
            return redirect('/permintaan-barang-user')->with('error', 'Tambah Gagal Dilakukan!');
        }
    }

    //tampil form barang 
    public function getTambahBarang()
    {
        $jenis_barang = Jenis_barang::all();
        
        // $id_terakhir = collect(db::select("select max (id_permintaan_barang) AS id_max FROM permintaan_barang"))->first();
        $id_terakhir = Permintaan_barang::select('id_permintaan_barang')
        ->ORDERBY('id_permintaan_barang', 'DESC')
        ->limit(1)
        // ->first()
        ->get();
        $data_barang = DB::table('detail_kebutuhan')
        ->join('permintaan_barang', 'detail_kebutuhan.id_permintaan_barang', '=', 'permintaan_barang.id_permintaan_barang')
        ->join('jenis_barang', 'detail_kebutuhan.id_jenis_barang','=','jenis_barang.id_jenis_barang')
        ->WHERE('detail_kebutuhan.id_permintaan_barang', '=', $id_terakhir)
        ->get([
            'permintaan_barang.id_permintaan_barang', 'jenis_barang.id_jenis_barang','jenis_barang.jenis_barang', 'detail_kebutuhan.jumlah_permintaan'
        ]);

         return view('permintaan-barang.form-barang' , compact('jenis_barang', 'id_terakhir','data_barang') );
    }

    //tambahkan kebutuhan barang
    public function setTambahBarang(Request $request)
    {
        $tambah = Detail_kebutuhan::create([
            'id_jenis_barang'      =>$request->id_jenis_barang,
            'jumlah_permintaan'    =>$request->jumlah_permintaan,
            'id_permintaan_barang' =>$request->id_terakhir
        ]);
    //    dd($tambah);
        // $jenis_barang = Jenis_barang::all();
        
        // $id_terakhir = collect(db::select("select max (id_permintaan_barang) AS id_max FROM permintaan_barang"))->first();
        // $id_terakhir = Permintaan_barang::select('id_permintaan_barang')
        // ->ORDERBY('id_permintaan_barang', 'DESC')
        // ->limit(1)
        // ->get();
        
        // $data_barang = DB::table('detail_kebutuhan')
        // ->join('permintaan_barang', 'detail_kebutuhan.id_permintaan_barang', '=', 'permintaan_barang.id_permintaan_barang')
        // ->join('jenis_barang', 'detail_kebutuhan.id_jenis_barang','=','jenis_barang.id_jenis_barang')
        // ->WHERE('detail_kebutuhan.id_permintaan_barang', '=', $id_terakhir)
        // ->get([
        //     'permintaan_barang.id_permintaan_barang', 'jenis_barang.id_jenis_barang','jenis_barang.jenis_barang', 'detail_kebutuhan.jumlah_permintaan'
        // ]);
        if($tambah == true){
            return redirect('/permintaan-barang-user')->with('toast_success', 'Tambah Berhasil Dilakukan');
        }
        else{
            return redirect('/permintaan-barang-user')->with('error', 'Tambah Gagal Dilakukan!');
        }
    }

    public function cancelPermintaan($id_permintaan_barang)
    {
        // dd($id_permintaan_barang);
        $permintaan_batal=Permintaan_barang::select('id_permintaan_barang')
        ->where('id_permintaan_barang','=', $id_permintaan_barang)
        
        ->delete();
// dd($permintaan_batal);
        // $permintaan_batal = Permintaan_barang::findorfail($id_terakhir);
        // $permintaan_batal->delete();
         return redirect('/form-permintaan')->with('success', 'Data berhasil dihapus!');
    }

    public function getDetailBarang($id_permintaan_barang)
    {
        $permintaan_cek=Permintaan_barang::select('id_permintaan_barang')
        ->where('id_permintaan_barang','=', $id_permintaan_barang);

        $data_barang = DB::table('detail_kebutuhan')
        ->join('respon_permintaan', 'detail_kebutuhan.id_permintaan_barang', '=', 'respon_permintaan.id_permintaan_barang')
        ->join('permintaan_barang', 'respon_permintaan.id_permintaan_barang', '=', 'permintaan_barang.id_permintaan_barang')
        ->join('jenis_barang', 'detail_kebutuhan.id_jenis_barang','=','jenis_barang.id_jenis_barang')
        ->WHERE('detail_kebutuhan.id_permintaan_barang', '=',  $id_permintaan_barang)
        ->get([
            'permintaan_barang.id_permintaan_barang', 'detail_kebutuhan.jumlah_permintaan', 'jenis_barang.id_jenis_barang','jenis_barang.jenis_barang'
        ]);

        // dd($data_barang);
          return view('permintaan-barang.form-detail-barang' , compact('permintaan_cek','data_barang') );
    }




    //lihat form barang yang telah ditambahkan
    // public function lihatTambahBarang()
    // {
    //     $data_barang = DB::table('detail_kebutuhan')
    //     ->join('permintaan_barang', 'detail_kebutuhan.id_permintaan_barang', '=', 'permintaan_barang.id_permintaan_barang')
    //     ->join('jenis_barang', 'detail_kebutuhan.id_jenis_barang','=','jenis_barang.id_jenis_barang')
    //     ->get([
    //         'permintaan_barang.id_permintaan_barang', 'jenis_barang.id_jenis_barang', 'detail_kebutuhan.jumlah_permintaan'
    //     ]);
    //      return view('permintaan-barang.form-barang', compact('data_barang') );
    // }

    //Belum fix cancel permintaan semuanya
    // public function cancelBarang($id_status_permintaan)
    // {
    //     // menghapus data pegawai berdasarkan id yang dipilih
    //     $cancel_permintaan = DB::table('permintaan_barang')->where('id_permintaan_barang',$id_status_permintaan)->delete();
		
	//     // alihkan halaman ke halaman pegawai
	//     return redirect('/permintaan-barang-user', compact('cancel_permintaan'));
    // }

    // public function detailRespon($id_permintaan_barang)
    // {
    //     $data   = DB::table('permintaan_barang')
    //     ->join('respon_permintaan', 'permintaan_barang.id_respon_permintaan', '=', 'respon_permintaan.id_respon_permintaan')
    //     ->join('users', 'permintaan_barang.id_user', '=', 'users.id')
    //     ->where('permintaan_barang.id_permintaan_barang', '=', $id_permintaan_barang)
    //     ->get();
        
    //     $data_detail = DB::table('detail_barang_dipenuhi')
    //     ->join('respon_permintaan', 'detail_barang_dipenuhi.id_respon_permintaan', '=', 'respon_permintaan.id_respon_permintaan')
    //     ->join('permintaan_barang', 'respon_permintaan.id_permintaan_barang', '=', 'permintaan_barang.id_permintaan_barang')
    //     ->join('barang', 'detail_barang_dipenuhi.id_barang', '=', 'barang.id_barang')
    //     ->join('model_barang', 'barang.id_model_barang', '=', 'model_barang.id_model_barang')
    //     ->join('jenis_barang', 'model_barang.id_jenis_barang','=','jenis_barang.id_jenis_barang')
    //     ->where('permintaan_barang.id_permintaan_barang', '=', $id_permintaan_barang)
    //     ->get();

    //     // SELECT users.name, permintaan_barang.tanggal_permintaan, respon_permintaan.waktu_pengadaan, permintaan_barang.id_status_permintaan, jenis_barang.jenis_barang, model_barang.model_barang, detail_barang_dipenuhi.jumlah_dipenuhi, barang.hostname
    //     // FROM detail_barang_dipenuhi
    //     // JOIN respon_permintaan ON detail_barang_dipenuhi.id_respon_permintaan = detail_barang_dipenuhi.id_respon_permintaan
    //     // JOIN permintaan_barang ON respon_permintaan.id_permintaan_barang = permintaan_barang.id_permintaan_barang
    //     // JOIN users ON permintaan_barang.id_user = users.id
    //     // JOIN status_permintaan ON permintaan_barang.id_status_permintaan = status_permintaan.id_status_permintaan
    //     // JOIN barang       ON detail_barang_dipenuhi.id_barang = barang.id_barang
    //     // JOIN model_barang ON barang.id_model_barang = model_barang.id_model_barang
    //     // JOIN jenis_barang ON model_barang.id_jenis_barang = jenis_barang.id_jenis_barang

    //     // WHERE id_detail_barang_dipenuhi = '1' ;

    //     // dd($data_detail);
    //     // return view('permintaan-barang.detail-permintaan-barang', ['data_user' => $data_user, 'data_detail' => $data_detail]);
    //     return view('permintaan-barang.detail-respon-permintaan', compact('data', 'data_detail'));
    // }

    




    // public function simpan(Request $request)
    // {
    //     $this->validate($request, [
            
    //         'dokumen' => 'mimes:doc,docx,pdf,xls,xlsx,pdf,ppt,pptx',
    //     ]
    // );

    //     $dokumen = $request->file('dokumen');
    //     $nama_dokumen = 'FT'.date('Ymdhis').'.'.$request->file('dokumen')->getClientOriginalExtension();
    //     $dokumen->move('dokumen/',$nama_dokumen);
    //     $data = new Mahasiswa();
    //     $data->dokumen = $nama_dokumen;
    //     $data->save();
    //     Session::flash('sukses','Data berhasil di simpan');
    //     return Redirect('/mahasiswa');
    // }



    // public function getTambah()
    // {
    //     $jenis_barang = Jenis_barang::all();
    //     // ddd($jenis_barang);

    //      return view('permintaan-barang.form-permintaan', ['jenis_barang' => $jenis_barang]);
    // }

}
