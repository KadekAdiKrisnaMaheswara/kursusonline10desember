@extends('layouts.app')

@section('content')
    <div class="form-container">
        <h1 class="form-title">Tambah Materi Kursus</h1>
        <form action="{{ route('materi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Kursus -->
            <div class="form-group">
                <label for="id_kursus" class="form-label">Kursus</label>
                <select name="id_kursus" id="id_kursus" required class="form-select">
                    @foreach ($kursuses as $kursus)
                        <option value="{{ $kursus->id_kursus }}">{{ $kursus->judul_kursus }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Judul Materi -->
            <div class="form-group">
                <label for="judul_materi" class="form-label">Judul Materi</label>
                <input type="text" name="judul_materi" id="judul_materi" required class="form-input">
            </div>

            <!-- File Materi -->
            <div class="form-group">
                <label for="file_materi" class="form-label">File Materi</label>
                <input type="file" name="file_materi" id="file_materi" required class="form-input">
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class="form-button">Simpan</button>
        </form>
    </div>
@endsection
