<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance_teknisi extends Model
{
    use HasFactory;

    protected $table = "maintenance_teknisi"; //cek
    protected $primaryKey = "id_maintenance_teknisi"; //cek

    protected $fillable = [
        'id_maintenance_teknisi', 'detail_kerusakan', 'lama_pengerjaan', 'note', 'lokasi', 'id_permintaan_maintenance', 'id_barang', 'id_jenis_maintenance'    
    ];
}