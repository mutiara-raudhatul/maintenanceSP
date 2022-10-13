<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Foundation\Auth\Users;
use App\Models\Users;
use App\Models\Respon_maintenance;
use App\Models\Jenis_maintenance;
use App\Models\Permintaan_maintenance;

class ResponMaintenanceController extends Controller
{
    public function index()
    {
         $data = Respon_maintenance::join('permintaan_maintenance', 'permintaan_maintenance.id_permintaan_maintenance', '=', 'respon_maintenance.id_permintaan_maintenance')
         ->join('users', 'users.id', '=', 'respon_maintenance.id_user')
         ->join('jenis_barang','jenis_barang.id_jenis_barang', '=','permintaan_maintenance.id_jenis_barang')
         ->join('status_maintenance', 'status_maintenance.id_status_maintenance', '=', 'permintaan_maintenance.id_status_maintenance')
         ->select('permintaan_maintenance.tanggal_permintaan','permintaan_maintenance.id_status_maintenance','users.name','respon_maintenance.jadwal_perbaikan','jenis_barang.jenis_barang', 'status_maintenance.status_maintenance')
         ->paginate(15);
        return view('maintenance.list-respon-maintenance', ['data' => $data]);
    }

    public function getTambah($id_permintaan_maintenance)
    {
        $id_permintaan_maintenance = Permintaan_maintenance::select('id_permintaan_maintenance')
        ->where('id_permintaan_maintenance', '=', $id_permintaan_maintenance)
        ->first();
        $respon = Users::all();
        //$role = Auth::user()->;
        return view('maintenance.form-respon-maintenance', ['respon' => $respon, 'id_permintaan_maintenance'=>$id_permintaan_maintenance]);
       // return view('maintenance.form-respon-maintenance');
    }

    public function setTambah(Request $request, $id_permintaan_maintenance)
    {        
        
        Respon_maintenance::create([
            'jadwal_perbaikan' =>$request->jadwal_perbaikan,
            'id_user' => $request->id_user,
            'id_permintaan_maintenance' =>$request->id_permintaan_maintenance,
        ]);

        $id_status_maintenance = 2;
        Permintaan_maintenance::where('id_permintaan_maintenance', $id_permintaan_maintenance)->update([
            'id_status_maintenance' => $id_status_maintenance,
        ]);
        return redirect('list-respon-maintenance')->with('toast_success', 'Data Berhasil Tersimpan');
    }
}
