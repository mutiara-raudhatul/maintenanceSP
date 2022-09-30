<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permintaan_barang extends Model
{
    use HasFactory;

    protected $table = "permintaan_barang"; //cek
    protected $primaryKey = "id_permintaan_barang"; //cek

    protected $fillable = [
        'id_permintaan_barang', 'tanggal_permintaan', 'surat_izin', 'jumlah_permintaan', 'id_user', 'id_detail_kebutuhan', 'id_status_permintaan'    
    ];
}
