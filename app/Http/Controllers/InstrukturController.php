<?php
namespace App\Http\Controllers;

use App\Models\Instruktur;
use Illuminate\Http\Request;

class InstrukturController extends Controller
{
    public function index()
    {
        $instrukturs = Instruktur::all();
        return view('instruktur.index', compact('instrukturs'));
    }

    public function create()
    {
        return view('instruktur.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_instruktur' => 'required',
            'bidang_keahlian' => 'required',
        ]);

        Instruktur::create($request->all());

        return redirect()->route('instruktur.index')
            ->with('success', 'Instruktur created successfully.');
    }

    public function show(Instruktur $instruktur)
    {
        return view('instruktur.show', compact('instruktur'));
    }

    public function edit(Instruktur $instruktur)
    {
        return view('instruktur.edit', compact('instruktur'));
    }

    public function update(Request $request, Instruktur $instruktur)
    {
        $request->validate([
            'nama_instruktur' => 'required',
            'bidang_keahlian' => 'required',
        ]);

        $instruktur->update($request->all());

        return redirect()->route('instruktur.index')
            ->with('success', 'Instruktur updated successfully.');
    }

    public function destroy(Instruktur $instruktur)
    {
        $instruktur->delete();

        return redirect()->route('instruktur.index')
            ->with('success', 'Instruktur deleted successfully.');
    }
}
