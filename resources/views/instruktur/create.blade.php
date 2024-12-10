@extends('layouts.app')

@section('content')
    <div class="form-container">
        <h1 class="form-title">Tambah Instruktur</h1>
        <form action="{{ route('instruktur.store') }}" method="POST" class="form">
            @csrf
            <!-- Input Nama Instruktur -->
            <div class="form-group">
                <label for="nama_instruktur" class="form-label">Nama Instruktur</label>
                <input type="text" name="nama_instruktur" id="nama_instruktur" required class="form-input">
            </div>

            <!-- Input Bidang Keahlian -->
            <div class="form-group">
                <label for="bidang_keahlian" class="form-label">Bidang Keahlian</label>
                <input type="text" name="bidang_keahlian" id="bidang_keahlian" required class="form-input">
            </div>

            <!-- Tombol Simpan -->
            <button type="submit" class="form-button">Simpan</button>
        </form>
    </div>
@endsection
