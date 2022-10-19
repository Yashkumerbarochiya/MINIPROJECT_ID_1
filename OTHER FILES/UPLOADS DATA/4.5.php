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
    $image = imagecreatefrompng("4.5.png");
    $color = imagecolorallocate($image, 255, 255, 255);
    $colorA = imagecolorallocate($image, 0, 0, 0);

    $imagep = imagecreatefrompng("../../".$row ['image']);
    imagecopy($image,$imagep,232,154,0,0,900,1080);



    $name = $row['full_name'];
    imagettftext($image, 100, 0, 1265, 340, $color, $font, $name);

    $ex = $row['expert'];
    imagettftext($image, 50, 0, 1265, 455, $color, $font, $ex);



        
    $address = "ABOUT ME";
    imagettftext($image, 40, 0, 1265, 680, $color, $font, $address);

    $addressA = wordwrap($row['about'], 50, "\n", true);
    imagettftext($image, 40, 0, 1265, 800, $color, $font, $addressA);




    $educa = "EDUCATION";
    imagettftext($image, 50, 0, 440, 1550, $colorA, $font, $educa);

    $educaAB = $row['yearA'];
    imagettftext($image, 45, 0, 440, 1680, $colorA, $font, $educaAB);

    $educaAA = $row['eduA'];
    imagettftext($image, 45, 0, 440, 1760, $colorA, $font, $educaAA);

    $educaBB = $row['yearB'];
    imagettftext($image, 45, 0, 440, 1890, $colorA, $font, $educaBB);

    $educaBA = $row['eduB'];
    imagettftext($image, 45, 0, 440, 1970, $colorA, $font, $educaBA);



    $langu = "LANGUAGES";
    imagettftext($image, 50, 0, 440, 2160, $colorA, $font, $langu);

    $languA = $row['lA'];            
    imagettftext($image, 45, 0, 440, 2290, $colorA, $font, $languA);

    $languB = $row['lB'];            
    imagettftext($image, 45, 0, 440, 2410, $colorA, $font, $languB);

    $languC = $row['lC'];            
    imagettftext($image,  45, 0, 440, 2530, $colorA, $font, $languC);






    $phone = "Phone";
    imagettftext($image, 45, 0, 440, 2780, $colorA, $font, $phone);

    $phoneA = $row['phone'];
    imagettftext($image, 40, 0, 440, 2860, $colorA, $font, $phoneA);



    $email = "Email";
    imagettftext($image, 45, 0, 440, 2995, $colorA, $font, $email);

    $emailA = $row['email'];
    imagettftext($image, 40, 0, 440, 3076, $colorA, $font, $emailA);
    


    $address = "Address";
    imagettftext($image, 45, 0, 440, 3240, $colorA, $font, $address);

    $addressA = $row['address'];
    imagettftext($image, 40, 0, 440, 3321, $colorA, $font, $addressA);







    $experie = "WORK EXPERIENCE";
    imagettftext($image, 55, 0, 1265, 1570, $colorA, $font, $experie);

    $expeyearA = wordwrap($row['expeyearA'], 50, "\n", true);
    imagettftext($image, 45, 0,  1265, 1700, $colorA, $font, $expeyearA);

    $expetitleA = wordwrap($row['expetitleA'], 50, "\n", true);
    imagettftext($image, 48, 0, 1490, 1700, $colorA, $font, $expetitleA);

    $experieA = wordwrap($row['expeA'], 40, "\n", true);
    imagettftext($image, 40, 0, 1490, 1800, $colorA, $font, $experieA);



    $expeyearB = wordwrap($row['expeyearB'], 50, "\n", true);
    imagettftext($image, 45, 0, 1265, 2270, $colorA, $font, $expeyearB);

    $expetitleB = wordwrap($row['expetitleB'], 50, "\n", true);
    imagettftext($image, 48, 0, 1490, 2270, $colorA, $font, $expetitleB);

    $experieB = wordwrap($row['expeB'], 40, "\n", true);
    imagettftext($image, 40, 0, 1490, 2370, $colorA, $font, $experieB);



    $skill = "SKILL";
    imagettftext($image, 55, 0, 1265, 2940, $colorA, $font, $skill);

    $skillA = $row['skillA'];
    imagettftext($image, 40, 0, 1265, 3070, $colorA, $font, $skillA);

    $skillB = $row['skillB'];
    imagettftext($image, 40, 0, 1690, 3070, $colorA, $font, $skillB);

    $skillC = $row['skillC'];
    imagettftext($image, 40, 0, 2020, 3070, $colorA, $font, $skillC);

    $skillD = $row['skillD'];
    imagettftext($image, 40, 0, 1265, 3230, $colorA, $font, $skillD);

    $skillE = $row['skillE'];
    imagettftext($image, 40, 0, 1690, 3230, $colorA, $font, $skillE);




    imagepng($image);
    imagedestroy($image);
}
?><?php
}
?>