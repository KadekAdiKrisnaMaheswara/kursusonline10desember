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
        Schema::create('materi_kursus', function (Blueprint $table) {
            $table->id('id_materi');
            $table->unsignedBigInteger('id_kursus');
            $table->string('judul_materi');
            $table->string('file_materi');
            $table->timestamps();
    
            // Foreign key
            $table->foreign('id_kursus')->references('id_kursus')->on('kursus')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('materi_kursus');
    }
    
};
