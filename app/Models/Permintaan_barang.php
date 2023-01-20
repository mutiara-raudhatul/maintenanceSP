<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permintaan_barang extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "permintaan_barang"; //cek
    protected $primaryKey = "id_permintaan_barang"; //cek

    protected $fillable = [
        'id_permintaan_barang', 'nip_peminta', 'tanggal_permintaan', 'surat_izin', 'nip_teknisi', 'catatan'   
    ];
}
