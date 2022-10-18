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

    <!-- <?php
            //$con = mysqli_connect("localhost","root","","fileupload");
            //$q = "select * from info";
            //$r = mysqli_query($con,$q);
            //while ($row = mysqli_fetch_array($r)) {
            //echo "<img src='".$row['photo']."' width='250' height='200'  />";	
            //}
            ?> -->

    <!-- Start about Area -->
    <section class="section-gap info-area" id="about">
        <div class="container">
            <div class="single-info row mt-40 align-items-center">
                <div class="col-lg-12 col-md-12 no-padding info-rigth">
                    <div class="info-content">
                        <h2 class="pb-30">Your Information for the resume<sup>*</sup></h2><!-- Template Name -->
                        <div class="">
                            <div class="single-footer-widgetx">

                                <?php
                                $con = mysqli_connect("localhost", "root", "", "resume");
                                $query = "select * from resume_data where user_id='".$_SESSION['u_name']."'";
                                $res = mysqli_query($con, $query);
                                while ($row = mysqli_fetch_array($res)) {
                                ?>

                                    <form action="upload.php" method="POST" enctype="multipart/form-data">
                                        <br>
                                        <h3 class="pb-30">About you</h3>

                                        <label class="formlable">Your Photo <b>(Photo Must be a in .PNG and size need (900 width x 1080 height) Pixel)<sup>*</sup></b></label>
                                        <br>
                                        <img src="<?php echo $row['image'] ?>"  class="form-control" style="width:250px;heigth:250px" >
                                        <br>
                                        <input type="file" class="form-control" name="fileToUpload" value="<?php echo $row['image'] ?>">

                                        <br>
                                        <label class="formlable">Full Name</label>
                                        <input type="text" class="form-control" name="full_name" placeholder="e.g. Elon Musk" value="<?php echo $row['full_name'] ?>" required>

                                        <br>

                                        <label class="formlable">Expert</label>
                                        <input type="text" class="form-control" name="expert" placeholder="e.g. Full stack developer" value="<?php echo $row['expert'] ?>" required>

                                        <br>


                                        <label class="formlable">About Me</label>

                                        <textarea class="form-control" name="about_me" placeholder="An engineer or developer who works on both the front end (client-side) and the back end (server-side) of a website or application is called a full-stack developer. They may handle projects involving databases, APIs, or designing user-facing websites, as well as interacting with clients during development." ><?php echo $row['about'] ?></textarea required>

                                        <br>

                                        <label class="formlable">Languages</label>
                                        <input type="text" class="form-control" name="lA" placeholder="English" value="<?php echo $row['lA'] ?>" required>
                                        <br>
                                        <input type="text" class="form-control" name="lB" placeholder="Russian" value="<?php echo $row['lB'] ?>" required>
                                        <br>
                                        <input type="text" class="form-control" name="lC" placeholder="Hindi" value="<?php echo $row['lC'] ?>" required>

                                        <br>
                                        <br>
                                        <br>

                                        <h3 class="pb-30">Contact Info</h3>

                                        <label class="formlable">Address</label>
                                        <input type="text" class="form-control" name="address" placeholder="New Your, USA." value="<?php echo $row['address'] ?>" required>
                                        <br>
                                        <label class="formlable">Phone</label>
                                        <input type="text" class="form-control" name="phone" placeholder="+1 36595 26544" value="<?php echo $row['phone'] ?>" required>
                                        <br>
                                        <label class="formlable">Email</label>
                                        <input type="text" class="form-control" name="email" placeholder="elonmusk@gmail.com" value="<?php echo $row['email'] ?>" required>

                                        <br>
                                        <br>
                                        <br>

                                        <h3 class="pb-30">Education Info</h3>


                                        <label class="formlable">Institute Name</label>
                                        <input type="text" class="form-control" name="in_A" placeholder="Princeton University" value="<?php echo $row['eduA'] ?>" required>
                                        <br>
                                        <label class="formlable">Year</label>
                                        <input type="text" class="form-control" name="iy_A" placeholder="2018 - 2021" value="<?php echo $row['yearA'] ?>" required>

                                        <br>
                                        <br>

                                        <label class="formlable">Institute Name</label>
                                        <input type="text" class="form-control" name="in_B" placeholder="Harvard University" value="<?php echo $row['eduB'] ?>" required>
                                        <br>
                                        <label class="formlable">year</label>
                                        <input type="text" class="form-control" name="iy_B" placeholder="2021 - 2023" value="<?php echo $row['yearB'] ?>" required>





                                        <br>
                                        <br>
                                        <br>

                                        <h3 class="pb-30">Experience Info</h3>


                                        <label class="formlable">year</label>
                                        <input type="text" class="form-control" name="exp_year_A" placeholder="2021 - 2023" value="<?php echo $row['expeyearA'] ?>" required>
                                        <br>
                                        <label class="formlable">Title</label>
                                        <input type="text" class="form-control" name="exp_title_A" placeholder="IOS Devloper in Microsoft OR College Resume Buidel Web Project" value="<?php echo $row['expetitleB'] ?>" required>
                                        <br>
                                        <label class="formlable">About</label>
                                        <textarea class="form-control" name="exp_A" placeholder="An engineer or developer who works on both the front end (client-side) and the back end (server-side) of a website or application is called a full-stack developer. They may handle projects involving databases, APIs, or designing user-facing websites, as well as interacting with clients during development." ><?php echo $row['expeA'] ?></textarea required>

                                        <br>
                                        <br>
                                        <br>

                                        <label class="formlable">year</label>
                                        <input type="text" class="form-control" name="exp_year_B" placeholder="2021 - 2023" value="<?php echo $row['expeyearB'] ?>" required>
                                        <br>
                                        <label class="formlable">Title</label>
                                        <input type="text" class="form-control" name="exp_title_B" placeholder="Web Devloper in Webx OR College Shoping App in IOS" value="<?php echo $row['expetitleB'] ?>" required>
                                        <br>
                                        <label class="formlable">About</label>
                                        <textarea class="form-control" name="exp_B" placeholder="An engineer or developer who works on both the front end (client-side) and the back end (server-side) of a website or application is called a full-stack developer. They may handle projects involving databases, APIs, or designing user-facing websites, as well as interacting with clients during development." ><?php echo $row['expeB'] ?></textarea required>


                                        <br>
                                        <br>
                                        <br>

                                        <h3 class="pb-30">Skills</h3>




                                        <label class="formlable">Skill 1</label>
                                        <input type="text" class="form-control" name="skill_A" placeholder="Designing" value="<?php echo $row['skillA'] ?>" required>
                                        <br>
                                        <label class="formlable">Skill 2</label>
                                        <input type="text" class="form-control" name="skill_B" placeholder="Public speaking" value="<?php echo $row['skillB'] ?>" required>
                                        <br>
                                        <label class="formlable">Skill 3</label>
                                        <input type="text" class="form-control" name="skill_C" placeholder="Problem solving" value="<?php echo $row['skillC'] ?>" required>
                                        <br>
                                        <label class="formlable">Skill 4</label>
                                        <input type="text" class="form-control" name="skill_D" placeholder="MS office " value="<?php echo $row['skillD'] ?>" required>
                                        <br>
                                        <label class="formlable">Skill 5</label>
                                        <input type="text" class="form-control" name="skill_E" placeholder="Flutter" value="<?php echo $row['skillE'] ?>" required>

                                        <br>
                                        <br>


                                        <input type="submit" value="UPDATE" class="click-btn btn btn-default" name="ok">




                                    </form>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






        </div>
        </div>
    </section>


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