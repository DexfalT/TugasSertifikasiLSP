<?php

// app\Models\FormData.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'kecamatan',
        'kabupaten',
        'propinsi',
        'nomor_telepon',
        'nomor_hp',
        'email',
        'kewarganegaraan',
        'negara_wna',
        'tanggal_lahir',
        'kota_lahir',
        'propinsi_lahir',
        'negara_lahir',
        'jenis_kelamin',
        'status_menikah',
        'agama',
    ];
}
