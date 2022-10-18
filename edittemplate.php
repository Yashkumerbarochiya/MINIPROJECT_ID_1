<?php
    session_start();
    if ($_SESSION['u_name'] == null)
    {
        header('location:login.php');
    }
    if($_SESSION['u_name'] ) {
        
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Book</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <?php include('header.php') ?>


    <!-- Start about Area -->
    <?php
    $r = $_REQUEST['id'];
    $con = mysqli_connect("localhost", "root", "", "resume");
    $query = "select * from template where id=$r";
    $res = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($res)) {
    ?>
        <section class="section-gap info-area" id="about">
            <div class="container">
                <div class="single-info row mt-40 align-items-center">
                    <div class="col-lg-6 col-md-12 text-center no-padding info-left">
                        <div class="info-thumb">
                            <img src="admin/<?php echo $row['logic_file'] ?>" class="img-fluid info-img" alt="">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 no-padding info-rigth">
                        <div class="info-content">
                            <h5 class="pb-30"><?php echo $row['temp_id'] ?></h5> <!-- Template ID -->
                            <h2 class="pb-30"><?php echo $row['temp_name'] ?></h2><!-- Template Name -->
                            <h5 class="pb-30"><?php echo $row['about_temp'] ?></h5><!-- Template Name -->



                            <div class="">
                                <div class="single-footer-widgetx">
                                    <div class="" id="mc_embed_signup">
                                        <a href="templateprofile.php" target="_blenk"><input class="click-btn btn btn-default" type="submit" value="GO TO RESUME PROFILR EDIT PAGE"></a>
                                        <br>
                                        <br>
                                        <br>
                                        <a href="Admin/<?php echo $row['logic_file'] ?>" target="_blenk"><input type="submit" class="click-btn btn btn-default" value="GENERETE"></a>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php
    }
    ?>


    <?php include('footer.php') ?>

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="js/easing.min.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
<?php
    }
?>