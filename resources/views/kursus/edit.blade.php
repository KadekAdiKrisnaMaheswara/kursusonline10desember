@extends('layouts.app')

@section('content')
    <h1>Edit Kursus</h1>
    <form action="{{ route('kursus.update', $kursus) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="id_instruktur">Instruktur</label>
        <select name="id_instruktur" id="id_instruktur" required>
            @foreach ($instrukturs as $instruktur)
                <option value="{{ $instruktur->id_instruktur }}" {{ $instruktur->id_instruktur == $kursus->id_instruktur ? 'selected' : '' }}>
                    {{ $instruktur->nama_instruktur }}
                </option>
            @endforeach
        </select><br>

        <label for="judul_kursus">Judul Kursus</label>
        <input type="text" name="judul_kursus" id="judul_kursus" value="{{ $kursus->judul_kursus }}" required><br>

        <label for="durasi">Durasi</label>
        <input type="text" name="durasi" id="durasi" value="{{ $kursus->durasi }}" required><br>

        <button type="submit">Simpan</button>
    </form>
@endsection
