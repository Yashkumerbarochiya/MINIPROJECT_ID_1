<?php
session_start();
if ($_SESSION['u_name'] == null) {
  header('location:login.php');
}
if ($_SESSION['u_name']) {

  error_reporting(0);
?>
<?php
$con = mysqli_connect("localhost", "root", "", "resume");
$query = "select * from resume_data where user_id='".$_SESSION['u_name']."'";
$res = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($res)) {



    header('content-type:image/png');
    $font = "FONT/Lato-Bold.ttf";
    $image = imagecreatefrompng("1.png");
    $color = imagecolorallocate($image, 255, 255, 255);
    $colorA = imagecolorallocate($image, 0, 0, 0);

    $imagep = imagecreatefrompng("../../".$row ['image']);
    imagecopy($image,$imagep,8,9,0,0,900,1080);



    $name = $row['full_name'];
    imagettftext($image, 110, 0, 950, 580, $color, $font, $name);

    $ex = $row['expert'];
    imagettftext($image, 50, 0, 970, 685, $color, $font, $ex);



    $educa = "EDUCATION";
    imagettftext($image, 50, 0, 230, 1265, $color, $font, $educa);

    $educaAB = $row['yearA'];
    imagettftext($image, 50, 0, 230, 1430, $color, $font, $educaAB);

    $educaAA = $row['eduA'];
    imagettftext($image, 50, 0, 230, 1530, $color, $font, $educaAA);

    $educaBB = $row['yearB'];
    imagettftext($image, 50, 0, 230, 1700, $color, $font, $educaBB);

    $educaBA = $row['eduB'];
    imagettftext($image, 50, 0, 230, 1800, $color, $font, $educaBA);



    $langu = "LANGUAGES";
    imagettftext($image, 50, 0, 230, 2010, $color, $font, $langu);

    $languA = $row['lA'];
    imagettftext($image, 50, 0, 230, 2160, $color, $font, $languA);

    $languB = $row['lB'];
    imagettftext($image, 50, 0, 230, 2290, $color, $font, $languB);

    $languC = $row['lC'];
    imagettftext($image, 50, 0, 230, 2420, $color, $font, $languC);






    $phone = "Phone";
    imagettftext($image, 40, 0, 225, 2730, $color, $font, $phone);

    $phoneA = $row['phone'];
    imagettftext($image, 40, 0, 225, 2810, $color, $font, $phoneA);



    $email = "Email";
    imagettftext($image, 40, 0, 225, 2965, $color, $font, $email);

    $emailA = $row['email'];
    imagettftext($image, 40, 0, 225, 3046, $color, $font, $emailA);
    


    $address = "Address";
    imagettftext($image, 40, 0, 225, 3210, $color, $font, $address);

    $addressA = $row['address'];
    imagettftext($image, 40, 0, 225, 3291, $color, $font, $addressA);




    
    $address = "ABOUT ME";
    imagettftext($image, 40, 0, 1065, 980, $colorA, $font, $address);

    $addressA = wordwrap($row['about'], 50, "\n", true);
    imagettftext($image, 40, 0, 1065, 1100, $colorA, $font, $addressA);


    $experie = "WORK EXPERIENCE";
    imagettftext($image, 40, 0, 1065, 1570, $colorA, $font, $experie);

    $expeyearA = wordwrap($row['expeyearA'], 50, "\n", true);
    imagettftext($image, 40, 0,  1065, 1700, $colorA, $font, $expeyearA);

    $expetitleA = wordwrap($row['expetitleA'], 50, "\n", true);
    imagettftext($image, 40, 0, 1340, 1700, $colorA, $font, $expetitleA);

    $experieA = wordwrap($row['expeA'], 40, "\n", true);
    imagettftext($image, 40, 0, 1340, 1800, $colorA, $font, $experieA);



    $expeyearB = wordwrap($row['expeyearB'], 50, "\n", true);
    imagettftext($image, 40, 0, 1065, 2270, $colorA, $font, $expeyearB);

    $expetitleB = wordwrap($row['expetitleB'], 50, "\n", true);
    imagettftext($image, 40, 0, 1340, 2270, $colorA, $font, $expetitleB);

    $experieB = wordwrap($row['expeB'], 40, "\n", true);
    imagettftext($image, 40, 0, 1340, 2370, $colorA, $font, $experieB);



    $skill = "SKILL";
    imagettftext($image, 40, 0, 1065, 2940, $colorA, $font, $skill);

    $skillA = $row['skillA'];
    imagettftext($image, 40, 0, 1065, 3070, $colorA, $font, $skillA);

    $skillB = $row['skillB'];
    imagettftext($image, 40, 0, 1520, 3070, $colorA, $font, $skillB);

    $skillC = $row['skillC'];
    imagettftext($image, 40, 0, 1975, 3070, $colorA, $font, $skillC);

    $skillD = $row['skillD'];
    imagettftext($image, 40, 0, 1065, 3190, $colorA, $font, $skillD);

    $skillE = $row['skillE'];
    imagettftext($image, 40, 0, 1520, 3190, $colorA, $font, $skillE);




    imagepng($image);
    imagedestroy($image);
}
?><?php
}
?>