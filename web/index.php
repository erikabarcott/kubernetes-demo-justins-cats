<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>KITTIES.</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/lightbox.css">
    <!-- Banner-Slider-CSS -->
    <link rel="stylesheet" href="css/banner-style.css">
    <link rel="stylesheet" href="css/aos.css">
    <link href='css/aos-animation.css' rel='stylesheet prefetch' type="text/css" media="all" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <!-- Font-Awesome-Icons-CSS -->
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">

</head>

<body>

    <section class="content-main-w3" id="home">

            <div class="logo-wthree text-center">
                <a class="navbar-brand" href="#">KITTIES.</a>
            </div>

        </div>

        <div class="container-fluid gallery-lightbox my-5">
            <div class="row m-0">


<?php

    $host        = "host = localhost";
    $port        = "port = 5432";
    $dbname      = "dbname = cat_storage";
    $credentials = "user=cat_dev password=9lives";

    $db_connect = pg_connect("$host $port $dbname $credentials");

    if (!$db_connect) {
        die("Error in connection: " . pg_last_error());
    }

    $sql = "SELECT * FROM cat_pictures";

    $result = pg_query($db_connect, $sql);

    if (!$result) {
        die("Error in SQL query: " . pg_last_error());
    }

    // iterate over results and print each

    while ($row = pg_fetch_array($result)) {

        echo '<div class="gallery_grid1 hover08" data-aos="fade-up"><div class="gallery_effect">';
        echo '<a href="' . $row[2] . '" data-lightbox="example-set" data-title-wthree="Lorem Ipsum etc etc.">';
        echo '<figure><img src="' . $row[2] . '" class="img-fluid"> </figure></a>';
        echo '</div></div>';
    }


    // tidy & close

    pg_free_result($result);
    pg_close($db_connect);


?>





        </div>

    <script src="js/jquery-2.2.3.min.js"></script>
     <script src='js/aos.js'></script>
    <script>
        AOS.init({
            easing: 'ease-out-back',
            duration: 1000
        });
    </script>

    <!--  light box js -->
    <script src="js/lightbox-plus-jquery.min.js">
    </script>
    <!-- //light box js-->
  <!--/ start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear'
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->

    <!-- //js -->

    <script src="js/bootstrap.js"></script>

</body>

</html>
