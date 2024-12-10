@extends('layouts.app')

@section('content')
    <div class="form-container">
        <h1 class="form-title">Tambah Peserta</h1>
        <form action="{{ route('peserta.store') }}" method="POST">
            @csrf
            <!-- Nama Peserta -->
            <div class="form-group">
                <label for="nama_peserta" class="form-label">Nama Peserta</label>
                <input type="text" name="nama_peserta" id="nama_peserta" required class="form-input">
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" required class="form-input">
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class="form-button">Simpan</button>
        </form>
    </div>
@endsection
