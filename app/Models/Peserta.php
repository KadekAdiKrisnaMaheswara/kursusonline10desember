<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $table = 'peserta';
    
    protected $primaryKey = 'id_peserta';

    protected $fillable = ['nama_peserta', 'email'];

    // Relasi ke Kursus (Many to Many)
    public function kursus()
    {
        return $this->belongsToMany(Kursus::class, 'enrolls', 'id_peserta', 'id_kursus')->withPivot('tanggal_enroll');
    }
}
