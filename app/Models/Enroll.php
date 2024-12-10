<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    protected $fillable = ['id_kursus', 'id_peserta', 'tanggal_enroll'];

    public function kursus()
    {
        return $this->belongsTo(Kursus::class, 'id_kursus');
    }

    public function peserta()
    {
        return $this->belongsTo(Peserta::class, 'id_peserta');
    }
}
