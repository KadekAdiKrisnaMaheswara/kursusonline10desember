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
        Schema::create('enrolls', function (Blueprint $table) {
            $table->unsignedBigInteger('id_kursus');
            $table->unsignedBigInteger('id_peserta');
            $table->date('tanggal_enroll');
            $table->timestamps();
    
            // Foreign key
            $table->foreign('id_kursus')->references('id_kursus')->on('kursus')->onDelete('cascade');
            $table->foreign('id_peserta')->references('id_peserta')->on('peserta')->onDelete('cascade');
    
            // Primary key
            $table->primary(['id_kursus', 'id_peserta']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('enrolls');
    }
    
};
