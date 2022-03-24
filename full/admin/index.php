<?php
    session_start();
    if(isset($_SESSION["username"])){  
    }else{
        echo header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>

    <meta name="description" content="Dashboard Admin">

    <!-- icon -->
    <link rel="shortcut icon" href="../assens/images/logo-1.png" type="image/x-icon">

    <!-- Bootstrapt -->
    <link rel="stylesheet" href="../assens/css/bootstrap.css">
    <!-- Animation On Scroll -->
    <link rel="stylesheet" href="../assens/css/aos.css">
    <!-- SweetAlert -->
    <link rel="stylesheet" href="../assens/css/sweetalert2.css">
    <!-- CSS Custom-->
    <link rel="stylesheet" href="../assens/css/style.css">
    
</head>
<body>
  
  <!-- Jumbotron -->
  <div class="jumbotron" data-scroll-index="0">
    <div id="particles-js"></div>
    <div class="jumbotron-con">
      <div class="jumbotron-dashboard">
        <h1 data-aos="fade-in" data-aos-delay="500">HELLO KANG BYPASS ADMIN LOGIN</h1>
        <h2 data-aos="fade-in" data-aos-delay="500">YOUR IP ADDRESS : <span> <?php include '../php/get-ip.php' ?></span> </h2>
        <button>LOGOUT</button>
      </div>
    </div>
  </div>
  <!-- End Jumbotron -->

  <!-- Preloader -->
  <div class="preloader">
    <div class="preloader-1"></div>
    <div class="preloader-2"></div>
    <div class="preloader-3">
      <div class="preloader-cycle"></div>
    </div>
  </div>
  <!-- End Preloader -->

    <!-- Javascript -->
    <script src="../assens/js/jquery-3.5.1.js"></script>
    <script src="../assens/js/bootstrap.js"></script>
    <script src="../assens/js/sweetalert2.all.js"></script>
    <script src="../assens/js/jquery.easing.1.3.js"></script>
    <script src="../assens/js/aos.js"></script>
    <script src="../assens/js/script.js"></script>
    <!-- End Javescript -->

  </body>
</html>
