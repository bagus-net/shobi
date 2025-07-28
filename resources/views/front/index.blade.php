<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>DIFEST</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="{{ asset('assets/img/difest-logo.png') }}">
  <link href="{{ asset('assets/img/difest-logo.png') }}" rel="apple-touch-icon" 

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Migra:ital,wght@0,400;1,400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Tambahkan di dalam <head> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.querySelector('.mobile-nav-toggle');
    const navUl = document.querySelector('#navmenu ul');
    if (toggle && navUl) {
      toggle.addEventListener('click', function() {
        navUl.classList.toggle('show');
      });
    }
  });
</script>
<body class="index-page">

   <header id="header" class="header fixed-top"> 

<div class="topbar d-flex align-items-center d-block d-md-none" style="background-color: #8b0000;">
  <div class="container d-flex justify-content-between">
    <div class="contact-info d-flex align-items-center">
      <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:difest8th@gmail.com" style="color: white;"></a></i>
      
    </div>
    <div class="social-links d-flex align-items-center">
      <a href="https://www.tiktok.com/@difest" class="tiktok" style="color: white;"><i class="bi bi-tiktok"></i></a>
      <a href="https://www.instagram.com/official.difest/" class="instagram" style="color: white;"><i class="bi bi-instagram"></i></a>
    </div>
  </div>
