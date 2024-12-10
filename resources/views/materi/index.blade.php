@extends('layouts.app')

@section('content')
    <h1>Daftar Materi Kursus</h1>
    <a href="{{ route('materi.create') }}">Tambah Materi</a>
    <table>
        <thead>
            <tr>
                <th>ID Kursus</th>
                <th>Judul Materi</th>
                <th>File Materi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($materis as $materi)
                <tr>
                    <td>{{ $materi->kursus->judul_kursus }}</td>
                    <td>{{ $materi->judul_materi }}</td>
                    <td><a href="{{ asset('storage/' . $materi->file_materi) }}" target="_blank">Lihat Materi</a></td>
                    <td>
                        <a href="{{ route('materi.edit', $materi) }}">Edit</a>
                        <form action="{{ route('materi.destroy', $materi) }}" method="POST" style="display:inline;">
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
