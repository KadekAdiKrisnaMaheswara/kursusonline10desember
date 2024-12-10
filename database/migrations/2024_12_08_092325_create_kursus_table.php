<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('kursus', function (Blueprint $table) {
            $table->id('id_kursus');
            $table->unsignedBigInteger('id_instruktur');
            $table->string('judul_kursus');
            $table->integer('durasi'); // Durasi dalam jam
            $table->timestamps();
    
            // Foreign key
            $table->foreign('id_instruktur')->references('id_instruktur')->on('instrukturs')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kursus');
    }
    
};
