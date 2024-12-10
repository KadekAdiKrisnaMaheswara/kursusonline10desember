@extends('layouts.app')

@section('content')
    <div class="form-container">
        <h1 class="form-title">Tambah Kursus</h1>
        <form action="{{ route('kursus.store') }}" method="POST">
            @csrf
            <!-- Pilih Instruktur -->
            <div class="form-group">
                <label for="id_instruktur" class="form-label">Instruktur</label>
                <select name="id_instruktur" id="id_instruktur" required class="form-input">
                    @foreach ($instrukturs as $instruktur)
                        <option value="{{ $instruktur->id_instruktur }}">{{ $instruktur->nama_instruktur }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Judul Kursus -->
            <div class="form-group">
                <label for="judul_kursus" class="form-label">Judul Kursus</label>
                <input type="text" name="judul_kursus" id="judul_kursus" required class="form-input">
            </div>

            <!-- Durasi -->
            <div class="form-group">
                <label for="durasi" class="form-label">Durasi</label>
                <input type="text" name="durasi" id="durasi" required class="form-input">
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class="form-button">Simpan</button>
        </form>
    </div>
@endsection
