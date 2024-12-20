<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KemajuanAkademik extends Model
{
    use HasFactory;

    protected $table = 'kemajuan_akademik';

    protected $fillable = [
        'nim',
        'semester',
        'grafik_kemajuan',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'nim', 'nim'); // Relasi belongsTo dengan mahasiswa
    }
};
