<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permintaan_maintenance;
use App\Models\Jenis_barang;
use App\Models\Status_maintenance;

class PermintaanMaintenanceController extends Controller
{
    public function index()
    {
         $data = Permintaan_maintenance::join('users', 'users.id', '=', 'permintaan_maintenance.id_user')
         ->join('jenis_barang', 'jenis_barang.id_jenis_barang', '=', 'permintaan_maintenance.id_jenis_barang')
         ->join('status_maintenance', 'status_maintenance.id_status_maintenance', '=', 'permintaan_maintenance.id_status_maintenance')
         ->select('permintaan_maintenance.tanggal_permintaan', 'jenis_barang.jenis_barang', 'users.name', 'status_maintenance.status_maintenance')
         ->paginate(15);
        return view('maintenance.list-permintaan-maintenance', ['data' => $data]);
    }
}
