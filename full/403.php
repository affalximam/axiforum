<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script>
      let rev = "fwd";
      function titlebar(val) {
        let msg = "403 FORBIDDEN";
        let res = " ";
        let speed = 300;
        let pos = val;

        msg = " " +msg+" ";
        let le = msg.length;

        if(rev == "fwd"){

          if(pos < le){
            pos = pos+1;
            scroll = msg.substr(0,pos);
            document.title = scroll;
            timer = window.setTimeout("titlebar("+pos+")",speed);
          }

          else{
            rev = "bwd";
            timer = window.setTimeout("titlebar("+pos+")",speed);
          }
        }

        else{
          if(pos > 0){
            pos = pos-1;
            let ale = le-pos;
            scrol = msg.substr(ale,le);
            document.title = scrol;
            timer = window.setTimeout("titlebar("+pos+")",speed);
          }

          else{
            rev = "fwd";
            timer = window.setTimeout("titlebar("+pos+")",speed);
          }
        }
      }       
      titlebar(0);
    </script>

    <meta name="description" content="403 FORBIDDEN">

    <!-- icon -->
    <link rel="shortcut icon" href="assens/images/logo-1.png" type="image/x-icon">

    <!-- Bootstrapt -->
    <link rel="stylesheet" href="assens/css/bootstrap.css" />
    <!-- Animation On Scroll -->
    <link rel="stylesheet" href="assens/css/aos.css">
    <!-- CSS Custom-->
    <link rel="stylesheet" href="assens/css/style.css" />
    
</head>
<body>
  
      <!-- Jumbotron -->
      <div class="jumbotron" data-scroll-index="0">
        <div id="particles-js"></div>
        <div class="jumbotron-con">
          <div class="jumbotron-403">
            <h1 data-aos="fade-in" data-aos-delay="500">403 Forbidden</h1>
            <h2 data-aos="fade-in" data-aos-delay="1000">I Know You Wanna Find Vulnerability In This Site.</h2>
            <h2 data-aos="fade-in" data-aos-delay="1500">Your IP Address was Detected. </h2>
            <h2 data-aos="fade-in" data-aos-delay="2000">Your IP address is :
              <span>
                <?php include 'php/get-ip.php'; ?>
              </span>
            </h2>
          </div>
        </div>
      </div>
      <!-- End Jumbotron -->

    <!-- Javascript -->
    <script src="assens/js/jquery-3.5.1.js"></script>
    <script src="assens/js/bootstrap.js"></script>
    <script src="assens/js/flickity.js"></script>
    <script src="assens/js/jquery.easing.1.3.js"></script>
    <script src="assens/js/aos.js"></script>
    <script src="assens/js/script.js"></script>
    <!-- End Javescript -->

  </body>
</html>
