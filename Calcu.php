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

<body class="anubmi">
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


       

        <!-- Team Start -->

            <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <center><div class="card wow fadeIn">
                    <div class="card-body container mt-5">
                        <h2 class="text-center mb-4 surya1">Kalkulator Kebutuhan Kalori</h2>
                            <form id="calorieCalculator">
                                <div class="form-group" style="width: 50%;">
                                <label for="weight">Berat Badan (kg):</label>
                            <input type="number" class="form-control" id="weight" required>
                        </div>
                        <div class="form-group" style="width: 50%;">
                            <label for="height">Tinggi Badan (cm):</label>
                            <input type="number" class="form-control" id="height" required>
                        </div>
                        <div class="form-group" style="width: 50%;">
                            <label for="age">Usia (tahun):</label>
                            <input type="number" class="form-control" id="age" required>
                        </div>
                        <div class="form-group" style="width: 50%;">
                            <label for="gender">Jenis Kelamin:</label>
                            <select class="form-control" id="gender" required>
                                <option value="male">Laki-laki</option>
                                <option value="female">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group" style="width: 50%;">
                            <label for="activityLevel">Tingkat Aktivitas:</label>
                            <select class="form-control" id="activityLevel" required>
                                <option value="1.2">Sedentary (Tidak Aktif)</option>
                                <option value="1.375">Ringan (Aktivitas Ringan)</option>
                                <option value="1.55">Sedang (Aktivitas Sedang)</option>
                                <option value="1.725">Berat (Aktivitas Berat)</option>
                                <option value="1.9">Sangat Berat (Aktivitas Sangat Berat)</option>
                            </select>
                        </div>
                        <button type="button" class="btn btn-primary" onclick="calculateCalories()">Hitung Kebutuhan Kalori</button>
                    </form>
                    <div id="result" class="mt-4 surya1"></div>
                </div>
            </center>
                    
                </div>
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

                <script>
                    function calculateCalories() {
                        const weight = parseFloat(document.getElementById("weight").value);
                        const height = parseFloat(document.getElementById("height").value);
                        const age = parseFloat(document.getElementById("age").value);
                        const gender = document.getElementById("gender").value;
                        const activityLevel = parseFloat(document.getElementById("activityLevel").value);
            
                        let bmr;
            
                        if (gender === "male") {
                            bmr = 88.362 + (13.397 * weight) + (4.799 * height) - (5.677 * age);
                        } else {
                            bmr = 447.593 + (9.247 * weight) + (3.098 * height) - (4.330 * age);
                        }
            
                        const totalCalories = bmr * activityLevel;
            
                        document.getElementById("result").innerHTML = `Kebutuhan Kalori Harian Anda: ${totalCalories.toFixed(2)} kalori`;
                    }
                </script>
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