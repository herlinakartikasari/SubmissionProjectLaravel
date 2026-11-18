<?php

namespace App\Http\Controllers;
use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliah = Matakuliah::all();
        return view('matakuliah.index', compact('matakuliah'));
    }
    public function create()
    {
        return view('matakuliah.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'kode_matakuliah' => 'required|unique:matakuliah,kode_matakuliah',
            'nama_matakuliah' => 'required',
            'SKS' => 'required|integer|min:1|max:6',
        ], [
            'kode_matakuliah.required' => 'Kode mata kuliah wajib diisi.',
            'kode_matakuliah.unique' => 'Kode mata kuliah sudah digunakan.',
            'nama_matakuliah.required' => 'Nama mata kuliah wajib diisi.',
            'SKS.required' => 'Jumlah SKS wajib diisi.',
            'SKS.integer' => 'SKS harus berupa angka.',
            'SKS.min' => 'SKS minimal 1.',
            'SKS.max' => 'SKS maksimal 6.',
        ]);

        Matakuliah::create([
            'kode_matakuliah' => $request->kode_matakuliah,
            'nama_matakuliah' => $request->nama_matakuliah,
            'SKS' => $request->SKS,
        ]);

        return redirect()->route('matakuliah.index')
            ->with('success', 'Data mata kuliah berhasil ditambahkan.');
    }
    public function show($id)
    {
        $matakuliah = Matakuliah::findOrFail($id);

        return view('matakuliah.show', compact('matakuliah'));
    }
}
