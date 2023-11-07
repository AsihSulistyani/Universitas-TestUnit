<?php

namespace App\Http\Controllers;

use App\Models\nilaiModel;
use Illuminate\Http\Request;

class nilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = nilaiModel::orderBy('id', 'desc')->get();
        return view('nilai.index')->with('nilai', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nilai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        nilaiModel::create($request->all());

        // $nilaimhs = 

        return redirect()->route('nilai.index')->with('success', 'Nilai Mahasiswa berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $nilai = nilaiModel::findOrFail($id);
        return view('nilai.show', compact('nilai'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $nilai = nilaiModel::findOrFail($id);
        return view('nilai.update', compact('nilai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $nilai = nilaiModel::findOrFail($id);

        $nilai->update($request->all());
        return redirect()->route('nilai.index')->with('success', 'Data Nilai Mahasiswa berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $nilai = nilaiModel::findOrFail($id);
        $nilai->delete();
        return redirect()->route('nilai.index')->with('success', 'Data Nilai Mahasiswa berhasil dihapus');
    }
}
