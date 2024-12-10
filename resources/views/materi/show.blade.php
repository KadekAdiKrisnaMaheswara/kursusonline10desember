@extends('layouts.app')

@section('content')
    <h1>Detail Materi Kursus</h1>
    <p>Kursus: {{ $materi->kursus->judul_kursus }}</p>
    <p>Judul Materi: {{ $materi->judul_materi }}</p>
    <p><a href="{{ asset('storage/' . $materi->file_materi) }}" target="_blank">Lihat Materi</a></p>
@endsection
