<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Respon_maintenance;
use App\Models\Jenis_maintenance;

class ResponMaintenanceController extends Controller
{
    public function getTambah()
    {
        $respon = Users::all();
        return view('maintenance.form-respon-maintenance');
    }

    public function setTambah(Request $request)
    {        
        Respon_miantenance::create([
            'id_jenis_maintenance' => $request->id_jenis_maintenance,
            'jenis_maintenance' =>$request->jenis_maintenance,
        ]);

        return redirect('jenis-maintenance')->with('toast_success', 'Data Berhasil Tersimpan');
    }
}
