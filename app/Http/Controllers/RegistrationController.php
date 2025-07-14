<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RegistrationController extends Controller
{
    public function index()
    {
        $registrations = Registration::all();
        return view('peserta.index', compact('registrations'));
    }

    public function create()
    {
        return view('peserta.create');
    }

    public function store(Request $request)
{
    try {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'asal_sekolah' => 'required|string|max:255',
            'email' => 'required|email|unique:registrations,email',
            'nomor_whatsapp' => 'required|string|max:20',
            'lomba' => 'required|string|max:255',
            'pas_foto' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'scan_kartu_pelajar' => 'required|file|mimes:pdf|max:5120',
            'bukti_follow' => 'required|file|max:5120',
            'bukti_posting_twibbon' => 'required|file|max:5120',
        ]);

        $pasFotoPath = $request->file('pas_foto')->store('registrations/pas_foto', 'public');
        $scanKartuPelajarPath = $request->file('scan_kartu_pelajar')->store('registrations/scan_kartu_pelajar', 'public');
        $buktiFollowPath = $request->file('bukti_follow')->store('registrations/bukti_follow', 'public');
        $buktiPostingTwibbonPath = $request->file('bukti_posting_twibbon')->store('registrations/bukti_posting_twibbon', 'public');

        $registration = Registration::create([
            'nama_lengkap' => $validated['nama_lengkap'],
            'asal_sekolah' => $validated['asal_sekolah'],
            'email' => $validated['email'],
            'nomor_whatsapp' => $validated['nomor_whatsapp'],
            'lomba' => $validated['lomba'],
            'pas_foto_path' => $pasFotoPath,
            'scan_kartu_pelajar_path' => $scanKartuPelajarPath,
            'bukti_follow_path' => $buktiFollowPath,
            'bukti_posting_twibbon_path' => $buktiPostingTwibbonPath,
        ]);

        return redirect()->route('front.index')->with('success', 'Pendaftaran berhasil disimpan.');
    } catch (\Exception $e) {
        // Jika terjadi kesalahan, redirect kembali dengan pesan error
        return redirect()->back()->withErrors(['error' => 'Pendaftaran gagal disimpan. Silakan coba lagi.']);
    }
}


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
        $registration = Registration::findOrFail($id);

        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'asal_sekolah' => 'required|string|max:255',
            'email' => 'required|email|unique:registrations,email,'.$registration->id,
            'nomor_whatsapp' => 'required|string|max:20',
            'lomba' => 'required|string|max:255',
            'pas_foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'scan_kartu_pelajar' => 'nullable|file|mimes:pdf|max:5120',
            'bukti_follow' => 'nullable|file|max:5120',
            'bukti_posting_twibbon' => 'nullable|file|max:5120',
        ]);

        if ($request->hasFile('pas_foto')) {
            $pasFotoPath = $request->file('pas_foto')->store('registrations/pas_foto', 'public');
            $registration->pas_foto_path = $pasFotoPath;
        }
        if ($request->hasFile('scan_kartu_pelajar')) {
            $scanKartuPelajarPath = $request->file('scan_kartu_pelajar')->store('registrations/scan_kartu_pelajar', 'public');
            $registration->scan_kartu_pelajar_path = $scanKartuPelajarPath;
        }
        if ($request->hasFile('bukti_follow')) {
            $buktiFollowPath = $request->file('bukti_follow')->store('registrations/bukti_follow', 'public');
            $registration->bukti_follow_path = $buktiFollowPath;
        }
        if ($request->hasFile('bukti_posting_twibbon')) {
            $buktiPostingTwibbonPath = $request->file('bukti_posting_twibbon')->store('registrations/bukti_posting_twibbon', 'public');
            $registration->bukti_posting_twibbon_path = $buktiPostingTwibbonPath;
        }

        $registration->nama_lengkap = $validated['nama_lengkap'];
        $registration->asal_sekolah = $validated['asal_sekolah'];
        $registration->email = $validated['email'];
        $registration->nomor_whatsapp = $validated['nomor_whatsapp'];
        $registration->lomba = $validated['lomba'];

        $registration->save();

        return redirect()->route('peserta.index')->with('success', 'Pendaftaran berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $registration = Registration::findOrFail($id);
        $registration->delete();

        return redirect()->route('peserta.index')->with('success', 'Pendaftaran berhasil dihapus.');
    }
}
