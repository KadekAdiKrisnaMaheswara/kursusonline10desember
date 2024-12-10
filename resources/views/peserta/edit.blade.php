@extends('layouts.app')

@section('content')
    <h1>Edit Peserta</h1>
    <form action="{{ route('peserta.update', $peserta) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nama_peserta">Nama Peserta</label>
        <input type="text" name="nama_peserta" id="nama_peserta" value="{{ $peserta->nama_peserta }}" required><br>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ $peserta->email }}" required><br>

        <button type="submit">Simpan</button>
    </form>
@endsection
