<?php
session_start();
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Nutri Journal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/logo1.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/hoper.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
       <div class="container nav-bar bg-transparent">
        <nav class="navbar navbar-expand-lg bg-transparent navbar-light py-0 px-2">
            <div href="index.php" class="navbar-brand d-flex align-items-center text-center">
                <a href="index.php" class="navbar-brand d-flex align-items-center text-center">
                    <img class="img-fluid" src="img/logo1.png" alt="Icon" style="width: 40px; height: 40px; margin-right: 14px;">

                <h1 class="m-0 text-primary">Nutri Journal</h1>
            </div></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Fitur</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="drink.php" class="dropdown-item">Drink Journaling</a>
                            <a href="sleep.php" class="dropdown-item">Sleep Journaling</a>
                            <a href="Workout.php" class="dropdown-item">Workout Tips</a>
                            <a href="Bmi.php" class="dropdown-item">BMI Counter</a>
                            <a href="List.php" class="dropdown-item">Exchange Food List</a>
                            <a href="Calcu.php" class="dropdown-item">Calories Needs Calculator</a>
                        </div>
                    </div>
                    <a href="Tentang.php" class="nav-item nav-link">Tentang</a>
                    <a href="berita.php" class="nav-item nav-link">Berita</a>
                    <a href="komen.php" class="nav-item nav-link">Sahabat NJ</a>
                    
                    <a href="contact.php" class="nav-item nav-link">Kontak</a>
                </div>

                <?php if ($_SESSION['ses_username']) { ?>
                    <a class="rog" href="logout.php">
                        <span class="fikar"></span>
                        <span class="fikar"></span>
                        <span class="fikar"></span>
                        <span class="fikar"></span>
                        Keluar
                    </a>
                <?php } else { ?>
                    <a class="rog" href="../login/index.php">
                        <span class="fikar"></span>
                        <span class="fikar"></span>
                        <span class="fikar"></span>
                        <span class="fikar"></span>
                        Gabung
                    </a>
                <?php } ?>
    
            </div>
        </nav>
    </div>
    <!-- Navbar End -->




        <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5">
                    <div class="col-lg-12">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                           <center> <h1 class="mb-3">Berita Kesehatan</h1></center>
                        </div>
                    </div>

                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="https://www.alodokter.com/rahasia-meraih-panjang-umur-ini-sungguh-mengejutkan"><img class="img-fluid" src="img/umur.jpg" alt=""></a>
                                        <div class=" position-absolute start-0 top-0 m-4 py-1 px-3">
                                        </div>
                                        <div class=" position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        </div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3"></h5>
                                        <a class="d-block h5 mb-2" href="https://www.alodokter.com/rahasia-meraih-panjang-umur-ini-sungguh-mengejutkan">5 Rahasia Panjang Umur</a>
                                        <p><i class=" text-primary me-2 kodok"></i>Source: Alodokter</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class=" me-2"></i>31</small>
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class=" me-2"></i>Januari</small>
                                        <small class="flex-fill text-center py-2"><i
                                                class=" me-2"></i>2022</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="https://rsudkertosono.nganjukkab.go.id/web2/artikel/5-langkah-mudah-menuju-pola-hidup-sehat"><img class="img-fluid" src="img/pola-hidup.jpg" alt=""></a>
                                        <div class=" position-absolute start-0 top-0 m-4 py-1 px-3">
                                        </div>
                                        <div class=" position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        </div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3"></h5>
                                        <a class="d-block h5 mb-2" href="https://rsudkertosono.nganjukkab.go.id/web2/artikel/5-langkah-mudah-menuju-pola-hidup-sehat">5 Langkah Mudah Menuju Pola Hidup Sehat</a>
                                        <p><i class=" text-primary me-2 kodok"></i>Source: RSD Kertosono</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class=" me-2"></i>09</small>
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class=" me-2"></i>April</small>
                                        <small class="flex-fill text-center py-2"><i
                                                class=" me-2"></i>2020</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="https://yankes.kemkes.go.id/view_artikel/2638/dampak-kurang-minum-air-putih"><img class="img-fluid" src="img/minum.jpg" alt=""></a>
                                        <div class=" position-absolute start-0 top-0 m-4 py-1 px-3">
                                        </div>
                                        <div class=" position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        </div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3"></h5>
                                        <a class="d-block h5 mb-2" href="https://yankes.kemkes.go.id/view_artikel/2638/dampak-kurang-minum-air-putih">Dampak Kurang Minum Air Putih</a>
                                        <p><i class=" text-primary me-2 kodok"></i>Source: Kementrian kesehatan</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class=" me-2"></i>25</small>
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class=" me-2"></i>Juli</small>
                                        <small class="flex-fill text-center py-2"><i
                                                class=" me-2"></i>2023</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="https://www.sehataqua.co.id/manfaat-makan-sayur/"><img class="img-fluid" src="img/sayur.jpg" alt=""></a>
                                        <div class=" position-absolute start-0 top-0 m-4 py-1 px-3">
                                        </div>
                                        <div class=" position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        </div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3"></h5>
                                        <a class="d-block h5 mb-2" href="https://www.sehataqua.co.id/manfaat-makan-sayur/">8 Manfaat Mengonsumsi Sayur Bagi Kesehatan</a>
                                        <p><i class=" text-primary me-2 kodok"></i>Source: SehatAqua</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class=" me-2"></i>12</small>
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class=" me-2"></i>Mei</small>
                                        <small class="flex-fill text-center py-2"><i
                                                class=" me-2"></i>2023</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="https://www.halodoc.com/artikel/catat-ini-6-cara-ampuh-agar-bisa-cepat-tidur"><img class="img-fluid" src="img/turu.jpg" alt=""></a>
                                        <div class=" position-absolute start-0 top-0 m-4 py-1 px-3">
                                        </div>
                                        <div class=" position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        </div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3"></h5>
                                        <a class="d-block h5 mb-2" href="https://www.halodoc.com/artikel/catat-ini-6-cara-ampuh-agar-bisa-cepat-tidur">6 Cara Ampuh Agar Bisa Cepat Tidur</a>
                                        <p><i class=" text-primary me-2 kodok"></i>Source: HaloDoc</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class=" me-2"></i>06</small>
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class=" me-2"></i>April</small>
                                        <small class="flex-fill text-center py-2"><i
                                                class=" me-2"></i>2022</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="https://gaya.tempo.co/read/1758939/5-jenis-makanan-sehat-dianjurkan-untuk-pasien-diabetes"><img class="img-fluid" src="img/makanan.jpg" alt=""></a>
                                        <div class=" position-absolute start-0 top-0 m-4 py-1 px-3">
                                        </div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        </div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3"></h5>
                                        <a class="d-block h5 mb-2" href="https://gaya.tempo.co/read/1758939/5-jenis-makanan-sehat-dianjurkan-untuk-pasien-diabetes">5 Jenis Makanan Sehat Dianjurkan Untuk Pasien Diabetes</a>
                                        <p><i class=" text-primary me-2 kodok"></i>Source: Tempo.Co</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class=" me-2"></i>12</small>
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class=" me-2"></i>Agustus</small>
                                        <small class="flex-fill text-center py-2"><i
                                                class=" me-2"></i>23</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        <!-- Property List End -->


        

        <!-- Footer Start -->
       <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-12" style="text-align: center;;">
                    <h2 class="pehh">"Hidup Sehat</h2>
                    <h2 class="pex">Yang</h2>
                    <H2 class="peh">Konsisten"</H2>
                    
                   
                       <center> <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a></center>
                    
                </div>
                
                
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Nutri Journal</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">Team Power Rangger</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Help</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>