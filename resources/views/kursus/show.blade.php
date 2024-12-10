@extends('layouts.app')

@section('content')
    <h1>Detail Kursus</h1>
    <p>ID: {{ $kursus->id_kursus }}</p>
    <p>Instruktur: {{ $kursus->instruktur->nama_instruktur }}</p>
    <p>Judul Kursus: {{ $kursus->judul_kursus }}</p>
    <p>Durasi: {{ $kursus->durasi }}</p>
@endsection
