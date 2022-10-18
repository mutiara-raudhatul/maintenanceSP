<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permintaan_maintenance;
use App\Models\Jenis_barang;
use App\Models\Status_maintenance;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Foundation\Auth\Users;
use App\Models\Users;

class PermintaanMaintenanceController extends Controller
{
    //gak bisa jalan karena join ama maintenance teknisi
    // public function adminIndex()
    // {
    //     $role = 'admin'; 
    //     $data = Permintaan_maintenance::join('users', 'users.id', '=', 'permintaan_maintenance.id_user')
    //      ->join('maintenance_teknisi','maintenance_teknisi.id_permintaan_maintenance','=','permintaan_maintenance.id_permintaan_maintenance')
    //      ->join('jenis_barang', 'jenis_barang.id_jenis_barang', '=', 'permintaan_maintenance.id_jenis_barang')
    //      ->join('status_maintenance', 'status_maintenance.id_status_maintenance', '=', 'permintaan_maintenance.id_status_maintenance')
    //      ->select('permintaan_maintenance.tanggal_permintaan','users.role', 'permintaan_maintenance.keterangan', 'jenis_barang.jenis_barang', 'users.name', 'status_maintenance.status_maintenance', 'permintaan_maintenance.id_permintaan_maintenance', 'maintenance_teknisi.id_maintenance_teknisi')
    //      ->where('users.role','=',$role)
    //      ->paginate(15);
    //      //dd($data);
    //     return view('maintenance.list-permintaan-maintenance', ['data' => $data]);

    // }
    
    public function index()
    {
        $data = Permintaan_maintenance::join('users', 'users.id', '=', 'permintaan_maintenance.id_user')
        ->join('jenis_barang', 'jenis_barang.id_jenis_barang', '=', 'permintaan_maintenance.id_jenis_barang')
        ->join('status_maintenance', 'status_maintenance.id_status_maintenance', '=', 'permintaan_maintenance.id_status_maintenance')
        ->select('permintaan_maintenance.tanggal_permintaan','permintaan_maintenance.keterangan','permintaan_maintenance.id_permintaan_maintenance', 'jenis_barang.jenis_barang', 'users.name', 'status_maintenance.status_maintenance', 'permintaan_maintenance.id_permintaan_maintenance')
        ->paginate(15);
         return view('maintenance.list-permintaan-maintenance', ['data' => $data]);
    }

    public function userIndex()
    {
         //$id_user = Auth::user()->id;
         $id_user=2;
         $dataU = Permintaan_maintenance::join('users', 'users.id', '=', 'permintaan_maintenance.id_user')
         ->join('jenis_barang', 'jenis_barang.id_jenis_barang', '=', 'permintaan_maintenance.id_jenis_barang')
         ->join('status_maintenance', 'status_maintenance.id_status_maintenance', '=', 'permintaan_maintenance.id_status_maintenance')
         ->select('permintaan_maintenance.tanggal_permintaan','permintaan_maintenance.keterangan', 'jenis_barang.jenis_barang', 'users.name', 'status_maintenance.status_maintenance', 'permintaan_maintenance.id_permintaan_maintenance')
         ->where('users.id', '=', $id_user )
         ->paginate(15);
        return view('maintenance.list-permintaan-maintenance-user', ['dataU' => $dataU]);
    }

    public function cancel($id_permintaan_maintenance)
    {
        $permintaan_batal = Permintaan_maintenance::findorfail($id_permintaan_maintenance);
        $permintaan_batal->delete();
        return back()->with('success', 'Data berhasil dihapus!');
    }

    public function getTambah()
    {
        $jenis_barang = Jenis_barang::all();

        return view('maintenance.form-permintaan-maintenance', ['jenis_barang' => $jenis_barang]);
    }

     public function setTambah(Request $request)
    {   
        $request->validate([
            'tanggal_permintaan' => 'required',
            'keterangan' => 'required',
            'id_jenis_barang' => 'required',
            'id_status_maintenance' => 'required',
        ]);      
        $id_status_maintenance = 1;
        $id_user = Auth::user()->id;
        //$id_user=2;
        $date = strtotime($request->tanggal_permintaan);
        $time = date('Y-m-d', $date);
        Permintaan_maintenance::create([
            'tanggal_permintaan' => $time,
            'keterangan' => $request->keterangan,
            'id_jenis_barang' =>$request->id_jenis_barang,
            'id_user' =>$id_user,
            'id_status_maintenance' =>$id_status_maintenance,
        ]);

        return redirect('list-permintaan-maintenance-user')->with('toast_success', 'Data Berhasil Tersimpan');
    }

    public function getUpdate($id_permintaan_maintenance)
    {
        $editSt = Permintaan_maintenance:: join('jenis_barang', 'jenis_barang.id_jenis_barang','=','permintaan_maintenance.id_jenis_barang')
        ->join('users','users.id','=','permintaan_maintenance.id_user')
        ->join('status_maintenance','status_maintenance.id_status_maintenance','=','permintaan_maintenance.id_status_maintenance')
        ->select('permintaan_maintenance.id_permintaan_maintenance', 'permintaan_maintenance.tanggal_permintaan','permintaan_maintenance.keterangan',
                'status_maintenance.status_maintenance','users.name','jenis_barang.jenis_barang','permintaan_maintenance.id_jenis_barang')
        ->where('id_permintaan_maintenance', '=', $id_permintaan_maintenance)
        ->first();
        $jenis_barang = Jenis_barang::all();
        //dd($editSt);
        return view('maintenance.update-permintaan-maintenance', ['jenis_barang' => $jenis_barang, 'editSt' => $editSt]);
        
    }

    public function setUpdate(Request $request,$id_permintaan_maintenance)
    {
        $id_user=2;
        $update = Permintaan_maintenance::where('id_permintaan_maintenance', $id_permintaan_maintenance)->update([
            'tanggal_permintaan' => $request->tanggal_permintaan,
            'keterangan'=> $request->keterangan,
            'id_jenis_barang' => $request->id_jenis_barang,
        ]);
        if($update == true){
            return redirect('/list-permintaan-maintenance-user')->with('toast_success', 'Update Berhasil Dilakukan');
        }
        else{
            return redirect('/list-permintaan-maintenance-user')->with('error', 'Update Gagal Dilakukan!');
        }
    }

}
