<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sri Intan Perkasa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/front/img/logo_only.png'); ?>" rel="icon" />
  <link href="<?= base_url('assets/front/img/logo_only.png'); ?>" rel="apple-touch-icon" />


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/front/vendor/aos/aos.css'); ?>" rel="stylesheet" />
  <link href="<?= base_url('assets/front/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" />
  <link href="<?= base_url('assets/front/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet" />
  <link href="<?= base_url('assets/front/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet" />
  <link href="<?= base_url('assets/front/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet" />
  <link href="<?= base_url('assets/front/vendor/remixicon/remixicon.css'); ?>" rel="stylesheet" />
  <link href="<?= base_url('assets/front/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.5.3/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/front/css/style.css'); ?>" rel="stylesheet" />
</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="<?= base_url()?>" class="logo me-auto"><img src="<?= base_url('assets/front/img/logo_only.png'); ?>" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#client">Client</a></li>
          <li><a class="nav-link scrollto" href="#product">Product</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#Gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="<?= base_url('login');?>">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Better Responbility <br>Better Service  <br> Better Partner</h1>
          <h3>Kami perusahaan PT. Sri Intan Perkasa berdiri sejak tahun 1994, menjadi penyedia alat kesehatan yang terpercaya dalam memberikan pelayanan, kenyamanan, kemudahan dan kualitas produk kepada seluruh klien kami.&nbsp;</h3>
          <h3>Mari menjadi partner kami dan kami siap melayani anda dengan sepenuh hati.</h3>
          
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Read more</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="<?= base_url('assets/front/img/logo_fix.png');?>" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Connection Section ======= -->
    <section style="padding: 1.5rem;" >
      <div>
        <div class="swiffy-slider slider-item-show5 slider-nav-outside slider-nav-sm slider-nav-dark slider-nav-caret slider-nav-visible slider-nav-page slider-item-snapstart slider-nav-autoplay slider-nav-autopause slider-item-ratio slider-item-ratio-32x9 slider-item-ratio-contain bg-white  " data-slider-nav-autoplay-interval="3000">
          <ul class="slider-container">
              <li><img src="<?= base_url('assets/front/img/clients/client1.png');?>" class="img-fluid"></li>
              <li><img src="<?= base_url('assets/front/img/clients/client2.png');?>" class="img-fluid"></li>
              <li><img src="<?= base_url('assets/front/img/clients/client3.png');?>" class="img-fluid"></li>
              <li><img src="<?= base_url('assets/front/img/clients/client4.png');?>" class="img-fluid"></li>
              <li><img src="<?= base_url('assets/front/img/clients/client5.png');?>" class="img-fluid"></li>
              <li><img src="<?= base_url('assets/front/img/clients/client6.png');?>" class="img-fluid"></li>
              <li><img src="<?= base_url('assets/front/img/clients/client7.png');?>" class="img-fluid"></li>
              <li><img src="<?= base_url('assets/front/img/clients/client8.png');?>" class="img-fluid"></li>
              <li><img src="<?= base_url('assets/front/img/clients/client9.png');?>" class="img-fluid"></li>
              <li><img src="<?= base_url('assets/front/img/clients/client10.png');?>" class="img-fluid"></li>
          </ul>
         </div>  
      </div>
      
    </section><!-- End Connection Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>About Us</h2>
          <h3>Kami perusahaan PT. Sri Intan Perkasa berdiri sejak tahun 1994, di Jakarta, Indonesia. Kami telah menjadi raksasa sebagai penyedia alat kesehatan yang sangat terpecaya dalam memberikan pelayanan, kenyamanan, kemudahan dan kualitas produk terbaik kepada seluruh klien kami.</h3>
        </div>
        <div class="row content">
          
            <p class="d-flex justify-content-center">
            PT. Sri Intan Perkasa mempunyai beberapa produk yaitu :
            </p>
            <div class="row content">
              <div class="col-md-3">
                <ul>
                  <li><i class="ri-check-double-line"></i> Alat Radiologi Mobile</li>
                  <li><i class="ri-check-double-line"></i> Alat Radiologi Stationery</li>
                  <li><i class="ri-check-double-line"></i> Dental X-Ray</li>
                  <li><i class="ri-check-double-line"></i> IPAL</li>
                  <li><i class="ri-check-double-line"></i> Incinerator</li>
                                    
                </lu>
              </div>
              <div class="col-md-3">
                <ul>
                  <li><i class="ri-check-double-line"></i> Hospital Furniture</li>
                  <li><i class="ri-check-double-line"></i> CT-Scan</li>
                  <li><i class="ri-check-double-line"></i> Oxygen</li>
                  <li><i class="ri-check-double-line"></i> Ventilator X-Ray</li>
                  <li><i class="ri-check-double-line"></i> CR</li>
                </lu>
              </div>
              <div class="col-md-3">
                <ul>
                  <li><i class="ri-check-double-line"></i> Uji kesesuaian</li>
                  <li><i class="ri-check-double-line"></i> Karoseri Bus/Ambulance</li>
                  <li><i class="ri-check-double-line"></i> Kalibrasi</li>
                  <li><i class="ri-check-double-line"></i> Cairan X-Ray</li>
                  <li><i class="ri-check-double-line"></i> Accessories Timbal</li>
                </lu>
              </div>
              <div class="col-md-3">
                <ul>
                  <li><i class="ri-check-double-line"></i> Laboratorium</li>
                  <li><i class="ri-check-double-line"></i> DR Film</li>
                  <li><i class="ri-check-double-line"></i> Incubator</li> 
                  <li><i class="ri-check-double-line"></i> Dan Sebagainya</li>
                </lu>
              </div>
            </div>

          
            <div class="row content">
            <p class="d-flex justify-content-center">
            Kami telah terverifikasi oleh badan nasional terkait mutu perusahaan seperti :
            </p>
              <div class="d-flex justify-content-center" >
                <ul >
                  <li><i class="ri-check-double-line"></i> ISO 9001</li>
                  <li><i class="ri-check-double-line"></i> ISO 14001</li>
                  <li><i class="ri-check-double-line"></i> ISO 45001</li>
                  <li><i class="ri-check-double-line"></i> KAN ISO 17025</li>
                </lu>
              </div>
            </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Visi Misi Section ======= -->
    <section id="visi-misi"  class="team ">
      <div class="container-fluid" data-aos="fade-up">
        <div class="section-title">
          <h2>Visi Misi</h2>
        </div>
        <div class="row p-5">
          <div class="col-lg-6">
            <div class="member d-flex align-items-start just" data-aos="zoom-in" data-aos-delay="100">
              <div><h2>01</h2></div>
              <div class="member-info">
                <div class="rata-kiri-kanan">
                  <h5>Menetapkan, mengimplementasikan dan mengesahkan mutu yang mencakup seluruh persyaratan dari ISO 9001, ISO 14001, ISO 45001 dan KAN ISO 17025.</h5> 
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <div><h2>02</h4></div>
              <div class="member-info">
                <div class="rata-kiri-kanan">
                  <h5>Memberikan pelayanan, kenyamanan dan kecepatan dalam pelayanan dan kualitas produk terbaik untuk seluruh klien atau costumer PT. Sri Intan Perkasa.</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div><h2>03</h2></div>
              <div class="member-info">
                <div class="rata-kiri-kanan">
                <h5>Menjadi persuahaan yang turut ikut aktif dalam melayani masyarakat meningkatkan standaritas personil internal maupun membangun negara.</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div><h2>04</h2></div>
              <div class="member-info">
                <div class="rata-kiri-kanan">
                  <h5>Mengkomunikasikan dan mengedukasikan terhadap pentingnya untuk memenuhi persyaratan di dalam peraturan perundangan, peraturan dibidang mutu maupun persyaratan peraturan dibidang lainnya.</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div><h2>05</h2></div>
              <div class="member-info">
                <div class="rata-kiri-kanan">
                  <h5>Memastikan kesiapan dan persiapan untuk menghadapi setiap resiko dan peluang.</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div><h2>06</h2></div>
              <div class="member-info">
                <div class="rata-kiri-kanan">
                  <h5>Menjadi penyedia alat kesehatan yang tersebar dan terlengkap di Indonesia.</h5>    
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Visi Misi Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Why Us</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon" ><i class='bx bx-purchase-tag-alt'></i></div>
                <p id="why" >Menawarkan harga barang yang terjangkau</p>              
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <p id="why">Memiliki tanggung jawab yang tinggi terhadap kualitas barang.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <p id="why">Pelayanan yang tinggi terhadap customer jasa dan produk.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <p id="why">PT. Sri Intan Perkasa dilengkapi Dokumen Nasional penting seperti SIUP, TDP, NPWP, NIB, API, dan IPAK</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->
    
     <!-- ======= Client Section ======= -->
     <section id="client" class="services ">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Client</h2>
        </div>
        <div class="row p-1 d-flex justify-content-center" style="gap: 1.75rem;">

          <div class="card col-5 shadow-sm card-client-border" data-aos="zoom-in" data-aos-delay="100">
            <div class="card-body">
              PT Kimia Farma Diagnostika
            </div>
          </div>
          <div class="card col-5  shadow-sm card-client-border" data-aos="zoom-in" data-aos-delay="300">
            <div class="card-body">
              PT Tirta Medical Center
            </div>
          </div>
          <div class="card col-5  shadow-sm card-client-border"data-aos="zoom-in" data-aos-delay="200">
            <div class="card-body">
              RSUD dr Chasbullah Abdulmadjid Kota Bekasi
            </div>
          </div>
          <div class="card col-5  shadow-sm card-client-border"data-aos="zoom-in" data-aos-delay="500">
            <div class="card-body">
              Balai Kesehatan Kolinlamil Jakarta
            </div>
          </div>
          <div class="card col-5  shadow-sm card-client-border" data-aos="zoom-in" data-aos-delay="400">
            <div class="card-body">
              UPTD Puskesmas Tarogong
            </div>
          </div>
          <div class="card col-5  shadow-sm card-client-border" data-aos="zoom-in" data-aos-delay="700">
            <div class="card-body">
              RS Bunda Citra Harapan - Bekasi
            </div>
          </div>   
          <div class="card col-5  shadow-sm card-client-border" data-aos="zoom-in" data-aos-delay="600">
            <div class="card-body">
              RS Izza - Karawang
            </div>
          </div>
          <div class="card col-5  shadow-sm card-client-border" data-aos="zoom-in" data-aos-delay="900">
            <div class="card-body">
              RS Citra Sari Husada Group
            </div>
          </div>
          <div class="card col-5  shadow-sm card-client-border" data-aos="zoom-in" data-aos-delay="800">
            <div class="card-body">
              RS Bayukarta
            </div>
          </div>
          <div class="card col-5  shadow-sm card-client-border" data-aos="zoom-in" data-aos-delay="1000">
            <div class="card-body">
              RS Islam Karawang
            </div>
          </div>
        </div>
        
       
      </div>
    </section><!-- End Client Section -->

     <!-- ======= Product Section ======= -->
    <section id="product" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Product</h2>
          <p>Berikut adalah beberapa produk ungulan dari PT SRI INTAN PERKASA yang sudah terverifikasi oleh <br> Lembaga Kebijakan Pengadaan Barang Jasa Pemerintah</p>
        </div>
        <!-- PRODUK 1-->
        <div class="row d-flex justify-content-center p-2 " style="gap: 1rem;">
          <div class="card col-md-3 col-lg-2 border-0"  data-aos="zoom-in" data-aos-delay="100" style="border-radius: .75rem;">
            <img src="<?= base_url('assets/front/img/produk/PRS_500_E.jpg');?>" class="card-img-top mt-3" style="border-radius: .75rem;">
            <div class="card-body">
              <h5 class="card-title">PRS 500 E PROSLIDE</h5>
              <p class="card-text">MOBILE DIGITAL X-RAY SYSTEM</p>
              <p class="card-text">AKL : 21501027458</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-outline-primary d-flex justify-content-center">Lihat Detail</a>
            </div>
          </div>
          <!-- PRODUK 2-->
          <div class="card col-md-3 col-lg-2 border-0"  data-aos="zoom-in" data-aos-delay="100" style="border-radius: .75rem;">
            <img src="<?= base_url('assets/front/img/produk/PROSLIDE_32_SR.jpg');?>" class="card-img-top mt-3" style="border-radius: .75rem;">
            <div class="card-body">
              <h5 class="card-title">PROSLIDE 32 SR</h5>
              <p class="card-text">MOBILE DIGITAL X-RAY SYSTEM</p>
              <p class="card-text">AKL : 21501120775</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-outline-primary d-flex justify-content-center">Lihat Detail</a>
            </div>
          </div>
          <!-- PRODUK 3-->
          <div class="card col-md-3 col-lg-2 border-0"  data-aos="zoom-in" data-aos-delay="100" style="border-radius: .75rem;">
            <img src="<?= base_url('assets/front/img/produk/EXM40.jpg');?>" class="card-img-top mt-3" style="border-radius: .75rem;">
            <div class="card-body">
              <h5 class="card-title">EXM 40 - DDRIEST MEDCARE</h5>
              <p class="card-text">MOBILE DIGITAL X-RAY SYSTEM</p>
              <p class="card-text">AKL : 21501024999</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-outline-primary d-flex justify-content-center">Lihat Detail</a>
            </div>
          </div>
          <!-- PRODUK 4-->
          <div class="card col-md-3 col-lg-2 border-0"  data-aos="zoom-in" data-aos-delay="100" style="border-radius: .75rem;">
            <img src="<?= base_url('assets/front/img/produk/SMART_3D.jpg');?>" class="card-img-top mt-3" style="border-radius: .75rem;">
            <div class="card-body">
              <h5 class="card-title">SMART 3D</h5>
              <p class="card-text">MOBILE DIGITAL X-RAY SYSTEM</p>
              <p class="card-text">AKL : 20601220003</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-outline-primary d-flex justify-content-center">Lihat Detail</a>
            </div>
          </div>
          <!-- PRODUK 5-->
          <div class="card col-md-3 col-lg-2 border-0"  data-aos="zoom-in" data-aos-delay="100" style="border-radius: .75rem;">
            <img src="<?= base_url('assets/front/img/produk/PROSLIDE_32B.jpg');?>" class="card-img-top mt-3" style="border-radius: .75rem;">
            <div class="card-body">
              <h5 class="card-title">PROSLIDE 32B</h5>
              <p class="card-text">MOBILE DIGITAL X-RAY SYSTEM</p>
              <p class="card-text">AKL : 21501121865</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-outline-primary d-flex justify-content-center">Lihat Detail</a>
            </div>
          </div>
          <!-- PRODUK 6-->
          <div class="card col-md-3 col-lg-2 border-0"  data-aos="zoom-in" data-aos-delay="100" style="border-radius: .75rem;">
            <img src="<?= base_url('assets/front/img/produk/MARS_1717.jpg');?>" class="card-img-top mt-3" style="border-radius: .75rem;">
            <div class="card-body">
              <h5 class="card-title">MARS 1717</h5>
              <p class="card-text">MOBILE DIGITAL X-RAY SYSTEM</p>
              <p class="card-text">AKL : 21501024999</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-outline-primary d-flex justify-content-center">Lihat Detail</a>
            </div>
          </div>
          <!-- PRODUK 7-->
          <div class="card col-md-3 col-lg-2 border-0"  data-aos="zoom-in" data-aos-delay="100" style="border-radius: .75rem;">
            <img src="<?= base_url('assets/front/img/produk/MARS_1417.jpg');?>" class="card-img-top mt-3" style="border-radius: .75rem;">
            <div class="card-body">
              <h5 class="card-title">MARS_1417</h5>
              <p class="card-text">MOBILE DIGITAL X-RAY SYSTEM</p>
              <p class="card-text">AKL : 21501024999</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-outline-primary d-flex justify-content-center">Lihat Detail</a>
            </div>
          </div>
          <!-- PRODUK 8-->
          <div class="card col-md-3 col-lg-2 border-0"  data-aos="zoom-in" data-aos-delay="100" style="border-radius: .75rem;">
            <img src="<?= base_url('assets/front/img/produk/PLX_101C.jpg');?>" class="card-img-top mt-3" style="border-radius: .75rem;">
            <div class="card-body">
              <h5 class="card-title">PLX 101C</h5>
              <p class="card-text">MOBILE DIGITAL X-RAY SYSTEM</p>
              <p class="card-text">AKL : 21501024999</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-outline-primary d-flex justify-content-center">Lihat Detail</a>
            </div>
          </div>
          <!-- PRODUK 9-->
          <div class="card col-md-3 col-lg-2 border-0"  data-aos="zoom-in" data-aos-delay="100" style="border-radius: .75rem;">
            <img src="<?= base_url('assets/front/img/produk/EST_MEDCARE.jpg');?>" class="card-img-top mt-3" style="border-radius: .75rem;">
            <div class="card-body">
              <h5 class="card-title">EST MEDCARE</h5>
              <p class="card-text">MOBILE DIGITAL X-RAY SYSTEM</p>
              <p class="card-text">AKL : 21501024999</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-outline-primary d-flex justify-content-center">Lihat Detail</a>
            </div>
          </div>
          <!-- PRODUK 10-->
          <div class="card col-md-3 col-lg-2 border-0"  data-aos="zoom-in" data-aos-delay="100" style="border-radius: .75rem;">
            <img src="<?= base_url('assets/front/img/produk/XRAY_GRIDS.jpg');?>" class="card-img-top mt-3" style="border-radius: .75rem;">
            <div class="card-body">
              <h5 class="card-title">XRAY GRIDS</h5>
              <p class="card-text">MOBILE DIGITAL X-RAY SYSTEM</p>
              <p class="card-text">AKL : 21501024999</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-outline-primary d-flex justify-content-center">Lihat Detail</a>
            </div>
          </div>
          <!-- PRODUK 11-->
          <div class="card col-md-3 col-lg-2 border-0"  data-aos="zoom-in" data-aos-delay="100" style="border-radius: .75rem;">
            <img src="<?= base_url('assets/front/img/produk/PROTECTIVE_CAP.jpg');?>" class="card-img-top mt-3" style="border-radius: .75rem;">
            <div class="card-body">
              <h5 class="card-title">PROTECTIVE CAP</h5>
              <p class="card-text">MOBILE DIGITAL X-RAY SYSTEM</p>
              <p class="card-text">AKL : 21501024999</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-outline-primary d-flex justify-content-center">Lihat Detail</a>
            </div>
          </div>
           <!-- PRODUK 12-->
          <div class="card col-md-3 col-lg-2 border-0"  data-aos="zoom-in" data-aos-delay="100" style="border-radius: .75rem;">
            <img src="<?= base_url('assets/front/img/produk/LEAD_APRON_PA_SERIES.jpg');?>" class="card-img-top mt-3" style="border-radius: .75rem;">
            <div class="card-body">
              <h5 class="card-title">LEAD APRON PA SERIES</h5>
              <p class="card-text">MOBILE DIGITAL X-RAY SYSTEM</p>
              <p class="card-text">AKL : 21501024999</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-outline-primary d-flex justify-content-center">Lihat Detail</a>
            </div>
          </div>
           <!-- PRODUK 13-->
          <div class="card col-md-3 col-lg-2 border-0"  data-aos="zoom-in" data-aos-delay="100" style="border-radius: .75rem;">
            <img src="<?= base_url('assets/front/img/produk/THERMOLUMINESCENT_DOSIMETER_BARC.jpg');?>" class="card-img-top mt-3" style="border-radius: .75rem;">
            <div class="card-body">
              <h5 class="card-title">THERMOLUMINESCENT DOSIMETER BARC</h5>
              <p class="card-text">MOBILE DIGITAL X-RAY SYSTEM</p>
              <p class="card-text">AKL : 21501024999</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-outline-primary d-flex justify-content-center">Lihat Detail</a>
            </div>
          </div>
           <!-- PRODUK 14-->
          <div class="card col-md-3 col-lg-2 border-0"  data-aos="zoom-in" data-aos-delay="100" style="border-radius: .75rem;">
            <img src="<?= base_url('assets/front/img/produk/XRAY_PROTECTIVE_GLASSES.jpg');?>" class="card-img-top mt-3" style="border-radius: .75rem;">
            <div class="card-body">
              <h5 class="card-title">XRAY PROTECTIVE GLASSES</h5>
              <p class="card-text">MOBILE DIGITAL X-RAY SYSTEM</p>
              <p class="card-text">AKL : 21501024999</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-outline-primary d-flex justify-content-center">Lihat Detail</a>
            </div>
          </div>

      
        </div>
      </div>
    </section><!-- End Product Section -->

    <section id="team" class="team ">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Team Services</h2>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="<?= base_url('assets/front/img/team/team-1.jpg');?>" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Uji Kesesuaian</h4>
                <span>Departement</span>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="<?= base_url('assets/front/img/team/team-2.jpg');?>" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Kalibrasi</h4>
                <span>Departement</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="<?= base_url('assets/front/img/team/team-3.jpg');?>" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Teknisi</h4>
                <span>Departement</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="<?= base_url('assets/front/img/team/team-4.jpg');?>" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Marketing</h4>
                <span>Departement</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>
           

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="Gallery" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-uji">Uji Kesesuaian</li>
          <li data-filter=".filter-futsal">Futsal</li>
          <li data-filter=".filter-bukber">bukber</li>
          <li data-filter=".filter-team">team</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-uji">
            <div class="portfolio-img"><img src="<?= base_url('assets/front/img/gallery/ujikesesuaian/Ujikesesuaian_1.jpg');?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Uji Kesesuaian 1</h4>
              <p>Mengecek</p>
              <a href="<?= base_url('assets/front/img/gallery/ujikesesuaian/Ujikesesuaian_1.jpg');?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-uji">
            <div class="portfolio-img"><img src="<?= base_url('assets/front/img/gallery/ujikesesuaian/Ujikesesuaian_2.jpg');?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Uji Kesesuaian 2</h4>
              <p>Mengecek</p>
              <a href="<?= base_url('assets/front/img/gallery/ujikesesuaian/Ujikesesuaian_2.jpg');?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-uji">
            <div class="portfolio-img"><img src="<?= base_url('assets/front/img/gallery/ujikesesuaian/Ujikesesuaian_3.jpg');?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Uji Kesesuaian 3</h4>
              <p>Mengecek</p>
              <a href="<?= base_url('assets/front/img/gallery/ujikesesuaian/Ujikesesuaian_3.jpg');?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-uji">
            <div class="portfolio-img"><img src="<?= base_url('assets/front/img/gallery/ujikesesuaian/Ujikesesuaian_4.jpg');?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Uji Kesesuaian 4</h4>
              <p>Mengecek</p>
              <a href="<?= base_url('assets/front/img/gallery/ujikesesuaian/Ujikesesuaian_4.jpg');?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-uji">
            <div class="portfolio-img"><img src="<?= base_url('assets/front/img/gallery/ujikesesuaian/Ujikesesuaian_5.jpg');?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Uji Kesesuaian 5</h4>
              <p>Mengecek</p>
              <a href="<?= base_url('assets/front/img/gallery/ujikesesuaian/Ujikesesuaian_5.jpg');?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-futsal">
            <div class="portfolio-img"><img src="<?= base_url('assets/front/img/gallery/futsal/futsal_1.jpg');?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Futsal 1</h4>
              <p>Olahraga</p>
              <a href="<?= base_url('assets/front/img/gallery/futsal/futsal_1.jpg');?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-futsal">
            <div class="portfolio-img"><img src="<?= base_url('assets/front/img/gallery/futsal/futsal_2.jpg');?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Futsal 2</h4>
              <p>Olahraga</p>
              <a href="<?= base_url('assets/front/img/gallery/futsal/futsal_2.jpg');?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-futsal">
            <div class="portfolio-img"><img src="<?= base_url('assets/front/img/gallery/futsal/futsal_3.jpg');?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Futsal 3</h4>
              <p>Olahraga</p>
              <a href="<?= base_url('assets/front/img/gallery/futsal/futsal_3.jpg');?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-futsal">
            <div class="portfolio-img"><img src="<?= base_url('assets/front/img/gallery/futsal/futsal_4.jpg');?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Futsal 4</h4>
              <p>Olahraga</p>
              <a href="<?= base_url('assets/front/img/gallery/futsal/futsal_4.jpg');?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-futsal">
            <div class="portfolio-img"><img src="<?= base_url('assets/front/img/gallery/futsal/futsal_5.jpg');?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Futsal 5</h4>
              <p>Olahraga</p>
              <a href="<?= base_url('assets/front/img/gallery/futsal/futsal_5.jpg');?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bukber">
            <div class="portfolio-img"><img src="<?= base_url('assets/front/img/gallery/bukber/bukber_1.jpg');?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Bukber 1</h4>
              <p>Kegiatan Sosial</p>
              <a href="<?= base_url('assets/front/img/gallery/bukber/bukber_1.jpg');?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bukber">
            <div class="portfolio-img"><img src="<?= base_url('assets/front/img/gallery/bukber/bukber_2.jpg');?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Bukber 2</h4>
              <p>Kegiatan Sosial</p>
              <a href="<?= base_url('assets/front/img/gallery/bukber/bukber_2.jpg');?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bukber">
            <div class="portfolio-img"><img src="<?= base_url('assets/front/img/gallery/bukber/bukber_3.jpg');?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Bukber 3</h4>
              <p>Kegiatan Sosial</p>
              <a href="<?= base_url('assets/front/img/gallery/bukber/bukber_3.jpg');?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bukber">
            <div class="portfolio-img"><img src="<?= base_url('assets/front/img/gallery/bukber/bukber_4.jpg');?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Bukber 4</h4>
              <p>Kegiatan Sosial</p>
              <a href="<?= base_url('assets/front/img/gallery/bukber/bukber_4.jpg');?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bukber">
            <div class="portfolio-img"><img src="<?= base_url('assets/front/img/gallery/bukber/bukber_5.jpg');?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Bukber 5</h4>
              <p>Kegiatan Sosial</p>
              <a href="<?= base_url('assets/front/img/gallery/bukber/bukber_5.jpg');?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-team">
            <div class="portfolio-img"><img src="<?= base_url('assets/front/img/gallery/team/team_1.jpg');?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Team 1</h4>
              <p>Kegiatan Sosial</p>
              <a href="<?= base_url('assets/front/img/gallery/team/team_1.jpg');?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-team">
            <div class="portfolio-img"><img src="<?= base_url('assets/front/img/gallery/team/team_2.jpg');?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Team 2</h4>
              <p>Kegiatan Sosial</p>
              <a href="<?= base_url('assets/front/img/gallery/team/team_2.jpg');?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-team">
            <div class="portfolio-img"><img src="<?= base_url('assets/front/img/gallery/team/team_3.jpg');?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Team 3</h4>
              <p>Kegiatan Sosial</p>
              <a href="<?= base_url('assets/front/img/gallery/team/team_3.jpg');?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-team">
            <div class="portfolio-img"><img src="<?= base_url('assets/front/img/gallery/team/team_4.jpg');?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Team 4</h4>
              <p>Kegiatan Sosial</p>
              <a href="<?= base_url('assets/front/img/gallery/team/team_4.jpg');?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-team">
            <div class="portfolio-img"><img src="<?= base_url('assets/front/img/gallery/team/team_5.jpg');?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Team 5</h4>
              <p>Kegiatan Sosial</p>
              <a href="<?= base_url('assets/front/img/gallery/team/team_5.jpg');?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          

        </div>
      </div>
    </section><!-- End Gallery Section -->
    
    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Ruko Grand Boulevard Blok U6/12 - Harapan Indah - Bekasi Barat, Medan Satria 17131</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>marketingsip@sriintanperkasa.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>(021) 887 3435 / (021) 887 3691</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.832002238298!2d106.975554!3d-6.16984!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdda6fb956e329d0f!2sX-Ray%20Alkes%20Ukes%20%7C%20Alat%20Kesehatan%20Radiologi%20-%20Uji%20Kesesuaian%20dan%20Kalibrasi%20%40%20PT.%20SRI%20INTAN%20PERKASA!5e0!3m2!1sen!2sid!4v1649660360337!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
