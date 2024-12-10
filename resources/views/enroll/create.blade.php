@extends('layouts.app')

@section('content')
    <h1>Tambah Enroll</h1>
    <form action="{{ route('enroll.store') }}" method="POST">
        @csrf
        <label for="id_kursus">Kursus</label>
        <select name="id_kursus" id="id_kursus" required>
            @foreach ($kursuses as $kursus)
                <option value="{{ $kursus->id_kursus }}">{{ $kursus->judul_kursus }}</option>
            @endforeach
        </select><br>

        <label for="id_peserta">Peserta</label>
        <select name="id_peserta" id="id_peserta" required>
            @foreach ($pesertas as $peserta)
                <option value="{{ $peserta->id_peserta }}">{{ $peserta->nama_peserta }}</option>
            @endforeach
        </select><br>

        <label for="tanggal_enroll">Tanggal Enroll</label>
        <input type="date" name="tanggal_enroll" id="tanggal_enroll" required><br>

        <button type="submit">Simpan</button>
    </form>
@endsection
