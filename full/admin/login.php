<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login</title>

    <meta name="description" content="lOGIN ADMIN">

    <!-- icon -->
    <link rel="shortcut icon" href="../assens/images/logo-1.png" type="image/x-icon">

    <!-- Bootstrapt -->
    <link rel="stylesheet" href="../assens/css/bootstrap.css">
    <!-- Animation On Scroll -->
    <link rel="stylesheet" href="../assens/css/aos.css">
    <!-- CSS Custom-->
    <link rel="stylesheet" href="../assens/css/style.css">
    
</head>
<body>
  
      <!-- Jumbotron -->
      <div class="jumbotron" data-scroll-index="0">
        <div id="particles-js"></div>
        <div class="jumbotron-con">
          <div class="jumbotron-login">
          <form action="../php/proses_login.php" method="POST">
            <h2>LOGIN ADMIN</h2>
            <div class="login-username">
              <input type="text" id="name" placeholder="username" name="username" required>
            </div>
            <div class="login-pass">
              <input type="password" id="password" placeholder="password" name="password" required>
            </div>
            <div class="login-submit">
              <button name="submit">login</button>
            </div>
          </form>
          </div>
        </div>
      </div>
      <!-- End Jumbotron -->

    <!-- Javascript -->
    <script src="../assens/js/jquery-3.5.1.js"></script>
    <script src="../assens/js/bootstrap.js"></script>
    <script src="../assens/js/flickity.js"></script>
    <script src="../assens/js/jquery.easing.1.3.js"></script>
    <script src="../assens/js/aos.js"></script>
    <script src="../assens/js/script.js"></script>
    <!-- End Javescript -->

  </body>
</html>