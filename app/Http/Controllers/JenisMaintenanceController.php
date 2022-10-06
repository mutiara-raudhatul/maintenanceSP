<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis_maintenance;


class JenisMaintenanceController extends Controller
{
    public function index()
    {
         $dtJenisM = Jenis_maintenance::all();
        return view('maintenance.list-jenis-maintenance', compact('dtJenisM'));
    }

    public function getTambah()
    {
        return view('maintenance.tambah-jenis-maintenance');
    }

    public function setTambah(Request $request)
    {        
        Jenis_maintenance::create([
            'id_jenis_maintenance' => $request->id_jenis_maintenance,
            'jenis_maintenance' =>$request->jenis_maintenance,
        ]);

        return redirect('jenis-maintenance')->with('toast_success', 'Data Berhasil Tersimpan');
    }

    public function destroy($id_jenis_maintenance)
    {
        $hapus = Jenis_maintenance::findorfail($id_jenis_maintenance);
        $hapus->delete();
        return back()->with('success', 'Data berhasil dihapus!');
    }
}
