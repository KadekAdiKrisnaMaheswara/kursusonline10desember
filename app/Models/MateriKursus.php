<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriKursus extends Model
{
    use HasFactory;

    protected $table = 'materi_kursus';
    
    protected $primaryKey = 'id_materi';

    protected $fillable = ['id_kursus', 'judul_materi', 'file_materi'];

    // Relasi ke Kursus
    public function kursus()
    {
        return $this->belongsTo(Kursus::class, 'id_kursus');
    }
}
