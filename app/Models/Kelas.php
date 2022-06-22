<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $guarded = [];

    public function jenis_kelas()
    {
        return $this->belongsTo(JenisKelas::class, 'kelas_id', 'id');
    }
}
