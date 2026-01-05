<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cipta Mandiri</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets-guest/img/favicon.ico') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Space+Grotesk&display=swap" rel="stylesheet">

    <!-- Icon Font -->
    <link rel="stylesheet" href="{{ asset('assets-guest/lib/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-guest/lib/bootstrap-icons/font/bootstrap-icons.css') }}">

    <!-- Library CSS -->
    <link rel="stylesheet" href="{{ asset('assets-guest/lib/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-guest/lib/owlcarousel/assets/owl.carousel.min.css') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets-guest/css/bootstrap.min.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets-guest/css/style.css') }}">
</head>


<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light border-bottom border-2 border-white">

                <!-- Brand -->
                <a href="{{ url('/') }}" class="navbar-brand">
                    <h1 class="mb-0">Cipta Mandiri</h1>
                </a>

                <!-- Toggle -->
                <button class="navbar-toggler ms-auto me-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Menu -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">

                        <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                        \

                        <!-- Dropdown -->
                        

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        
                        <a href="#" class="nav-item nav-link fw-bold"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        

                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid pb-5 hero-header bg-light mb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center mb-5">
                <div class="col-lg-6">
                    <h1 class="display-1 mb-4 animated slideInRight"> <span class="text-primary">Selamat Datang</span>
                    </h1>
                    <h4 class="d-inline-block border border-2 border-white py-3 px-5 mb-0 animated slideInRight">
                        PT Graha Cipta Mandiri</h4>
                </div>
                <div class="col-lg-6">
                    <div class="owl-carousel header-carousel animated fadeIn">
                        <img class="img-fluid" src="{{ asset('assets-guest/img/hero-slider-1.jpg') }}">
                        <img class="img-fluid" src="{{ asset('assets-guest/img/hero-slider-2.jpg') }}">
                        <img class="img-fluid" src="{{ asset('assets-guest/img/hero-slider-3.jpg') }}">

                    </div>
                </div>
            </div>
            <div class="row g-5 animated fadeIn">
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 btn-square border border-2 border-white me-3">
                            <i class="fa fa-robot text-primary"></i>
                        </div>
                        <h5 class="lh-base mb-0">Pembangunan perumahan</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 btn-square border border-2 border-white me-3">
                            <i class="fa fa-robot text-primary"></i>
                        </div>
                        <h5 class="lh-base mb-0">Pengelolaan apartemen</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 btn-square border border-2 border-white me-3">
                            <i class="fa fa-robot text-primary"></i>
                        </div>
                        <h5 class="lh-base mb-0">Manajemen fasilitas properti</h5>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid" src="{{ asset('assets-guest/img/about-1.jpg') }}">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid" src="{{ asset('assets-guest/img/about-2.jpg') }}">
                            <div class="h-25 d-flex align-items-center text-center bg-primary px-4">
                                <h4 class="text-white lh-base mb-0">Award Winning Studio Since 1990</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-5"><span class="text-uppercase text-primary bg-light px-2">History</span> of Our
                        Creation</h1>
                    <p class="mb-4">PT Graha Cipta Mandiri merupakan perusahaan yang bergerak di bidang
                        pengembangan dan pengelolaan properti. Perusahaan ini didirikan pada tahun 2011 dan
                        memulai usahanya dengan mengembangkan proyek perumahan untuk memenuhi kebutuhan
                        hunian masyarakat di wilayah perkotaan.</p>
                    <p class="mb-5">Seiring dengan perkembangan perusahaan dan bertambahnya jumlah proyek,
                        PT Graha Cipta Mandiri terus meningkatkan kualitas manajemen dan operasional.
                        Hal ini dilakukan untuk mendukung pengelolaan karyawan dan proyek secara lebih
                        terstruktur serta meningkatkan efisiensi dan kualitas layanan perusahaan.</p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Award Winning</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Professional Staff</h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>24/7 Support</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Fair Prices</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-5">
                        <a class="btn btn-primary px-4 me-2" href="#!">Read More</a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href="#!"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href="#!"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href="#!"><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-primary btn-square border-2" href="#!"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center wow fadeIn" data-wow-delay="0.1s">
                <h1 class="mb-5">Visi & <span class="text-uppercase text-primary bg-light px-2">Misi</span>
                </h1>
            </div>
            <div class="row g-5 align-items-center text-center">
                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-calendar-alt fa-5x text-primary mb-4"></i>
                    <h4>Visi</h4>
                    <p class="mb-0">Menjadi perusahaan pengembang properti terkemuka yang menghadirkan
                        hunian berkualitas, inovatif, dan berkelanjutan bagi masyarakat perkotaan.</p>
                </div>

                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-user fa-5x text-primary mb-4"></i>
                    <h4>Misi</h4>
                    <p class="mb-0">
                        Mengembangkan proyek properti yang memenuhi standar kualitas, kenyamanan, dan keamanan bagi
                        penghuninya.

                        Menerapkan manajemen proyek yang efisien untuk memastikan penyelesaian tepat waktu dan sesuai
                        anggaran.

                        Meningkatkan kepuasan pelanggan melalui layanan profesional dan inovatif.

                        Memberdayakan sumber daya manusia melalui pelatihan, pengembangan kompetensi, dan lingkungan
                        kerja yang kondusif.

                        Berkontribusi pada pembangunan perkotaan yang berkelanjutan dan ramah lingkungan.
                    </p>
                </div>
            </div>

        </div>
    </div>
    <!-- Feature End -->


    {{-- <!-- Project Start -->
    <div class="container-fluid mt-5">
        <div class="container mt-5">
            <div class="row g-0">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column justify-content-center bg-primary h-100 p-5">
                        <h1 class="text-white mb-5">Our Latest <span
                                class="text-uppercase text-primary bg-light px-2">Projects</span></h1>
                        <h4 class="text-white mb-0"><span class="display-1">6</span> of our latest projects</h4>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.2s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset('assets-guest/img/project-1.jpg') }}">
                                <a class="project-overlay text-decoration-none" href="#!">
                                    <h4 class="text-white">Kitchen</h4>
                                    <small class="text-white">72 Projects</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset('assets-guest/img/project-2.jpg') }}">
                                <a class="project-overlay text-decoration-none" href="#!">
                                    <h4 class="text-white">Bathroom</h4>
                                    <small class="text-white">67 Projects</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.4s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset('assets-guest/img/project-3.jpg') }}">
                                <a class="project-overlay text-decoration-none" href="#!">
                                    <h4 class="text-white">Bedroom</h4>
                                    <small class="text-white">53 Projects</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset('assets-guest/img/project-4.jpg') }}">
                                <a class="project-overlay text-decoration-none" href="#!">
                                    <h4 class="text-white">Living Room</h4>
                                    <small class="text-white">33 Projects</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.6s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset('assets-guest/img/project-5.jpg') }}">
                                <a class="project-overlay text-decoration-none" href="#!">
                                    <h4 class="text-white">Furniture</h4>
                                    <small class="text-white">87 Projects</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset('assets-guest/img/project-6.jpg') }}">
                                <a class="project-overlay text-decoration-none" href="#!">
                                    <h4 class="text-white">Rennovation</h4>
                                    <small class="text-white">69 Projects</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End --> --}}


    <!-- Service Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center wow fadeIn" data-wow-delay="0.1s">
                <h1 class="mb-5"><span class="text-uppercase text-primary bg-light px-2">Our</span> of Team</h1>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-12">
                    <div class="row g-3"> <!-- g-3 = jarak lebih kecil -->
                        
                        <!-- Kolom 1 -->
                        <div class="col-md-4 wow fadeIn" data-wow-delay="0.2s">
                            <div class="service-item h-100 d-flex flex-column justify-content-center bg-primary text-white p-4 rounded shadow">
                                <a class="service-img position-relative mb-3">
                                    <img class="img-fluid w-100 rounded" src="{{ asset('assets-guest/img/service-1.jpg') }}">
                                    <h3 class="mt-0">Pengembangan Properti</h3>
                                </a>
                                <p class="mb-0">Bertanggung jawab atas perencanaan, desain, dan pelaksanaan proyek perumahan dan properti lainnya.</p>
                            </div>
                        </div>
    
                        <!-- Kolom 2 -->
                        <div class="col-md-4 wow fadeIn" data-wow-delay="0.4s">
                            <div class="service-item h-100 d-flex flex-column justify-content-center bg-light p-4 rounded shadow">
                                <a  class="service-img position-relative mb-3">
                                    <img class="img-fluid w-100 rounded" src="{{ asset('assets-guest/img/service-2.jpg') }}">
                                    <h3 class="mt-0">Manajemen Proyek</h3>
                                </a>
                                <p class="mb-0">Mengelola proyek properti agar selesai tepat waktu, sesuai anggaran, dan berkualitas.</p>
                            </div>
                        </div>
    
                        <!-- Kolom 3 -->
                        <div class="col-md-4 wow fadeIn" data-wow-delay="0.6s">
                            <div class="service-item h-100 d-flex flex-column justify-content-center bg-primary text-white p-4 rounded shadow">
                                <a class="service-img position-relative mb-3">
                                    <img class="img-fluid w-100 rounded" src="{{ asset('assets-guest/img/service-3.jpg') }}">
                                    <h3 class="mt-0">Pemasaran & Penjualan</h3>
                                </a>
                                <p class="mb-0">Meningkatkan penjualan properti melalui strategi pemasaran yang efektif.</p>
                            </div>
                        </div>
    
                        <!-- Baris kedua -->
                        <div class="col-md-4 wow fadeIn" data-wow-delay="0.8s">
                            <div class="service-item h-100 d-flex flex-column justify-content-center bg-light p-4 rounded shadow">
                                <a class="service-img position-relative mb-3">
                                    <img class="img-fluid w-100 rounded" src="{{ asset('assets-guest/img/service-4.jpg') }}">
                                    <h3 class="mt-0">Keuangan</h3>
                                </a>
                                <p class="mb-0">Mengelola aspek keuangan proyek dengan transparansi dan akuntabilitas.</p>
                            </div>
                        </div>
    
                        <div class="col-md-4 wow fadeIn" data-wow-delay="1s">
                            <div class="service-item h-100 d-flex flex-column justify-content-center bg-primary text-white p-4 rounded shadow">
                                <a class="service-img position-relative mb-3">
                                    <img class="img-fluid w-100 rounded" src="{{ asset('assets-guest/img/service-5.jpg') }}">
                                    <h3 class="mt-0">Sumber Daya Manusia</h3>
                                </a>
                                <p class="mb-0">Mengelola rekrutmen, pelatihan, pengembangan karyawan, dan menjaga kepuasan serta produktivitas tim.</p>
                            </div>
                        </div>
    
                        <div class="col-md-4 wow fadeIn" data-wow-delay="1.2s">
                            <div class="service-item h-100 d-flex flex-column justify-content-center bg-light p-4 rounded shadow">
                                <a class="service-img position-relative mb-3">
                                    <img class="img-fluid w-100 rounded" src="{{ asset('assets-guest/img/service-6.jpg') }}">
                                    <h3 class="mt-0">Legal & Kepatuhan</h3>
                                </a>
                                <p class="mb-0">Menangani aspek hukum, perizinan, kontrak, dan memastikan semua kegiatan perusahaan sesuai regulasi yang berlaku.</p>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <style>
    .service-item {
        width: 100%; /* memaksimalkan lebar kolom */
    }
    </style>
    
    <!-- Service End -->


    <!-- Team Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <h1 class="mb-5">Our Professional <span
                    class="text-uppercase text-primary bg-light px-2">Staff</span>
            </h1>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('assets-guest/img/team-1.jpg') }}">
                        <div class="team-overlay">
                            <small class="mb-2">CEO</small>
                            <h4 class="lh-base text-light">Boris Johnson</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('assets-guest/img/team-2.jpg') }}">
                        <div class="team-overlay">
                            <small class="mb-2">COO</small>
                            <h4 class="lh-base text-light">Donald Pakura</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('assets-guest/img/team-3.jpg') }}">
                        <div class="team-overlay">
                            <small class="mb-2">CFO</small>
                            <h4 class="lh-base text-light">Bradley Gordon</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('assets-guest/img/team-4.jpg') }}">
                        <div class="team-overlay">
                            <small class="mb-2">Architect</small>
                            <h4 class="lh-base text-light">Alexander Bell</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-9">
                    <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.2s">
                        <div class="testimonial-item">
                            <div class="row g-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="testimonial-img">
                                        <img class="img-fluid"
                                            src="{{ asset('assets-guest/img/testimonial-1.jpg') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="testimonial-text pb-5 pb-md-0">
                                        <h3>Sustainable Material</h3>
                                        <p>Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed
                                            stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna
                                            dolore erat
                                            amet</p>
                                        <h5 class="mb-0">Boris Johnson</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="row g-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="testimonial-img">
                                        <img class="img-fluid"
                                            src="{{ asset('assets-guest/img/testimonial-2.jpg') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="testimonial-text pb-5 pb-md-0">
                                        <h3>Customer Satisfaction</h3>
                                        <p>Clita erat ipsum et lorem et sit, sed
                                            stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna
                                            dolore erat
                                            amet</p>
                                        <h5 class="mb-0">Alexander Bell</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="row g-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="testimonial-img">
                                        <img class="img-fluid"
                                            src="{{ asset('assets-guest/img/testimonial-3.jpg') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="testimonial-text pb-5 pb-md-0">
                                        <h3>Budget Friendly</h3>
                                        <p>Diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed
                                            stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna
                                            dolore erat
                                            amet</p>
                                        <h5 class="mb-0">Bradley Gordon</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Testimonial End -->


    <!-- Newsletter Start -->
    {{-- <div class="container-fluid bg-primary newsletter p-0">
        <div class="container p-0">
            <div class="row g-0 align-items-center">
                <div class="col-md-5 ps-lg-0 text-start wow fadeIn" data-wow-delay="0.2s">
                    <img class="img-fluid w-100" src="{{ asset('assets-guest/img/newsletter.jpg') }}">
                </div>
                <div class="col-md-7 py-5 newsletter-text wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-5">
                        <h1 class="mb-5">Subscribe the <span
                                class="text-uppercase text-primary bg-white px-2">Newsletter</span></h1>
                        <div class="position-relative w-100 mb-2">
                            <input class="form-control border-0 w-100 ps-4 pe-5" type="text"
                                placeholder="Enter Your Email" style="height: 60px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-2 me-2"><i
                                    class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                        <p class="mb-0">Diam sed sed dolor stet amet eirmod</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Newsletter End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <a href="{{ url('/') }}" class="d-inline-block mb-3">
                        <h1 class="text-white">iSTUDIO</h1>
                    </a>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                        amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                        clita duo justo et tempor</p>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <h5 class="text-white mb-4">Get In Touch</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href="#!"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href="#!"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href="#!"><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href="#!"><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href="#!"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <h5 class="text-white mb-4">Popular Link</h5>
                    <a class="btn btn-link" href="#!">About Us</a>
                    <a class="btn btn-link" href="#!">Contact Us</a>
                    <a class="btn btn-link" href="#!">Privacy Policy</a>
                    <a class="btn btn-link" href="#!">Terms & Condition</a>
                    <a class="btn btn-link" href="#!">Career</a>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <h5 class="text-white mb-4">Our Services</h5>
                    <a class="btn btn-link" href="#!">Interior Design</a>
                    <a class="btn btn-link" href="#!">Project Planning</a>
                    <a class="btn btn-link" href="#!">Renovation</a>
                    <a class="btn btn-link" href="#!">Implement</a>
                    <a class="btn btn-link" href="#!">Landscape Design</a>
                </div>
            </div>
        </div>
        <div class="container wow fadeIn" data-wow-delay="0.1s">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#!">Your Site Name</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>. Distributed
                        by
                        <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="#!">Home</a>
                            <a href="#!">Cookies</a>
                            <a href="#!">Help</a>
                            <a href="#!">FAQs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#!" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets-guest/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets-guest/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets-guest/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets-guest/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    {{-- main js --}}
    <script src="{{ asset('assets-guest/js/main.js') }}"></script>

</body>

</html>