</div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center flex-column" style="background-color: #a40000; padding: 10px 0; width: 100%;">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <!-- Logo pojok kiri di dalam navbar flex -->
        <a href="{{ url('/') }}" class="navbar-corner-logo d-flex align-items-center" style="padding-right: 16px;">
          <img src="{{ URL::asset('/assets/img/difest.png') }}" alt="Logo Kiri" style="height: 70px; width: auto;">
        </a>
        <a href="{{ url('/') }}" class="logo d-flex align-items-center" style="color: white; font-weight: bold; font-size: 24px; text-decoration: none;">

          
 
        </a>

        <nav id="navmenu" class="navmenu">
          <ul style="display: flex; list-style: none; margin: 0; padding: 0; align-items: center;">
            <li style="margin-right: 20px;"><a href="#hero" class="active" style="color: white; text-decoration: none;">Home</a></li>
            <li style="margin-right: 20px;"><a href="#about" style="color: white; text-decoration: none;">About</a></li>
            <li style="margin-right: 20px;"><a href="#services" style="color: white; text-decoration: none;">Category</a></li>
            <li style="margin-right: 20px;"><a href="#registration" style="color: white; text-decoration: none;">Register</a></li>
            <li class="d-none d-md-flex" style="gap: 12px; align-items: center;">
              <a href="mailto:difest8th@gmail.com" title="Email" style="color: white; font-size: 1.3em;"><i class="bi bi-envelope"></i></a>
              <a href="https://www.tiktok.com/@difest" target="_blank" title="TikTok" style="color: white; font-size: 1.3em;"><i class="bi bi-tiktok"></i></a>
              <a href="https://www.instagram.com/official.difest/" target="_blank" title="Instagram" style="color: white; font-size: 1.3em;"><i class="bi bi-instagram"></i></a>
            </li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list" style="color: white;"></i>
        </nav>

      </div>

    </div>

  </header>

  <main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section accent-background">
      
      <!-- Gambar Light Effect -->
      <img src="{{ asset('assets/img/light.png') }}" alt="Light Effect" class="light-effect animate-fade-in-scale" />
      <!-- Gambar Indonesia Background -->
      <img src="{{ asset('assets/img/indonesia.png') }}" alt="Indonesia Background" class="indonesia-effect animate-fade-in-scale" />
      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5 justify-content-center">
          <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center text-center">
            <img src="{{ asset('assets/img/welcome-dafi.png') }}" alt="Welcome Dafi Islamic Festival" class="header-welcome-img animate-fade-in-scale" />
            {{-- <a href="#about" class="btn-get-started mt-4">Get Started</a>
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center mt-4"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
          </div>
        </div>
      </div>
      </div>

      {{-- <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
        <div class="container position-relative">
          <div class="row gy-4 mt-5">

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-easel"></i></div>
                <h4 class="title"><a href="" class="stretched-link">Lorem Ipsum</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-gem"></i></div>
                <h4 class="title"><a href="" class="stretched-link">Sed ut perspiciatis</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-geo-alt"></i></div>
                <h4 class="title"><a href="" class="stretched-link">Magni Dolores</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-command"></i></div>
                <h4 class="title"><a href="" class="stretched-link">Nemo Enim</a></h4>
              </div>
            </div><!--End Icon Box --> --}}

          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->


    

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container section-title" data-aos="fade-up">
        {{-- <h2>About Us<br></h2> --}}
         <img src="assets/img/apaitu.png" class="img-fluid rounded-4" alt="About Us Image">
      </div><!-- End Section Title -->

      <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
        {{-- <img src="assets/img/about.jpg" class="img-fluid rounded-4" alt="About Us Image">
      </div> --}}

    </section><!-- /About Section -->

    
        <!-- Carousel Section -->
    <section id="carousel" class="carousel section">
        <div class="container">
            {{-- <h2 class="text-center" data-aos="fade-up">Image Carousel</h2> --}}
            <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/img/3.png') }}" class="d-block w-100" alt="Image 3">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/4.png') }}" class="d-block w-100" alt="Image 4">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/5.png') }}" class="d-block w-100" alt="Image 5">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/6.png') }}" class="d-block w-100" alt="Image 6">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section><!-- /Carousel Section -->
    <!-- Teaser Video & Poster Section -->
    <section id="teaser-poster" class="section py-5" style="background: #fff;">
      <div class="container" data-aos="fade-up">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 mb-4 mb-lg-0 text-center">
            <div class="ratio ratio-16x9 rounded-4 shadow-sm border" style="overflow:hidden;">
              <iframe src="https://www.youtube.com/embed/0-YdQ4PAahk?start=36" title="DIFEST Teaser" allowfullscreen style="border:0;"></iframe>
            </div>
            <div class="mt-3" style="font-family:'Poppins',sans-serif;">
              <h5 class="fw-bold mb-1" style="color:#a40000;">Teaser DIFEST 2025</h5>
              <p class="mb-0" style="color:#333;">Tonton video teaser DIFEST untuk merasakan semangatnya!</p>
            </div>
          </div>
          <div class="col-lg-5 text-center">
            <div class="card border-0 shadow-sm p-3 mb-3 bg-white rounded-4 d-inline-block" style="max-width:350px;">
              <img src="assets/img/poster.png" alt="Poster DIFEST 2025" class="img-fluid rounded-3 mb-3" style="object-fit:cover;">
              <a href="assets/img/poster.png" download class="btn btn-outline-danger w-100 d-flex align-items-center justify-content-center gap-2" style="font-family:'Montserrat',sans-serif; font-weight:600;">
                <i class="bi bi-download" style="font-size:1.3em;"></i> Download Poster
              </a>
            </div>
            <div>
              {{-- <span style="font-size:0.95em; color:#888;">Bagikan poster ini untuk dukung DIFEST!</span> --}}
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <img src="assets/img/judul-lomba.png" class="img-fluid rounded-4" alt="About Us Image">
        {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item position-relative">
              <img src="{{ asset('assets/img/lomba1.png') }}" alt="Lomba 1" class="img-fluid rounded-4" style="width: 100%; height: auto; object-fit: cover;">
               <h3>MTQ</h3>
              <p>Musabaqah Tilawatil Qur'an (MTQ) adalah ajang perlombaan membaca Al-Qur'an dengan lantunan indah dan penuh makna. Perlombaan ini menjadi wadah untuk menumbuhkan kecintaan terhadap Al-Qur'an, memperkuat karakter Islami, serta mengasah kemampuan tilawah dengan adab dan tajwid yang benar.</p>
              {{-- <a href="service-details.html" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a> --}}
          </div>
      </div><!-- End Service Item -->


            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-item position-relative">
                <img src="{{ asset('assets/img/lomba2.png') }}" alt="Lomba 1" class="img-fluid rounded-4" style="width: 100%; height: auto; object-fit: cover;">
                 <h3>Da'i Muda</h3>
                <p>Da'i muda adalah ajang untuk mengasah bakat ceramah generasi muda, seperti pelajar dan mahasiswa. Tujuannya mendorong pemuda aktif berdakwah dengan cara yang menarik dan relevan. Peserta menyampaikan ceramah singkat bertema keislaman dan dinilai dari materi, retorika, penampilan, penguasaan panggung, dan kreativitas. Kegiatan ini melatih public speaking, memperluas wawasan agama, membentuk karakter Islami, dan meningkatkan kepercayaan diri.</p>
                {{-- <a href="service-details.html" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a> --}}
              </div>
            </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <img src="{{ asset('assets/img/lomba3.png') }}" alt="Lomba 1" class="img-fluid rounded-4" style="width: 100%; height: auto; object-fit: cover;">
               <h3>Olimpiade PAI</h3>
              <p>Olimpiade PAI ( Pendidikan Agama Islam ) adalah ajang perlombaan yang menguji pemahaman peserta terhadap materi Pendidikan Agama Islam, mulai dari Al-Qur’an, Akidah, Akhlak, Fikih, hingga Sejarah Kebudayaan Islam. Lomba ini tidak hanya menjadi sarana untuk mengukur sejauh mana pemahaman peserta terhadap ajaran Islam, tetapi juga sebagai bentuk dorongan untuk lebih mencintai dan mengamalkan nilai-nilai Islam dalam kehidupan sehari-hari.</p>
              {{-- <a href="service-details.html" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a> --}}
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <img src="{{ asset('assets/img/lomba4.png') }}" alt="Lomba 1" class="img-fluid rounded-4" style="width: 100%; height: auto; object-fit: cover;">
               <h3>Poster Digital</h3>
              <p>Poster Digital adalah ajang kreativitas visual yang dirancang untuk menguji kemampuan peserta dalam menyampaikan pesan melalui desain poster yang menarik dan komunikatif. Lomba ini menjadi sarana menyalurkan bakat seni digital sekaligus menyuarakan ide dan nilai positif secara visual, kreatif, dan inspiratif.</p>
              {{-- <a href="service-details.html" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a> --}}
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
             <img src="{{ asset('assets/img/lomba5.png') }}" alt="Lomba 1" class="img-fluid rounded-4" style="width: 100%; height: auto; object-fit: cover;">
              <h3>Olimpiade MIPA</h3>
              <p>Olimpiade MIPA adalah kompetisi edukatif yang menantang pelajar untuk mengasah kemampuan logika, analisis, dan pemecahan masalah di bidang Matematika dan Ilmu Pengetahuan Alam. Kegiatan ini dirancang untuk menumbuhkan semangat berprestasi, meningkatkan daya saing akademik, serta menggali potensi generasi muda dalam sains dan teknologi.</p>
              {{-- <a href="service-details.html" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a> --}}
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <img src="{{ asset('assets/img/lomba6.png') }}" alt="Lomba 1" class="img-fluid rounded-4" style="width: 100%; height: auto; object-fit: cover;">
              <h3>MHQ</h3>
              <p>MHQ (Musabaqah Hifzhil Qur’an) adalah ajang perlombaan menghafal Al-Qur’an yang dirancang untuk menguji kemampuan peserta dalam hafalan, ketepatan bacaan, dan kelancaran dalam melafalkan ayat-ayat suci Al-Qur’an. Lomba ini tidak hanya menjadi sarana untuk mengukur sejauh mana hafalan seseorang, tetapi juga sebagai bentuk motivasi dalam menjaga dan mencintai Al-Qur’an sebagai pedoman hidup.</p>
              {{-- <a href="service-details.html" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a> --}}
            </div>
          </div><!-- End Service Item -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <img src="{{ asset('assets/img/lomba7.png') }}" alt="Lomba 1" class="img-fluid rounded-4" style="width: 100%; height: auto; object-fit: cover;">
              <h3>Story Telling</h3>
              <p>Storytelling adalah ajang untuk menampilkan kemampuan bercerita secara lisan dengan cara yang ekspresif, kreatif, dan komunikatif. Peserta tidak hanya menyampaikan isi cerita, tetapi juga menghidupkannya melalui intonasi suara, mimik wajah, gerakan tubuh, serta alat bantu seperti kostum atau properti.</p>
              {{-- <a href="service-details.html" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a> --}}
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->
@include('front.registration-form')


<!-- Maps Darul Fikri Sidoarjo (Card Style) -->
<section id="maps" class="maps section py-5" style="background: #f8f9fa; font-family:'Poppins',sans-serif;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <div class="card shadow border-0">
          <div class="card-body p-0">
            <div class="p-4 pb-2">
              <h3 class="mb-3 text-center" style="color: #a40000; font-weight: bold; font-family:'Poppins',sans-serif;">Lokasi DIFEST</h3>
              <p class="text-center mb-4" style="color: #333; font-family:'Poppins',sans-serif;">Jl. Putra Bangsa RT 01 RW 01, Desa Anggaswangi, Kecamatan Sukodono, Kabupaten Sidoarjo</p>
            </div>
            <div style="width: 100%; height: 400px;">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.234073964017!2d112.6759733153347!3d-7.413909894624998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e3c8619877c3%3A0xb3bf5efcacb854ef!2sPPTQ%20MAIT%20Darul%20Fikri%20Sidoarjo!5e0!3m2!1sid!2sid!4v1720950000000!5m2!1sid!2sid"
                width="100%" height="100%" style="border:0; border-radius: 0 0 8px 8px;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
      
  </div>
</section>
    {{-- <!-- Clients Section -->
    <section id="clients" class="clients section">
 <center><h3>Supported By :</h3> </center>
      <div class="container">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>

    </section><!-- /Clients Section --> --}}

    {{-- <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 align-items-center">

          <div class="col-lg-5">
            <img src="assets/img/stats-img.svg" alt="" class="img-fluid">
          </div>

          <div class="col-lg-7">

            <div class="row gy-4">

              <div class="col-lg-6">
                <div class="stats-item d-flex">
                  <i class="bi bi-emoji-smile flex-shrink-0"></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Happy Clients</strong> <span>consequuntur quae</span></p>
                  </div>
                </div>
              </div><!-- End Stats Item -->

              <div class="col-lg-6">
                <div class="stats-item d-flex">
                  <i class="bi bi-journal-richtext flex-shrink-0"></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Projects</strong> <span>adipisci atque cum quia aut</span></p>
                  </div>
                </div>
              </div><!-- End Stats Item -->

              <div class="col-lg-6">
                <div class="stats-item d-flex">
                  <i class="bi bi-headset flex-shrink-0"></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Hours Of Support</strong> <span>aut commodi quaerat</span></p>
                  </div>
                </div>
              </div><!-- End Stats Item -->

              <div class="col-lg-6">
                <div class="stats-item d-flex">
                  <i class="bi bi-people flex-shrink-0"></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Hard Workers</strong> <span>rerum asperiores dolor</span></p>
                  </div>
                </div>
              </div><!-- End Stats Item -->

            </div>

          </div>

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

      <div class="container">
        <img src="assets/img/cta-bg.jpg" alt="">
        <div class="content row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox play-btn"></a>
              <h3>Call To Action</h3>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a class="cta-btn" href="#">Call To Action</a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Call To Action Section -->

    

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 10
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>

      <div class="container section-title d-flex align-items-center justify-content-between" data-aos="fade-up">
        <div>
          <h2 class="mb-0">About DIFEST</h2>
        </div>
        <button type="button" class="btn btn-danger d-flex align-items-center gap-2" id="aboutVideoBtn" style="font-size:1.1rem;">
          <i class="bi bi-play-circle" style="font-size:2rem;"></i>
          <span class="d-none d-md-inline">Tonton Video</span>
        </button>
      </div><!-- End Section Title -->

      <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
        {{-- <img src="assets/img/about.jpg" class="img-fluid rounded-4" alt="About Us Image"> --}}
     

  </main>

  <footer id="footer" class="footer accent-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="#hero" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/difest.png') }}" alt="DIFEST Logo" style="height: 70px; width: auto;" class="footer-difest-logo">
          </a>
          
          <div class="social-links d-flex mt-4">
            <a href="https://www.tiktok.com/@difest"><i class="bi bi-tiktok"></i></a>
            <a href="https://www.instagram.com/official.difest/"><i class="bi bi-instagram"></i></a>
          </div>
        </div>

        {{-- <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#hero">Home</a></li>
            <li><a href="#about">About us</a></li>
            <li><a href="#services">Lomba</a></li>
            <li><a href="#registration">Daftar</a></li>
          </ul>
        </div> --}}

        {{-- <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div> --}}

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <div class="row">
            <div class="col-md-6">
              <h4>Pondok Putra</h4>
              <p>Jl. Putra Bangsa RT 01/01<br>
              Ds. Anggaswangi Kec.<br>
              Sukodono Kab. Sidoarjo</p>
            </div>
            <div class="col-md-6">
              <h4>Pondok Putri</h4>
              <p>Ds. Sarirogo RT14/03,<br>
              Kec. Sidoarjo, Kab.<br>
              Sidoarjo</p>
            </div>
          </div>
          <p class="mt-3"><strong>Email:</strong> <span>difest8th@gmail.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      {{-- <p>© <span>Copyright</span> <strong class="px-1 sitename">sobatweb</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a>
      </div> --}}
    </div>

  </footer>

  {{-- <!-- Modal Poster -->
  <div class="modal fade" id="posterModal" tabindex="-1" aria-labelledby="posterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content" style="background: transparent; border: none; box-shadow: none;">
        <div class="modal-body p-0 position-relative">
          <button type="button" class="btn-close position-absolute top-0 end-0 m-3 poster-modal-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <img src="assets/img/poster.png" alt="Poster DIFEST" class="img-fluid w-100 rounded-3" style="max-height:80vh; object-fit:contain;" />
        </div>
      </div>
    </div>
  </div> --}}

  <!-- Modal YouTube Video -->
<div class="modal fade" id="aboutVideoModal" tabindex="-1" aria-labelledby="aboutVideoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content" style="background: #000; border-radius: 1rem;">
      <div class="modal-header border-0" style="background: transparent;">
        <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0 d-flex justify-content-center align-items-center" style="min-height:400px;">
        <div class="ratio ratio-16x9 w-100">
          <iframe id="aboutVideoIframe" src="" title="YouTube video" allowfullscreen allow="autoplay; encrypted-media"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <!-- Hapus duplikasi Bootstrap agar tidak bentrok -->
  <!-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
<script>
// document.addEventListener('DOMContentLoaded', function() {
//       function showPosterModal() {
//         var posterModalEl = document.getElementById('posterModal');
//         if (!posterModalEl) {
//           console.error('Modal element not found');
//           return;
//         }
//         if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
//           var posterModal = new bootstrap.Modal(posterModalEl);
//           posterModal.show();
//         } else {
//           // Try again after a short delay if Bootstrap is not ready
//           setTimeout(showPosterModal, 200);
//         }
//       }
//       showPosterModal();
//     });
    </script>

 


  <style>
    #about {
    background-image: url('assets/img/bg-about.png'); /* Ganti dengan path yang sesuai */
    background-size: cover; /* Menutupi seluruh area */
    background-position: center; /* Pusatkan gambar */
    background-repeat: no-repeat; /* Jangan ulang gambar */
    padding: 60px 0; /* Atur padding sesuai kebutuhan */
    color: white; /* Atur warna teks jika diperlukan */
}

/* .registration-form *, #maps, .maps *, .maps .card-title, .maps p {
    font-family: 'Migra', serif !important;
} */
.registration-form label,
.registration-form input,
.registration-form textarea,
.registration-form button {
    font-family: 'Montserrat', sans-serif !important;
}
/* .registration-form-title {
    font-family: 'Migra', serif !important;
    font-size: 2rem;
    font-weight: bold;
    color: #a40000;
    margin-bottom: 1rem;
    text-align: center;
} */

#registration {
    background: linear-gradient(180deg, #fff 0%, #d3d3d3 100%);
}

#maps {
    background: linear-gradient(180deg, #d3d3d3 0%, #fff 100%) !important;
}
.testimonials .testimonial-item {
  background-color: var(--surface-color);
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  box-sizing: border-box; /* Ubah menjadi border-box untuk menghitung padding dan border dalam lebar */
  padding: 30px;
  margin: 30px 0; /* Hapus margin samping untuk membuatnya lebih lebar */
  position: relative;
  height: auto; /* Ubah menjadi auto untuk menyesuaikan tinggi konten */
  width: 100%; /* Atur lebar menjadi 100% untuk mengisi kontainer */
  max-width: 1200px; /* Atur lebar maksimum sesuai kebutuhan */
  margin-left: auto; /* Pusatkan box */
  margin-right: auto; /* Pusatkan box */
}

.carousel img {
    width: 100%; /* Pastikan gambar mengisi lebar kontainer */
    height: auto; /* Pertahankan rasio aspek */
}
.service-item {
    position: relative; /* Pastikan posisi relatif untuk elemen anak */
    overflow: hidden; /* Sembunyikan bagian gambar yang melampaui batas card */
}
.service-item img {
    width: 100%; /* Pastikan gambar mengisi lebar card */
    height: 100%; /* Pastikan gambar mengisi tinggi card */
    object-fit: cover; /* Memastikan gambar tidak terdistorsi */
}
#services {
    background-image: url('assets/img/bg-lomba.png'); /* Ganti dengan path yang sesuai */
    background-size: contain; /* Menutupi seluruh area */
    background-position: center; /* Pusatkan gambar */
    background-repeat: no-repeat; /* Jangan ulang gambar */
    padding: 10px 0; /* Atur padding sesuai kebutuhan */
}

@media (max-width: 767.98px) {
  #services {
    background-image: url('assets/img/bg-lomba-mobile.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }
}


    .animate-fade-in-scale {
      animation: fadeInScale 1.5s ease forwards;
    }
  </a>

  

  
    

</body>



<script>
  document.addEventListener('DOMContentLoaded', function() {
    var ytBtn = document.getElementById('aboutVideoBtn');
    var ytModal = document.getElementById('aboutVideoModal');
    var ytIframe = document.getElementById('aboutVideoIframe');
    var ytUrl = 'https://www.youtube.com/embed/Y7f98aduVJ8?autoplay=1'; // Ganti dengan link video DIFEST
    if (ytBtn && ytModal && ytIframe) {
      ytBtn.addEventListener('click', function() {
        ytIframe.src = ytUrl;
        var modal = new bootstrap.Modal(ytModal);
        modal.show();
      });
      ytModal.addEventListener('hidden.bs.modal', function() {
        ytIframe.src = '';
      });
    }
  });
</script>



</html>