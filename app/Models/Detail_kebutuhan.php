<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_kebutuhan extends Model
{
    use HasFactory;

    protected $table = "detail_kebutuhan"; //cek
    protected $primaryKey = "id_detail_kebutuhan"; //cek

    protected $fillable = [
        'id_detail_kebutuhan', 'jumlah_permitaan', 'id_jenis_barang'    
    ];
}
