@extends('layouts.app')

@section('content')
    <h1>Detail Enroll</h1>
    <p>Kursus: {{ $enroll->kursus->judul_kursus }}</p>
    <p>Peserta: {{ $enroll->peserta->nama_peserta }}</p>
    <p>Tanggal Enroll: {{ $enroll->tanggal_enroll }}</p>
@endsection
