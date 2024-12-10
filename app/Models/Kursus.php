<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    use HasFactory;

    protected $table = 'kursus';
    
    protected $primaryKey = 'id_kursus';

    protected $fillable = ['id_instruktur', 'judul_kursus', 'durasi'];

    // Relasi ke Instruktur
    public function instruktur()
    {
        return $this->belongsTo(Instruktur::class, 'id_instruktur');
    }

    // Relasi ke Peserta (Many to Many)
    public function peserta()
    {
        return $this->belongsToMany(Peserta::class, 'enrolls', 'id_kursus', 'id_peserta')->withPivot('tanggal_enroll');
    }

    // Relasi ke Materi (One to Many)
    public function materi()
    {
        return $this->hasMany(MateriKursus::class, 'id_kursus');
    }
}
