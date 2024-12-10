@extends('layouts.app')

@section('content')
    <h1>Detail Instruktur</h1>
    <p>ID: {{ $instruktur->id_instruktur }}</p>
    <p>Nama: {{ $instruktur->nama_instruktur }}</p>
    <p>Bidang Keahlian: {{ $instruktur->bidang_keahlian }}</p>
@endsection
