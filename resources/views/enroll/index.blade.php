@extends('layouts.app')

@section('content')
    <h1>Daftar Enroll</h1>
    <a href="{{ route('enroll.create') }}">Tambah Enroll</a>
    <table>
        <thead>
            <tr>
                <th>ID Kursus</th>
                <th>ID Peserta</th>
                <th>Tanggal Enroll</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($enrolls as $enroll)
                <tr>
                    <td>{{ $enroll->kursus->judul_kursus }}</td>
                    <td>{{ $enroll->peserta->nama_peserta }}</td>
                    <td>{{ $enroll->tanggal_enroll }}</td>
                    <td>
                        <!-- Edit Button -->
                        <a href="{{ route('enroll.edit', $enroll->id) }}" class="btn btn-warning btn-sm">Edit</a>


                        
                        <!-- Delete Form -->
                        <form action="{{ route('enroll.destroy', $enroll) }}" method="POST" style="display:inline;">
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
