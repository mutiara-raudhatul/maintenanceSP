<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_maintenance extends Model
{
    use HasFactory;

    protected $table = "jenis_maintenance"; //cek
    protected $primaryKey = "id_jenis_maintenance"; //cek

    protected $fillable = [
        'id_jenis_maintenance', 'jenis_maintenance'
    ];
}
