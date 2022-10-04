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
}
