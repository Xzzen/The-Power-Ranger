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
    <link href="css/hoper.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid bg-white p-0">
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






        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Pengganti Karbohidrat <br>(per 100 gram)</h1>

                </div>
                <div class="row g-">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="drink.html">
                            <div class="rounded p-4">

                                <img class="img-fluid" src="img/quinoa.png" alt="Icon" style="width: 100px;">
                                <br><br>
                                <h6>Quinoa</h6>
                                <span> Sekitar 120 kalori, 4 gram protein, 21 gram karbohidrat, 2,8 gram serat.
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="sleep.html">
                            <div class="rounded p-4">

                                <img class="img-fluid" src="img/kentang manis.png" alt="Icon" style="width: 125px;">
                                <br>
                                <h6>Kentang Manis</h6>
                                <span>Sekitar 86 kalori, 1,6 gram protein, 20 gram karbohidrat, 2,5 gram serat.
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="sleep.html">
                            <div class="rounded p-4">

                                <img class="img-fluid" src="img/buncis.png" alt="Icon" style="width: 125px;">
                                <br>
                                <h6>Buncis</h6>
                                <span>Sekitar 31 kalori, 2,7 gram protein, 7 gram karbohidrat, 3,4 gram serat.
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="sleep.html">
                            <div class="rounded p-4">

                                <img class="img-fluid" src="img/ubi jalar.png" alt="Icon" style="width: 125px;">
                                <br>
                                <h6>Ubi Jalar</h6>
                                <span>Sekitar 86 kalori, 1,6 gram protein, 20 gram karbohidrat, 3 gram serat.
                                </span>
                            </div>
                        </a>
                    </div>

                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <h1 class="mb-3 mt-5">Pengganti Protein Nabati <br> (per 100 gram)</h1>

                    </div>
                    <div class="row g-">
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <a class="cat-item d-block bg-light text-center rounded p-3" href="drink.html">
                                <div class="rounded p-4">

                                    <img class="img-fluid" src="img/tahu.png" alt="Icon" style="width: 100px;">
                                    <br><br>
                                    <h6>Tahu</h6>
                                    <span>Sekitar 144 kalori, 15 gram protein, 3,4 gram karbohidrat, 0,9 gram serat.

                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                            <a class="cat-item d-block bg-light text-center rounded p-3" href="sleep.html">
                                <div class="rounded p-4">

                                    <img class="img-fluid" src="img/tempe.png" alt="Icon" style="width: 125px;">
                                    <br>
                                    <h6>Tempe</h6>
                                    <span>Sekitar 192 kalori, 20,3 gram protein, 9,4 gram karbohidrat, 2,6 gram serat.

                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                            <a class="cat-item d-block bg-light text-center rounded p-3" href="sleep.html">
                                <div class="rounded p-4">

                                    <img class="img-fluid" src="img/kacang hitam.png" alt="Icon" style="width: 125px;">
                                    <br>
                                    <h6>Kacang Hitam</h6>
                                    <span>Sekitar 132 kalori, 8,9 gram protein, 23,6 gram karbohidrat, 8,7 gram serat.

                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                            <a class="cat-item d-block bg-light text-center rounded p-3" href="sleep.html">
                                <div class="rounded p-4">

                                    <img class="img-fluid" src="img/edamame.png" alt="Icon" style="width: 125px;">
                                    <br>
                                    <h6>Edamame</h6>
                                    <span>Sekitar 122 kalori, 11 gram protein, 9 gram karbohidrat, 5,2 gram serat.

                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                            style="max-width: 600px;">
                            <h1 class="mb-3 mt-5">Pengganti Produk Susu (per 100 ml untuk susu nabati, per 100 gram untuk yogurt dan keju vegan)</h1>

                        </div>
                        <div class="row g-">
                            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                <a class="cat-item d-block bg-light text-center rounded p-3" href="drink.html">
                                    <div class="rounded p-4">

                                        <img class="img-fluid" src="img/susu_almond.png" alt="Icon" style="width: 100px;">
                                        <br><br>
                                        <h6>Susu Almond</h6>
                                        <span> Sekitar 13 kalori, 0,5 gram protein, 1 gram karbohidrat, 0,1 gram serat.

                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                                <a class="cat-item d-block bg-light text-center rounded p-3" href="sleep.html">
                                    <div class="rounded p-4">

                                        <img class="img-fluid" src="img/susu_oat.png" alt="Icon"
                                            style="width: 125px;">
                                        <br>
                                        <h6>Susu Oat</h6>
                                        <span>Sekitar 42 kalori, 1 gram protein, 7 gram karbohidrat, 0,8 gram serat.


                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                                <a class="cat-item d-block bg-light text-center rounded p-3" href="sleep.html">
                                    <div class="rounded p-4">

                                        <img class="img-fluid" src="img/yogurt.png" alt="Icon" style="width: 125px;">
                                        <br>
                                        <h6>Yogurt</h6>
                                        <span>Sekitar 36 kalori, 3,5 gram protein, 1,9 gram karbohidrat, 0,5 gram serat.

                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                                <a class="cat-item d-block bg-light text-center rounded p-3" href="sleep.html">
                                    <div class="rounded p-4">

                                        <img class="img-fluid" src="img/susu_kedelai.png" alt="Icon" style="width: 125px;">
                                        <br>
                                        <h6>Susu Kedelai</h6>
                                        <span>Sekitar 33 kalori, 3,3 gram protein, 1,7 gram karbohidrat, 0,3 gram serat.

                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                            style="max-width: 600px;">
                            <h1 class="mb-3 mt-5">Pengganti Minyak dan Lemak <br>(per 100 gram)</h1>

                        </div>
                        <div class="row g-">
                            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                <a class="cat-item d-block bg-light text-center rounded p-3" href="drink.html">
                                    <div class="rounded p-4">

                                        <img class="img-fluid" src="img/minyak_zaitun.png" alt="Icon" style="width: 100px;">
                                        <br><br>
                                        <h6>Minyak Zaitun</h6>
                                        <span> Sekitar 884 kalori, 0 gram protein, 100 gram lemak, 0 gram karbohidrat.


                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                                <a class="cat-item d-block bg-light text-center rounded p-3" href="sleep.html">
                                    <div class="rounded p-4">

                                        <img class="img-fluid" src="img/gheee.png" alt="Icon"
                                            style="width: 125px;">
                                        <br>
                                        <h6>Ghee</h6>
                                        <span>Sekitar 900 kalori, 0 gram protein, 100 gram lemak, 0 gram karbohidrat.



                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                                <a class="cat-item d-block bg-light text-center rounded p-3" href="sleep.html">
                                    <div class="rounded p-4">

                                        <img class="img-fluid" src="img/avokado.png" alt="Icon" style="width: 125px;">
                                        <br>
                                        <h6>Minyak Avokad</h6>
                                        <span>Sekitar 884 kalori, 0 gram protein, 100 gram lemak, 0 gram karbohidrat.


                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                                <a class="cat-item d-block bg-light text-center rounded p-3" href="sleep.html">
                                    <div class="rounded p-4">

                                        <img class="img-fluid" src="img/susu_kedelai.png" alt="Icon" style="width: 125px;">
                                        <br>
                                        <h6>Susu Kedelai</h6>
                                        <span>Sekitar 33 kalori, 3,3 gram protein, 1,7 gram karbohidrat, 0,3 gram serat.

                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                                style="max-width: 600px;">
                                <h1 class="mb-3 mt-5">Pengganti Gula<br> (per 100 gram)</h1>

                            </div>
                            <div class="row g-">
                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <a class="cat-item d-block bg-light text-center rounded p-3" href="drink.html">
                                        <div class="rounded p-4">

                                            <img class="img-fluid" src="img/Madu.png" alt="Icon"
                                                style="width: 100px;">
                                            <br><br>
                                            <h6>Madu</h6>
                                            <span> Sekitar 304 kalori, 0,3 gram protein, 82 gram karbohidrat, 0,2 gram serat.

                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <a class="cat-item d-block bg-light text-center rounded p-3" href="sleep.html">
                                        <div class="rounded p-4">

                                            <img class="img-fluid" src="img/stepia.png" alt="Icon"
                                                style="width: 125px;">
                                            <br>
                                            <h6>Stevia</h6>
                                            <span>Tidak berkalori (0 kalori), 0 gram protein, 95 gram karbohidrat, 9 gram serat.

                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <a class="cat-item d-block bg-light text-center rounded p-3" href="sleep.html">
                                        <div class="rounded p-4">

                                            <img class="img-fluid" src="img/sirup_maple.png" alt="Icon"
                                                style="width: 125px;">
                                            <br>
                                            <h6>Sirup Maple</h6>
                                            <span>Sekitar 260 kalori, 0,4 gram protein, 67 gram karbohidrat, 0 gram serat.

                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <a class="cat-item d-block bg-light text-center rounded p-3" href="sleep.html">
                                        <div class="rounded p-4">

                                            <img class="img-fluid" src="img/Gula_Kelapa.png" alt="Icon"
                                                style="width: 125px;">
                                            <br>
                                            <h6>Gula Kelapa</h6>
                                            <span>Sekitar 375 kalori, 2,9 gram protein, 94 gram karbohidrat, 0 gram serat.

                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Team End -->




    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-12" style="text-align: center;;">
                    <h2 class="pehh">"Hidup Sehat</h2>
                    <h2 class="pex">Yang</h2>
                    <H2 class="peh">Konsisten"</H2>


                    <center> <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                    </center>

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