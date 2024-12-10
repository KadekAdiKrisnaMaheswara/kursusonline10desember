@extends('layouts.app')

@section('content')
    <h1>Edit Enroll</h1>

    <a href="{{ route('enroll.edit', $enroll->id) }}" class="btn btn-warning btn-sm">Edit</a>
    >
        @csrf
        @method('PUT') <!-- Gunakan PUT atau PATCH untuk update -->
        
        <div>
            <label for="id_kursus">Kursus:</label>
            <select name="id_kursus" id="id_kursus" required>
                @foreach ($kursuses as $kursus)
                    <option value="{{ $kursus->id }}" {{ $kursus->id == $enroll->id_kursus ? 'selected' : '' }}>
                        {{ $kursus->judul_kursus }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="id_peserta">Peserta:</label>
            <select name="id_peserta" id="id_peserta" required>
                @foreach ($pesertas as $peserta)
                    <option value="{{ $peserta->id }}" {{ $peserta->id == $enroll->id_peserta ? 'selected' : '' }}>
                        {{ $peserta->nama_peserta }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="tanggal_enroll">Tanggal Enroll:</label>
            <input type="date" name="tanggal_enroll" id="tanggal_enroll" value="{{ $enroll->tanggal_enroll }}" required>
        </div>

        <button type="submit">Update Enroll</button>
    </form>
@endsection
