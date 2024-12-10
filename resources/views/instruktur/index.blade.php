@extends('layouts.app')

@section('content')
    <h1>Daftar Instruktur</h1>
    <a href="{{ route('instruktur.create') }}">Tambah Instruktur</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Bidang Keahlian</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($instrukturs as $instruktur)
                <tr>
                    <td>{{ $instruktur->id_instruktur }}</td>
                    <td>{{ $instruktur->nama_instruktur }}</td>
                    <td>{{ $instruktur->bidang_keahlian }}</td>
                    <td>
                        <a href="{{ route('instruktur.edit', $instruktur) }}">Edit</a>
                        <form action="{{ route('instruktur.destroy', $instruktur) }}" method="POST" style="display:inline;">
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
