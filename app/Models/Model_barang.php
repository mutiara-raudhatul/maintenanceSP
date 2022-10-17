<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_barang extends Model
{
    use HasFactory;

    protected $table = "model_barang"; //cek
    protected $primaryKey = "id_model_barang"; //cek

    protected $fillable = [
        'id_model_barang', 'model_barang', 'id_jenis_baran'    
    ];
}
