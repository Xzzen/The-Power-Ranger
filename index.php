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
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/hoper.css">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <class=" bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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


        
            <!-- Header Start -->
      
       
            <div class="container header bg-white py-5">
                <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                    <div class="col-md-6 p-5 mt-lg-5">
                        <h1 class="display-5 animated fadeIn mb-4"><span class="text-primary">Nutri Journal</span>
                            Mengubah Pola Hidup Anda Dari Kebiasaan Kecil</h1>
                        <p class="animated fadeIn mb-4 pb-2">Bergabunglah bersama kami di Nutri Journal, melakukan
                            perubahan dengan memulai dari mengatur pola hidup sehari hari dengan baik untuk menata masa
                            depan yang cerah.</p>
                            <?php if($_SESSION['ses_username']){?><?php }else{?>
    <a id="join-link" class="rog" href="../login/index.php">
                    <span class="fikar"></span>
                    <span class="fikar"></span>
                    <span class="fikar"></span>
                    <span class="fikar"></span>
                    jadilah Bagian Dari Kami
                </a>
<?php }?>
                    </div>
                    <div class="col-md-6 animated fadeIn">
                        <div class="owl-carousel header-carousel mt-4">
                            <div class="owl-carousel-item">
                                <img class="img-fluid" src="img/logo.png" alt="">
                            </div>
                            <div class="owl-carousel-item">
                                <img class="img-fluid" src="img/Hero.png" alt="">
                            </div>
                            <div class="owl-carousel-item">
                                <img class="img-fluid" src="img/2.png" alt="">
                            </div>
                            <div class="owl-carousel-item">
                                <img class="img-fluid" src="img/3.png" alt="">
                            </div>
                            <div class="owl-carousel-item">
                                <img class="img-fluid" src="img/4.png" alt="">
                            </div>
                            <div class="owl-carousel-item">
                                <img class="img-fluid" src="img/5.png" alt="">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
         </div>
            <!-- Header End -->
       

        <!-- Category Start -->
       
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Features</h1>
                    <p> Menjaga Energi dan cairan dalam tubuh anda sebuah investasi kecil dengan manfaat besar</p>
                </div>
                <div class="row g-">
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="drink.html">
                            <div class="rounded p-4">
                                
                                    <img class="img-fluid" src="img/drink.png" alt="Icon" style="width: 100px;">
                                <br><br>
                                <h6>Daily Drink</h6>
                                <span>Jika Anda ingin menjaga energi, konsentrasi, dan kesehatan Anda, jangan lupakan
                                    pentingnya minum air. Ini adalah investasi kecil dengan manfaat besar.</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="sleep.html">
                            <div class="rounded p-4">
                                
                                    <img class="img-fluid" src="img/sleep.png" alt="Icon" style="width: 125px;">
                                <br>
                                <h6>Daily Sleep</h6>
                                <span>tubuh yang sehat membutuhkan istirahat yang cukup. cukupi lah kebutuhan istirahat harian tubuhmu!</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="Workout.html">
                            <div class="rounded p-4">
                                
                                    <img class="img-fluid" src="img/otot.png" alt="Icon" style="width: 125px;">
                                <br><br>
                                <h6>Workout Tips</h6>
                                <span>berolahraga membuat anda menjadi lebih sehat dan bugar setiap hari .</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="List.html">
                            <div class="rounded p-4">
                                
                                    <img class="img-fluid" src="img/makanan.png" alt="Icon" style="width: 125px;">
                                <br><br>
                                <h6>Daftar Makanan Penukar</h6>
                                <span>makanan pengganti alternatif yang sehat bagi tubuh anda.</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="Bmi.html">
                            <div class="rounded p-4">
                                
                                    <img class="img-fluid" src="img/bmi.png" alt="Icon" style="width: 125px;">
                                <br><br>
                                <h6>Penghitung BMI/IMT</h6>
                                <span>Ketahui terlebih dahulu kisaran berat badan yang sehat. mari lakukan perhitungan ini dan buatlah sebuah rencana kesehatan</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="Calcu.html">
                            <div class="rounded p-4">
                                
                                    <img class="img-fluid" src="img/calcu.png" alt="Icon" style="width: 125px;">
                                <br>
                                <h6>Penghitung Kebutuhan Kalori</h6>
                                <span>Menghitung kebutuhan kalori harian adalah cara sederhana untuk mengendalikan
                                    asupan makanan kita dan menjaga berat badan yang sehat.</span>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
</div>
        <!-- Category End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="about-img position-relative overflow-hidden p-5 pe-0">
                            <img class="img-fluid w-100" src="img/logo1.JPG">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">#Hidup Sehat Yang konsisten </h1>
                        <p class="mb-4" style="font-size: 20px;">Kesehatan adalah kekayaan terbesar yang dimiliki oleh
                            setiap individu. Dengan
                            langkah-langkah sederhana, Anda dapat memulai perjalanan menuju kehidupan yang lebih
                            sehat. <br><br><b>Nutri Journal</b> Hadir untuk menemani perjalanan hidup sehat dimulai
                            dengan kebiasaan
                            yang sering terlupakan.
                            Nutri Journal menjadikan kebiasaan kecil yang memiliki manfaat sangat besar bagi kesehatan
                        </p>
                        <?php if($_SESSION['ses_username']){?><?php }else{?>
    <a id="join-link" class="rog" href="../login/index.php">
                    <span class="fikar"></span>
                    <span class="fikar"></span>
                    <span class="fikar"></span>
                    <span class="fikar"></span>
                    jadilah Bagian Dari Kami
                </a>
<?php }?>
                        </div>
                </div>
            </div>
        </div>
        <!-- About End -->


       
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
                            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                                <a class="btn btn-primary py-3 px-5" href="berita.html">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        <!-- Property List End -->



        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Dokter Kami</h1>
                     </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-1.jpg" alt="">
                                <div
                                    class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-2.jpg" alt="">
                                <div
                                    class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-3.jpg" alt="">
                                <div
                                    class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-4.jpg" alt="">
                                <div
                                    class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Sahabat Nutri Journal</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet
                                diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg"
                                    style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Client Name</h6>
                                    <small>Profession</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet
                                diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg"
                                    style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Client Name</h6>
                                    <small>Profession</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet
                                diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg"
                                    style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Client Name</h6>
                                    <small>Profession</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


       <!-- Footer Start -->
       <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-12" style="text-align: center;;">
                    <h2 class="pehh">"Hidup Sehat yang konsisten"</h2>
                    
                   
                       <center> <a class="btn btn-outline-light btn-social mt-2" href=""><i class="fab fa-instagram"></i></a></center>
                    
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