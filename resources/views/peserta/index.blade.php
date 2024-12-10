@extends('layouts.app')

@section('content')
    <h1>Daftar Peserta</h1>
    <a href="{{ route('peserta.create') }}">Tambah Peserta</a>
    <table>
        <thead>
            <tr>
                <th>Nama Peserta</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pesertas as $peserta)
                <tr>
                    <td>{{ $peserta->nama_peserta }}</td>
                    <td>{{ $peserta->email }}</td>
                    <td>
                        <a href="{{ route('peserta.edit', $peserta) }}">Edit</a>
                        <form action="{{ route('peserta.destroy', $peserta) }}" method="POST" style="display:inline;">
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
