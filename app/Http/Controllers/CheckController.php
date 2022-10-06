<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis_maintenance;
use App\Models\Jenis_check;
use App\Models\Jenis_barang;
use App\Models\Check;

class CheckController extends Controller
{
    public function index()
    {
        $dtCheck = Check::join('jenis-check', 'jenis-check.id_jenis_check', '=', 'check.id_jenis_check')
        ->join('jenis_barang', 'jenis_barang.id_jenis_barang', '=', 'check.id_jenis_barang')
        ->select('check.id_check','check.check','check.kondisi','check.informasi','jenis_check.id_jenis_check','jenis-check.jenis-check', 'jenis_barang.id_jenis_barang', 'jenis_barang.jenis_barang')
        ->paginate(15);
        //dd($dtJenisC);
        return view('maintenance.list-check', ['dtCheck' => $dtCheck]);
    }

    public function getTambah()
    {
        $jenis_maintenance = Jenis_maintenance::all();

        return view('maintenance.tambah-jenis-check', ['jenis_maintenance' => $jenis_maintenance]);
    }

    public function setTambah(Request $request)
    {        
        Jenis_check::create([
            'id_jenis_check' => $request->id_jenis_check,
            'jenis_check' =>$request->jenis_check,
            'tipe_check' =>$request->tipe_check,
            'id_jenis_maintenance' =>$request->id_jenis_maintenance,
        ]);
        $jenis_maintenance = Jenis_maintenance::select('');

        return redirect('jenis-check')->with('toast_success', 'Data Berhasil Tersimpan');


    }

    public function destroy($id_jenis_check)
    {
        $hapus = Jenis_check::findorfail($id_jenis_check);
        $hapus->delete();
        return back()->with('success', 'Data berhasil dihapus!');
    }
}
