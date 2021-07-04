<!DOCTYPE html>
<html lang="en">

<head>

  <style type="text/css">
    .upper {
      text-transform: uppercase;
    }

    .lower {
      text-transform: lowercase;
      text-align: justify;
    }

    .cap {
      text-transform: capitalize;
    }

    .small {
      font-variant: small-caps;
    }

    .tekswarna {
      color: blue;
      text-align: justify;
    }

    .p {
      text-align: justify;
    }
  </style>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GoSurvey</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>assets/user/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>assets/user/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/user/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/user/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/user/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/user/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/user/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/admin/assets/images/ful.png" />

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>assets/user/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.1.1
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a class="logo d-flex align-items-center" href="<?= base_url('Welcome'); ?>">
        <img src="<?php echo base_url(); ?>assets/user/assets/img/logo.png" alt="">
        <span>GoSurvey</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a href="<?= base_url('Login/Auth'); ?>">Buat Survey</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#team">Tim</a></li>

          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          <li><a class="getstarted scrollto" href="<?= base_url('Login/Auth'); ?>">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up"> Selamat Datang di GoSurvey.com </h1>
          <h2 data-aos="fade-up" data-aos-delay="400"> Website Survey Nomor 1 Di Indonesia </h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center" href="<?= base_url('login/auth/registration'); ?>">
                <span>Daftar</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?php echo base_url(); ?>assets/user/assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about" style="
    padding-bottom: 5px;">
      <div class="container" data-aos="fade-up">
        <div class="row gx-0">
          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h2 class="lower">Siapa Kita (?)</h2>
              <p class="tekswarna">Survei adalah pemeriksaan atau penelitian secara komprehensif. Survei yang dilakukan dalam melakukan penelitian itu biasa dilakukan dengan menyebarkan kuesioner atau wawancara, dengan tujuan untuk mengetahui: siapa mereka, apa yang mereka pikir, rasakan, atau kecenderungan suatu tindakan.</p>
              <p class="p">GoSurvey merupakan platform yang membantu anda untuk mendapatkan respon dari pengguna (user). Kamu juga dapat menambah tahap dengan bergabung sebagai responden dan tahapan dari survey apa yang kamu isi.</p>
            </div>
          </div>
          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="<?php echo base_url(); ?>assets/user/assets/img/about.jpg" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values" style="
    padding-bottom: 5px;">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <p>Tujuan GoSurvey</p>
        </header>
        <div class="row">
          <div class="col-lg-4">
            <div class="box" data-aos="fade-up" data-aos-delay="200">
              <img src="<?php echo base_url(); ?>assets/user/assets/img/values-1.png" class="img-fluid" alt="">
              <h3>Membantu UMKM/Perusahaan</h3>
              <p class="p">GoSurvey membantu umkm/perusahaan untuk mengembangkan Usaha</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="400">
              <img src="<?php echo base_url(); ?>assets/user/assets/img/values-2.png" class="img-fluid" alt="">
              <h3>Mendapatkan Penghasilan</h3>
              <p class="p">GoSurvey membantu respondend untuk mendapatkan penghasilan dari mengisi survey</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="600">
              <img src="<?php echo base_url(); ?>assets/user/assets/img/values-3.png" class="img-fluid" alt="">
              <h3>Mendapatkan Target Marketing</h3>
              <p class="p">GoSurvey membantu anda untuk mendapatkan target Marketing dari hasil survey</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!--End Values Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features" style="
    padding-bottom: 10px;">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Features</h2>
          <p>Kenapa menggunakan GoSurvey ?</p>
        </header>

        <div class="row">

          <div class="col-lg-4">
            <img src="<?php echo base_url(); ?>assets/user/assets/img/features.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
            <div class="row align-self-center gy-4">

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Biaya Murah</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Hasil Survey Akurat</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Mudah Digunakan</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Hasil Respond Cepat</h3>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- / row -->

        <!-- Feature Tabs -->
        <div class="row feture-tabs" data-aos="fade-up">
          <div class="col-lg-6">
            <h3>Cara Menggunakan GoSurvey (Respondend)</h3>

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li>
                <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Respondend</a>
              </li>

            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active" id="tab1">
                <p>Jadilah pengguna (respondend) dan hasilkan penghasilan dari mengisi survey</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Mendaftarkan diri sebagai user Respondend</h4>
                </div>

                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Login ke akun yang telah di verifikasi</h4>
                </div>

                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Anda dapat mengisi survey yang tersedia (Active Survey)</h4>
                </div>

                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Anda akan mendapatkan pembayaran sesuai dengan jumlah survey yang telah di isi</h4>
                </div>

              </div>

              <!-- End Tab 1 Content -->



            </div>

          </div>

          <div class="col-lg-6">
            <img src="<?php echo base_url(); ?>assets/user/assets/img/features-2.png" class="img-fluid" alt="">
          </div>

        </div><!-- End Feature Tabs -->

        <!-- Feature Icons -->
        <div class="row feature-icons" data-aos="fade-up">
          <h3>Cara menggunakan GoSurvey (Surveyor)</h3>

          <div class="row">

            <div class="col-xl-3 text-center" data-aos="fade-right" data-aos-delay="100">
              <img src="<?php echo base_url(); ?>assets/user/assets/img/features-3.png" class="img-fluid p-4" alt="">
            </div>

            <div class="col-xl-8 d-flex content">
              <div class="row align-self-center gy-4">

                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="ri-line-chart-line"></i>
                  <div>
                    <h4>Mendaftarkan diri sebagai surveyor</h4>

                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="ri-stack-line"></i>
                  <div>
                    <h4>Login ke akun yang telah di verifikasi</h4>

                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="ri-brush-4-line"></i>
                  <div>
                    <h4>Anda dapat menambahkan beberapa survey</h4>

                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="ri-magic-line"></i>
                  <div>
                    <h4>Lakukan pembayaran sesuai dengan paket survey</h4>

                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="ri-command-line"></i>
                  <div>
                    <h4>Survey Aktif</h4>

                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                  <i class="ri-radar-line"></i>
                  <div>
                    <h4>Anda akan mendapatkan hasil Survey setelah selesai</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Feature Icons -->
      </div>
    </section><!-- End Features Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq" style="
    padding-top: 20px;">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </header>
        <div class="row">
          <div class="col-lg-6">
            <!-- F.A.Q List 1-->
            <div class="accordion accordion-flush" id="faqlist1">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    Apa itu GoSurvey?
                  </button>
                </h2>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    GoSurvey merupakan platform yang membantu anda untuk mendapatkan respon dari pengguna (user). Kamu juga dapat menambah penghasilan dengan bergabung sebagai responden dan dapatkan penghasilan dari survey apa yang kamu isi.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    Bagaimana cara menggunakan GoSurvey?
                  </button>
                </h2>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Anda dapat membacanya di bagian atas sebagai respondend dan juga surveyor.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    Bagaimana saya dibayar?
                  </button>
                </h2>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    kamu akan di bayar sesuai dengan jumlah survey yang kamu isi.
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-6">

            <!-- F.A.Q List 2-->
            <div class="accordion accordion-flush" id="faqlist2">

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                    Berapa lama waktu yang di perlukan untuk selesai?
                  </button>
                </h2>
                <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    kamu dapat memilih lama waktu survey aktif.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                    Bagaimana cara melakukan pembayaran?
                  </button>
                </h2>
                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    kamu dapat cek pada laman pembayaran
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                    Saya sudah Top Up namun dana belum masuk ke akun?
                  </button>
                </h2>
                <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    kamu dapat menghubungi tim CS melalui fitur Kontak.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials" style="
    padding-top: 10px;">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Testimonials</h2>
          <p>Apa yang mereka katakan tentang GoSurvey</p>
        </header>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Saya dari perusahaan google, setelah menggunakan GoSurvey saya lebih mudah mendapatkan data dan mengelola data tersebut untuk mendapatkan strategi pemasaran dari hasil survey yang akurat.
                </p>
                <div class="profile mt-auto">
                  <img src="<?php echo base_url(); ?>assets/user/assets/img/testimonials/andra.jpg" class="testimonial-img" alt="">
                  <h3>Andra H Al-Hafiz Hsb</h3>
                  <h4>Mahasiswa</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Saya sebagai mahasiswa tingkat akhir, sangat beruntung menggunakan GoSurvey karena dapat mempermudah penelitian dan analisis data untuk menyusun skripsi.
                </p>
                <div class="profile mt-auto">
                  <img src="<?php echo base_url(); ?>assets/user/assets/img/testimonials/ilmi.jpg" class="testimonial-img" alt="">
                  <h3>Atikah Ilmi Mardatillah</h3>
                  <h4>Mahasiswi</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Saya sebagai mahasiswa menuju tingkat akhir, sangat beruntung dapat menggunakan website ini sebagai media untuk mendapatkan data dalam penelitian saya.                
                </p>
                <div class="profile mt-auto">
                  <img src="<?php echo base_url(); ?>assets/user/assets/img/testimonials/fikri.jpg" class="testimonial-img" alt="">
                  <h3>M. Fikri Ramadhan</h3>
                  <h4>Mahasiswa</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                Saya sebagai mahasiswa, sangat beruntung dengan adanya website ini yang sangat berguna untuk saya yang sedang sibuk penelitian .
                </p>
                <div class="profile mt-auto">
                  <img src="<?php echo base_url(); ?>assets/user/assets/img/testimonials/farah.jpg" class="testimonial-img" alt="">
                  <h3>Farahdilla Annisa Putri</h3>
                  <h4>Mahasiswi</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                Saya sebagai mahasiswa Tingkat Akhir, merasa sangat terbantu dengan adanya GoSurvey untuk membuat kuisioner sebagai data untuk penelitian saya sebagai syarat untuk lulus.
              </p>
                <div class="profile mt-auto">
                  <img src="<?php echo base_url(); ?>assets/user/assets/img/testimonials/ghea.jpg" class="testimonial-img" alt="">
                  <h3>Ghea Sundari Firnandi</h3>
                  <h4>Mahasiswi</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team" style="
    padding-top: 10px;">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Tim</h2>
          <p>Tim kerja keras kami</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="<?php echo base_url(); ?>assets/user/assets/img/team/azmi.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Ahmad Nuzul Azmi</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="<?php echo base_url(); ?>assets/user/assets/img/team/azhar.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Azhar Maulana</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="<?php echo base_url(); ?>assets/user/assets/img/team/gina.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Gina Apriasiska</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="<?php echo base_url(); ?>assets/user/assets/img/team/fauzan.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>M. Fauzan Delfani</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Team Section -->


    <!-- ======= Recent Blog Posts Section ======= -->
    <!-- <section id="recent-blog-posts" class="recent-blog-posts"> -->

    <!-- <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Blog</h2>
          <p>Recent posts form our Blog</p>
        </header>

        <div class="row">

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="<?php echo base_url(); ?>assets/user/assets/img/blog/blog-1.jpg" class="img-fluid" alt=""></div>
              <span class="post-date">Tue, September 15</span>
              <h3 class="post-title">Tips membagi waktu agar pekerjaan jauh lebih teratur</h3>
              <a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="<?php echo base_url(); ?>assets/user/assets/img/blog/blog-2.jpg" class="img-fluid" alt=""></div>
              <span class="post-date">Fri, August 28</span>
              <h3 class="post-title">Beberapa hal ini wajib kamu lakukan sebelum..</h3>
              <a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="<?php echo base_url(); ?>assets/user/assets/img/blog/blog-3.jpg" class="img-fluid" alt=""></div>
              <span class="post-date">Mon, July 11</span>
              <h3 class="post-title">Tips menumbuhkan lingkungan kerja yang nyaman</h3>
              <a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div> -->
    <!--  
    </section>End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style="
    padding-top: 10px;">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Kontak</h2>
          <p>Kontak Kami</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-20">
            <div class="row gy-2">
              <div class="col-md-2">
              </div>
              <div class="col-md-2">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Alamat</h3>
                  <p>Rumbai, Pekanbaru <br>Riau, 28265</p>
                </div>
              </div>
              <div class="col-md-2">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Hubungi Kami</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
              <div class="col-md-2">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Kami</h3>
                  <p>gosurvey@gmail.com<br>infogosurvey@gmail.com</p>
                </div>
              </div>
              <div class="col-md-2">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Buka Pukul</h3>
                  <p>Senin-Jumat<br>09.00 - 17.00 WIB</p>
                </div>
              </div>
              
            </div>

          </div>

          <!-- <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Nama Anda" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Email Anda" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subjek" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Kirim Pesan</button>
                </div>

              </div>
            </form>

          </div> -->

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="<?php echo base_url(); ?>assets/user/assets/img/logo.png" alt="">
              <span>FlexStart</span>
            </a>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

        </div>
      </div>
    </div> -->
  <center>
    <div class="container">
      <div class="copyright">
        <strong><span>GoSurveyTeam</span></strong>&copy;<strong><span>2021</span></strong>
      </div>
      <br />
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->

      </div>
    </div>
    </footer><!-- End Footer -->
  </center>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>assets/user/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="<?php echo base_url(); ?>assets/user/assets/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url(); ?>assets/user/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url(); ?>assets/user/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/user/assets/vendor/purecounter/purecounter.js"></script>
  <script src="<?php echo base_url(); ?>assets/user/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/user/assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>assets/user/assets/js/main.js"></script>

</body>

</html>