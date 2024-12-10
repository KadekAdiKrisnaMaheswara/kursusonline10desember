@extends('layouts.app')

@section('content')
    <h1>Detail Peserta</h1>
    <p>Nama Peserta: {{ $peserta->nama_peserta }}</p>
    <p>Email: {{ $peserta->email }}</p>
@endsection
