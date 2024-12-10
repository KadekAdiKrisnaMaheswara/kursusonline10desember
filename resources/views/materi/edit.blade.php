@extends('layouts.app')

@section('content')
    <h1>Edit Materi Kursus</h1>
    <form action="{{ route('materi.update', $materi) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="id_kursus">Kursus</label>
        <select name="id_kursus" id="id_kursus" required>
            @foreach ($kursuses as $kursus)
                <option value="{{ $kursus->id_kursus }}" {{ $kursus->id_kursus == $materi->id_kursus ? 'selected' : '' }}>
                    {{ $kursus->judul_kursus }}
                </option>
            @endforeach
        </select><br>

        <label for="judul_materi">Judul Materi</label>
        <input type="text" name="judul_materi" id="judul_materi" value="{{ $materi->judul_materi }}" required><br>

        <label for="file_materi">File Materi</label>
        <input type="file" name="file_materi" id="file_materi"><br>

        <button type="submit">Simpan</button>
    </form>
@endsection
