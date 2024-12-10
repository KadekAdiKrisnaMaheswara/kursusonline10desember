<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

use App\Http\Controllers\InstrukturController;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\MateriKursusController;

Route::resource('instruktur', InstrukturController::class);
Route::resource('kursus', KursusController::class);
Route::resource('peserta', PesertaController::class);
Route::resource('enroll', EnrollController::class);
Route::resource('materi', MateriKursusController::class);

Route::get('enroll/{enroll}/edit', [EnrollController::class, 'edit'])->name('enroll.edit');


// Jika Anda ingin menggunakan home sebagai halaman utama
Route::get('/home', function () {
    return view('home');
})->name('home');