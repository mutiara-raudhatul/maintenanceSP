<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_barang extends Model
{
    use HasFactory;

    protected $table = "jenis_barang"; //cek
    protected $primaryKey = "id_jenis_barang"; //cek

    protected $fillable = [
        'id_jenis_barang', 'jenis_barang','doc_maintenance', 'id_maintenance'
    ];
}
