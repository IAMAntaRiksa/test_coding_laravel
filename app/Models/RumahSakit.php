<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RumahSakit extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_rs', 'alamat_rs', 'deskripsi_rs', 'no_tlpn_rs'
    ];
}
