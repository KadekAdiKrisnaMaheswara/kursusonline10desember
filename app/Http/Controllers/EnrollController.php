<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use App\Models\Kursus;
use App\Models\Peserta;
use Illuminate\Http\Request;

class EnrollController extends Controller
{
    // Menampilkan daftar enroll
    public function index()
    {
        $enrolls = Enroll::with(['kursus', 'peserta'])->get();
        return view('enroll.index', compact('enrolls'));
    }

    // Menampilkan form untuk membuat enroll baru
    public function create()
    {
        $kursuses = Kursus::all();
        $pesertas = Peserta::all();
        return view('enroll.create', compact('kursuses', 'pesertas'));
    }

    // Menyimpan data enroll baru
    public function store(Request $request)
    {
        $request->validate([
            'id_kursus' => 'required',
            'id_peserta' => 'required',
            'tanggal_enroll' => 'required|date',
        ]);

        Enroll::create($request->all());

        return redirect()->route('enroll.index')->with('success', 'Enrollment created successfully.');
    }

    // Menampilkan data enroll berdasarkan ID
    public function show(Enroll $enroll)
    {
        return view('enroll.show', compact('enroll'));
    }

    // Menampilkan form untuk edit enroll
    public function edit($id)
    {
        $enroll = Enroll::find($id);  // atau bisa menggunakan Enroll::findOrFail($id)
        return view('enroll.edit', compact('enroll'));
    }
    

    // Mengupdate data enroll
    public function update(Request $request, Enroll $enroll)
    {
        $request->validate([
            'id_kursus' => 'required',
            'id_peserta' => 'required',
            'tanggal_enroll' => 'required|date',
        ]);

        $enroll->update($request->all());

        return redirect()->route('enroll.index')->with('success', 'Enrollment updated successfully.');
    }

    // Menghapus data enroll
    public function destroy(Enroll $enroll)
    {
        $enroll->delete();

        return redirect()->route('enroll.index')->with('success', 'Enrollment deleted successfully.');
    }
}
