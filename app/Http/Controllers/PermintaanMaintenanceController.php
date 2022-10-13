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
    public function index()
    {
         $data = Permintaan_maintenance::join('users', 'users.id', '=', 'permintaan_maintenance.id_user')
         ->join('jenis_barang', 'jenis_barang.id_jenis_barang', '=', 'permintaan_maintenance.id_jenis_barang')
         ->join('status_maintenance', 'status_maintenance.id_status_maintenance', '=', 'permintaan_maintenance.id_status_maintenance')
         ->select('permintaan_maintenance.tanggal_permintaan', 'jenis_barang.jenis_barang', 'users.name', 'status_maintenance.status_maintenance', 'permintaan_maintenance.id_permintaan_maintenance')
         ->paginate(15);
        return view('maintenance.list-permintaan-maintenance', ['data' => $data]);
    }

    public function userIndex()
    {
         $id_user = Auth::user()->id;
         $dataU = Permintaan_maintenance::join('users', 'users.id', '=', 'permintaan_maintenance.id_user')
         ->join('jenis_barang', 'jenis_barang.id_jenis_barang', '=', 'permintaan_maintenance.id_jenis_barang')
         ->join('status_maintenance', 'status_maintenance.id_status_maintenance', '=', 'permintaan_maintenance.id_status_maintenance')
         ->select('permintaan_maintenance.tanggal_permintaan', 'jenis_barang.jenis_barang', 'users.name', 'status_maintenance.status_maintenance', 'permintaan_maintenance.id_permintaan_maintenance')
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
        $id_status_maintenance = 1;
        $id_user = Auth::user()->id;
        Permintaan_maintenance::create([
            'tanggal_permintaan' => $request->tanggal_permintaan,
            'id_jenis_barang' =>$request->id_jenis_barang,
            'id_user' =>$id_user,
            'id_status_maintenance' =>$id_status_maintenance,
        ]);

        return redirect('list-permintaan-maintenance-user')->with('toast_success', 'Data Berhasil Tersimpan');
    }

    public function getUpdate($id_permintaan_maintenance)
    {
        $editSt = Permintaan_maintenance:: select('id_permintaan_maintenance', 'permintaan_maintenance')
        ->where('id_permintaan_maintenance', '=', $id_permintaan_maintenance)
        ->first();
        //dd($editSt);
        return view('maintenance.update-status', compact('editSt'));
        
    }

    public function setUpdate(Request $request,$id_permintaan_maintenance)
    {
        $update = Status_maintenance::where('id_status_maintenance', $id_status_maintenance)->update([
            'status_maintenance' => $request->status_maintenance,
        ]);
        if($update == true){
            return redirect('/status')->with('toast_success', 'Update Berhasil Dilakukan');
        }
        else{
            return redirect('/status')->with('error', 'Update Gagal Dilakukan!');
        }
    }

}
