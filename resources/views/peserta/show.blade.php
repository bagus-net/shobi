@extends('layouts.master')

@section('title')
Detail Peserta
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h2 class="mb-0">Detail Peserta</h2>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <h5>Nama Lengkap:</h5>
                        <p>{{ $registration->nama_lengkap ?? '-' }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Asal Sekolah:</h5>
                        <p>{{ $registration->asal_sekolah ?? '-' }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <h5>Email:</h5>
                        <p>{{ $registration->email ?? '-' }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Nomor WhatsApp:</h5>
                        <p>{{ $registration->nomor_whatsapp ?? '-' }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <h5>Lomba:</h5>
                        <p>{{ $registration->lomba ?? '-' }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Foto Peserta:</h5>
                        @if($registration->pas_foto_path)
                            <img src="{{ Storage::url($registration->pas_foto_path) }}" alt="Foto Peserta" class="img-fluid rounded-4" style="max-width: 200px;">
                        @else
                            <p>Tidak ada foto yang diunggah.</p>
                        @endif
                    </div>
                    <div class="mb-3">
  <label for="lomba" class="form-label">Lomba yang ingin diikuti :</label>
  <select class="form-select" id="lomba" name="lomba" required>
    <option value="">Pilih Lomba</option>
    <option value="MTQ">MTQ (Musabaqah Tilawatil Quran)</option>
    <option value="Karya Ilmiah">Karya Ilmiah</option>
    <option value="Debat">Debat</option>
    <option value="Lomba Menulis Cerita">Lomba Menulis Cerita</option>
    <!-- Tambahkan pilihan lomba lainnya di sini -->
  </select>
</div>

                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <h5>Scan Kartu Pelajar:</h5>
                        @if($registration->scan_kartu_pelajar_path)
                            <a href="{{ Storage::url($registration->scan_kartu_pelajar_path) }}" class="btn btn-primary" download>Unduh Kartu Pelajar</a>
                        @else
                            <p>Tidak ada kartu pelajar yang diunggah.</p>
                        @endif
                    </div>
                </div>
                <a href="{{ route('peserta.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection