@extends('layouts.app')

@section('content')
    <h1>Daftar Kursus</h1>
    <a href="{{ route('kursus.create') }}">Tambah Kursus</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Instruktur</th>
                <th>Judul Kursus</th>
                <th>Durasi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kursuses as $kursus)
                <tr>
                    <td>{{ $kursus->id_kursus }}</td>
                    <td>{{ $kursus->instruktur->nama_instruktur }}</td>
                    <td>{{ $kursus->judul_kursus }}</td>
                    <td>{{ $kursus->durasi }}</td>
                    <td>
                        <a href="{{ route('kursus.edit', $kursus) }}">Edit</a>
                        <form action="{{ route('kursus.destroy', $kursus) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
