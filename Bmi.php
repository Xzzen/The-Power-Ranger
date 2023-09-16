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

<body class="anubmi">
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

        <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">

                <div class="container mt-5 mx-auto mb-5" data-wow-delay="0.5s">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <center>
                                <div class="card-kodok  wow fadeIn">
                                    <div class="card-body">
                                        <h1 class="text-center surya">Kalkulator BMI</h1>
                                        <form id="bmiForm">
                                            <div class="form-group text-center">
                                                <label for="berat">Berat (kg):</label>
                                                <input type="number" class="form-control mx-auto" id="berat" required>
                                            </div>
                                            <div class="form-group text-center">
                                                <label for="tinggi">Tinggi (cm):</label>
                                                <input type="number" class="form-control mx-auto" id="tinggi" required>
                                            </div>
                                            <center><div class="text-center">
                                                <button type="submit" class="laut btn btn-primary btn-block">Hitung BMI</button>
                                            </div></center>
                                        </form>
                                        <center><div id="hasilBMI" style="display: none;">
                                            <h2 class="text-center surya">Hasil BMI:</h2>
                                            <p class="text-center result surya" id="hasil"></p>
                                            <h2 class="text-center surya">Kategori BMI:</h2>
                                            <p class="text-center result surya" id="kategori"></p>
                                        </div></center>
                                    </div>
                                </div>
                        </div>
                        </center>
                    </div>
                </div>
            </div>
            <script>
                document.getElementById("bmiForm").addEventListener("submit", function (e) {
                    e.preventDefault();

                    const berat = parseFloat(document.getElementById("berat").value);
                    const tinggi = parseFloat(document.getElementById("tinggi").value) / 100; // Konversi tinggi dari cm ke meter

                    const bmi = berat / (tinggi * tinggi);

                    document.getElementById("hasil").textContent = `BMI Anda adalah: ${bmi.toFixed(2)}`;

                    let kategori = "";
                    if (bmi < 18.5) {
                        kategori = "Kurus";
                    } else if (bmi < 24.9) {
                        kategori = "Normal";
                    } else if (bmi < 29.9) {
                        kategori = "Gemuk";
                    } else {
                        kategori = "Obesitas";
                    }
                    document.getElementById("kategori").textContent = `Kategori BMI Anda: ${kategori}`;

                    // Menampilkan div hasil BMI setelah perhitungan
                    document.getElementById("hasilBMI").style.display = "block";
                });
            </script>



        </div>
    </div>
    <!-- Property List End -->
    </div>
    <!-- Team End -->




    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-12" style="text-align: center;;">
                    <h2 class="pehh">"Hidup Sehat yang konsisten"</h2>


                    <center> <a class="btn btn-outline-light btn-social mt-2" href=""><i
                                class="fab fa-instagram"></i></a></center>

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
    <script src="js/navbmi.js"></script>
</body>

</html>