<!-- 
    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Subscribe to our newsletter to get product update perviews </p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div> -->

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <p>
              First Office : Ruko Grand Cemara <br>
              Blok U6/12 - Harapan Indah - Bekasi Barat<br><br>
              <strong>Phone:</strong> (021) 887 3435 / (021) 887 3691<br>
              <strong>Email:</strong> marketingsip@sriintanperkasa.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <p>
              Second Office : Ruko Harapan Indah <br>
              Blok EN/7 & 8 - Harapan Indah - Bekasi Barat<br><br>
              <strong>Phone:</strong> (021) 8898 4397<br>
              <strong>Email:</strong> trading.sriintanperkasa@gmail.com<br>
            </p>
            <!-- <h4>Our Services</h4> -->
            <!-- <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul> -->
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#client">Client</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#product">Product</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#team">Team</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Kunjungi sosial media kami untuk lebih lengkap !</p>
            <div class="social-links mt-3">
              <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
              <a href="https://id-id.facebook.com/sri.perkasa" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/sriintanperkasa" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UCK2K1Ls98_a95UtdMcCYnhA" class="youtube"><i class="bx bxl-youtube"></i></a>
              <a href="#" class="tiktok"><i class="bx bxl-tiktok"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>PT.Sri Intan Perkasa</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/front/vendor/aos/aos.js'); ?>"></script>
  <script src="<?= base_url('assets/front/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?= base_url('assets/front/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
  <script src="<?= base_url('assets/front/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
  <script src="<?= base_url('assets/front/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
  <script src="<?= base_url('assets/front/vendor/waypoints/noframework.waypoints.js'); ?>"></script>
  <script src="<?= base_url('assets/front/vendor/php-email-form/validate.js'); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/front/js/main.js'); ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.5.3/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>

</body>

</html>