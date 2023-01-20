<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "barang"; //cek
    protected $primaryKey = "id_serial_number"; //cek
    public $incrementing=false;

    protected $fillable = [
        'id_serial_number', 'nip', 'asset_tag', 'id_model_barang', 'id_status_barang'
    ];
}
