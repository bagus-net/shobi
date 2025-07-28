<section id="registration" class="registration section" data-aos="fade-up" data-aos-delay="100">
  <div class="container">
    @if($errors->any())
<script>
    alert('Pendaftaran gagal disimpan. gunakan email yg berbeda & Silakan coba lagi.');
</script>
@endif
    <h2 class="section-title">Registration form</h2>
    <div class="card border-danger mb-3" style="max-width: 500px; margin: 0 auto; background-color: #8b0000; color: white;">
      <div class="card-body">
        <form action="{{ route('register.submit') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="nama_lengkap" class="form-label">Nama lengkap :</label>
            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
          </div>
          <div class="mb-3">
            <label for="asal_sekolah" class="form-label">Asal sekolah :</label>
            <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Alamat email aktif :</label>
            <p style="color: #d4c600;">1 Email hanya untuk 1 Lomba</p> 
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="nomor_whatsapp" class="form-label">Nomor WhatsApp yang dapat dihubungi :</label>
            <input type="text" class="form-control" id="nomor_whatsapp" name="nomor_whatsapp" required>
          </div>
          <div class="mb-3">
            <label for="lomba" class="form-label">Lomba yang ingin diikuti :</label>
            <select class="form-select" id="lomba" name="lomba" required>
              <option value="">Pilih Lomba</option>
              <option value="MTQ">MTQ (Musabaqah Tilawatil Quran)</option>
              <option value="Dai Muda">Dai Muda</option>
              <option value="Olimpiade PAI">Olimpiade PAI</option>
              <option value="Poster Digital">Poster Digital</option>
              <option value="Olimpiade MIPA">Olimpiade MIPA</option>
              <option value="MHQ">MTQ (Musabaqah Hifdzil Quran)</option>
              <option value="Story Telling">Story Telling</option>
              <!-- Tambahkan pilihan lomba lainnya di sini -->
            </select>
          </div>

          <div class="mb-3">
            <label for="pas_foto" class="form-label">Upload PAS Foto 3 x 4 dalam format jpg atau png :</label>
            <input type="file" class="form-control" id="pas_foto" name="pas_foto" accept=".jpg,.jpeg,.png" required>
          </div>
          <div class="mb-3">
            <label for="scan_kartu_pelajar" class="form-label">Upload scan kartu pelajar atau surat rekomendasi sekolah dalam format pdf :</label>
            <input type="file" class="form-control" id="scan_kartu_pelajar" name="scan_kartu_pelajar" accept=".pdf" required>
          </div>
          <div class="mb-3">
            <label for="bukti_follow" class="form-label">Upload bukti follow @dafipesantren_official @official.difest :</label>
            <input type="file" class="form-control" id="bukti_follow" name="bukti_follow" required>
          </div>
          <div class="mb-3">
            <a href="https://supertwibbon.com/DIFEST8TH" target="_blank" class="btn btn-success mb-2" style="background-color: #d4c600; color: white; border: none; width: 100%; font-weight: bold;">Download Twibbon DIFEST 8th</a>
            <label for="bukti_posting_twibbon" class="form-label">Upload bukti posting twibbon :</label>
            <input type="file" class="form-control" id="bukti_posting_twibbon" name="bukti_posting_twibbon" required>
          </div>
          <button type="submit" class="btn btn-light">Daftar</button>
        </form>
      </div>
    </div>
  </div>

  @if(session('success'))
  <!-- Modal -->
  <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="background-color: #8b0000; color: white;">
        <div class="modal-header">
          {{-- <h5 class="modal-title" id="successModalLabel">Pendaftaran Berhasil</h5> --}}
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          {{ session('success') }}
        </div>
        <div class="modal-footer">
          <a href="https://chat.whatsapp.com/K0qunUE0vY45bGbSa5yIiz" target="_blank" class="btn btn-success" style="background-color: #25D366; color: white; border: none;">Join Grup WA</a>
          <a href="{{ url('/') }}" class="btn btn-light">Kembali ke Beranda</a>
        </div>
      </div>
    </div>
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var successModal = new bootstrap.Modal(document.getElementById('successModal'));
      successModal.show();
    });
  </script>
  @endif
</section>
