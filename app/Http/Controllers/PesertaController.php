<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function index()
    {
        $pesertas = Peserta::all();
        return view('peserta.index', compact('pesertas'));
    }

    public function create()
    {
        return view('peserta.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_peserta' => 'required',
            'email' => 'required|email',
        ]);

        Peserta::create($request->all());

        return redirect()->route('peserta.index')
            ->with('success', 'Peserta created successfully.');
    }

    public function show(Peserta $peserta)
    {
        return view('peserta.show', compact('peserta'));
    }

    public function edit(Peserta $peserta)
    {
        return view('peserta.edit', compact('peserta'));
    }

    public function update(Request $request, Peserta $peserta)
    {
        $request->validate([
            'nama_peserta' => 'required',
            'email' => 'required|email',
        ]);

        $peserta->update($request->all());

        return redirect()->route('peserta.index')
            ->with('success', 'Peserta updated successfully.');
    }

    public function destroy(Peserta $peserta)
    {
        $peserta->delete();

        return redirect()->route('peserta.index')
            ->with('success', 'Peserta deleted successfully.');
    }
}
