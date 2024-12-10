<?php

namespace App\Http\Controllers;

use App\Models\MateriKursus;
use App\Models\Kursus;
use Illuminate\Http\Request;

class MateriKursusController extends Controller
{
    public function index()
    {
        $materis = MateriKursus::all();
        return view('materi.index', compact('materis'));
    }

    public function create()
    {
        $kursuses = Kursus::all();
        return view('materi.create', compact('kursuses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_kursus' => 'required',
            'judul_materi' => 'required',
            'file_materi' => 'required|file',
        ]);

        MateriKursus::create($request->all());

        return redirect()->route('materi.index')
            ->with('success', 'Materi Kursus created successfully.');
    }

    public function show(MateriKursus $materi)
    {
        return view('materi.show', compact('materi'));
    }

    public function edit(MateriKursus $materi)
    {
        $kursuses = Kursus::all();
        return view('materi.edit', compact('materi', 'kursuses'));
    }

    public function update(Request $request, MateriKursus $materi)
    {
        $request->validate([
            'id_kursus' => 'required',
            'judul_materi' => 'required',
            'file_materi' => 'required|file',
        ]);

        $materi->update($request->all());

        return redirect()->route('materi.index')
            ->with('success', 'Materi Kursus updated successfully.');
    }

    public function destroy(MateriKursus $materi)
    {
        $materi->delete();

        return redirect()->route('materi.index')
            ->with('success', 'Materi Kursus deleted successfully.');
    }
}
