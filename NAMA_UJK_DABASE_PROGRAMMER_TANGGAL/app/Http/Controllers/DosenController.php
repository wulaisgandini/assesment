<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    // Index - Display a list of dosens
    public function index()
    {
        $dosens = Dosen::all();
        return view('dosens.index', compact('dosens'));
    }

    // Create - Show the form to create a new dosen
    public function create()
    {
        return view('dosens.create');
    }

    // Store - Save a new dosen to the database
    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'matkul' => 'required',
        ]);

        Dosen::create($request->all());

        return redirect()->route('dosens.index')->with('success', 'Dosen created successfully');
    }

    // Show - Display the specified dosen
    public function show(Dosen $dosen)
    {
        return view('dosens.show', compact('dosen'));
    }

    // Edit - Show the form to edit the specified dosen
    public function edit(Dosen $dosen)
    {
        return view('dosens.edit', compact('dosen'));
    }

    // Update - Update the specified dosen in the database
    public function update(Request $request, Dosen $dosen)
    {
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'matkul' => 'required',
        ]);

        $dosen->update($request->all());

        return redirect()->route('dosens.index')->with('success', 'Dosen updated successfully');
    }

    // Destroy - Remove the specified dosen from the database
    public function destroy(Dosen $dosen)
    {
        $dosen->delete();

        return redirect()->route('dosens.index')->with('success', 'Dosen deleted successfully');
    }
}
