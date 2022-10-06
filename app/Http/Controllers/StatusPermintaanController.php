<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Status_permintaan;
use RealRashid\SweetAlert\Facades\Alert;

class StatusPermintaanController extends Controller
{
    public function index()
    {
        $status_minta = Status_permintaan::all();
        return view('permintaan-barang.lihat-status-permintaan',compact('status_minta'));
    }

    public function destroy($id_status_permintaan)
    {
        $status_hapus = Status_permintaan::findorfail($id_status_permintaan);
        $status_hapus->delete();
        return back()->with('success', 'Data berhasil dihapus!');
    }

    public function getTambahStatus()
    {
        return view('permintaan-barang.tambah-status-permintaan');
    }

    public function createStatus(Request $request)
    {        
        Status_permintaan::create([
            'id_status_permintaan' => $request->id_status_permintaan,
            'status_permintaan'    => $request->status_permintaan,
        ]);

        return redirect('status-permintaan')->with('toast_success', 'Data Berhasil Tersimpan');
    }

    public function edit($id_status_permintaan)
    {
        $edit_permintaan = Status_permintaan::findorfail($id_status_permintaan);
        return view('permintaan-barang.update-status-permintaan', compact('edit_permintaan'));
    }

    public function update(Request $request, $id_status_permintaan)
    {
        $updt = Status_permintaan::findorfail($id_status_permintaan);
        $updt->update($request->all());
        return redirect('status-permintaan')->with('success', 'Data berhasil diedit!');
    }

}
