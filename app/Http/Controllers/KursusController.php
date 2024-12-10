<?php
namespace App\Http\Controllers;

use App\Models\Kursus;
use App\Models\Instruktur;
use Illuminate\Http\Request;

class KursusController extends Controller
{
    public function index()
    {
        $kursuses = Kursus::all();
        return view('kursus.index', compact('kursuses'));
    }

    public function create()
    {
        $instrukturs = Instruktur::all();
        return view('kursus.create', compact('instrukturs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_instruktur' => 'required',
            'judul_kursus' => 'required',
            'durasi' => 'required',
        ]);

        Kursus::create($request->all());

        return redirect()->route('kursus.index')
            ->with('success', 'Kursus created successfully.');
    }

    public function show(Kursus $kursus)
    {
        return view('kursus.show', compact('kursus'));
    }

    public function edit(Kursus $kursus)
    {
        $instrukturs = Instruktur::all();
        return view('kursus.edit', compact('kursus', 'instrukturs'));
    }

    public function update(Request $request, Kursus $kursus)
    {
        $request->validate([
            'id_instruktur' => 'required',
            'judul_kursus' => 'required',
            'durasi' => 'required',
        ]);

        $kursus->update($request->all());

        return redirect()->route('kursus.index')
            ->with('success', 'Kursus updated successfully.');
    }

    public function destroy(Kursus $kursus)
    {
        $kursus->delete();

        return redirect()->route('kursus.index')
            ->with('success', 'Kursus deleted successfully.');
    }
}
