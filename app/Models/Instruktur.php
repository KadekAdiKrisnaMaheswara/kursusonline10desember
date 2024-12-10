<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instruktur extends Model
{
    use HasFactory;

    protected $table = 'instrukturs';
    
    protected $primaryKey = 'id_instruktur';

    protected $fillable = ['nama_instruktur', 'bidang_keahlian'];

    // Relasi ke Kursus
    public function kursus()
    {
        return $this->hasMany(Kursus::class, 'id_instruktur');
    }
}
