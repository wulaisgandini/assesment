<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    public function index()
    {
        $matkuls = Matkul::all();
        return view('matkuls.index', compact('matkuls'));
    }

    public function create()
    {
        return view('matkuls.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_matkul' => 'required',
            'nama_matkul' => 'required',
        ]);

        Matkul::create($request->all());

        return redirect()->route('matkuls.index')->with('success', 'Matkul created successfully');
    }

    public function edit(Matkul $matkul)
    {
        return view('matkuls.edit', compact('matkul'));
    }

    public function update(Request $request, Matkul $matkul)
    {
        $request->validate([
            'kode_matkul' => 'required',
            'nama_matkul' => 'required',
        ]);

        $matkul->update($request->all());

        return redirect()->route('matkuls.index')->with('success', 'Matkul updated successfully');
    }

    public function destroy(Matkul $matkul)
    {
        $matkul->delete();

        return redirect()->route('matkuls.index')->with('success', 'Matkul deleted successfully');
    }
}
