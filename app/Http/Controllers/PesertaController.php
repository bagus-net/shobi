<?php

namespace App\Http\Controllers;

use App\Models\Registration; // Pastikan model Registration sudah ada
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function index()
{
    $registrations = Registration::all(); // Ambil semua data Registration
    return view('peserta.index', compact('registrations'));
}

    // public function create()
    // {
    //     return view('peserta.create'); // Tampilkan form untuk menambah Registration
    // }

    // public function store(Request $request)
    // {
    //     // Validasi dan simpan data Registration
    //     $request->validate([
    //         'nama_lengkap' => 'required|string|max:255',
    //         'asal_sekolah' => 'required|string|max:255',
    //         'email' => 'required|email|max:255',
    //         'nomor_whatsapp' => 'required|string|max:15',
    //         'lomba' => 'required|string|max:255',
    //     ]);

    //     Registration::create($request->all());
    //     return redirect()->route('peserta.index')->with('success', 'Registration berhasil ditambahkan.');
    // }

    public function show($id)
    {
        $registration = Registration::findOrFail($id);
        return view('peserta.show', compact('registration'));
    }

    public function edit($id)
    {
        $registration = Registration::findOrFail($id);
        return view('peserta.edit', compact('registration'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'asal_sekolah' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'nomor_whatsapp' => 'required|string|max:15',
            'lomba' => 'required|string|max:255',
        ]);

        $registration = Registration::findOrFail($id);
        $registration->update($request->all());
        return redirect()->route('peserta.index')->with('success', 'peserta berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $registration = Registration::findOrFail($id);
        $registration->delete();
        return redirect()->route('peserta.index')->with('success', 'Peserta berhasil dihapus.');
    }
}

