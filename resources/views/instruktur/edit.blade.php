@extends('layouts.app')

@section('content')
    <h1>Edit Instruktur</h1>
    <form action="{{ route('instruktur.update', $instruktur) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="nama_instruktur">Nama Instruktur</label>
        <input type="text" name="nama_instruktur" id="nama_instruktur" value="{{ $instruktur->nama_instruktur }}" required><br>

        <label for="bidang_keahlian">Bidang Keahlian</label>
        <input type="text" name="bidang_keahlian" id="bidang_keahlian" value="{{ $instruktur->bidang_keahlian }}" required><br>

        <button type="submit">Simpan</button>
    </form>
@endsection
