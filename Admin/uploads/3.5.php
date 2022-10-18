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
    $image = imagecreatefrompng("3.5.png");
    $color = imagecolorallocate($image, 255, 255, 255);
    $colorA = imagecolorallocate($image, 33, 34, 46);

    $imagep = imagecreatefrompng("../../".$row ['image']);
    imagecopy($image,$imagep,152,227,0,0,900,1080);




    $name = $row['full_name'];
    imagettftext($image, 110, 0, 1120, 360, $color, $font, $name);

    $ex = $row['expert'];
    imagettftext($image, 50, 0, 1120, 510, $color, $font, $ex);



    $addressA = wordwrap($row['about'], 55, "\n", true);
    imagettftext($image, 41, 0, 1120, 750, $color, $font, $addressA);



    $educa = "EDUCATION";
    imagettftext($image, 60, 0, 320, 1450, $color, $font, $educa);

    $educaAB = $row['yearA'];
    imagettftext($image, 45, 0, 320, 1580, $color, $font, $educaAB);

    $educaAA = $row['eduA'];
    imagettftext($image, 45, 0, 320, 1680, $color, $font, $educaAA);

    $educaBB = $row['yearB'];
    imagettftext($image, 45, 0, 320, 1810, $color, $font, $educaBB);

    $educaBA = $row['eduB'];
    imagettftext($image, 45, 0, 320, 1910, $color, $font, $educaBA);



    $langu = "LANGUAGES";
    imagettftext($image, 60, 0, 320, 2120, $color, $font, $langu);

    $languA = $row['lA'];
    imagettftext($image, 45, 0, 320, 2260, $color, $font, $languA);

    $languB = $row['lB'];
    imagettftext($image, 45, 0, 320, 2390, $color, $font, $languB);

    $languC = $row['lC'];
    imagettftext($image, 45, 0, 320, 2520, $color, $font, $languC);



    $skill = "SKILL";
    imagettftext($image, 60, 0, 320, 2770, $color, $font, $skill);

    $skillA = $row['skillA'];
    imagettftext($image, 45, 0, 320, 2900, $color, $font, $skillA);

    $skillB = $row['skillB'];
    imagettftext($image, 45, 0, 320, 3030, $color, $font, $skillB);

    $skillC = $row['skillC'];
    imagettftext($image, 45, 0, 320, 3160, $color, $font, $skillC);

    $skillD = $row['skillD'];
    imagettftext($image, 45, 0, 320, 3290, $color, $font, $skillD);

    $skillE = $row['skillE'];
    imagettftext($image, 45, 0, 320, 3420, $color, $font, $skillE);








    







    $experie = "WORK EXPERIENCE";
    imagettftext($image, 60, 0, 1235, 1450, $colorA, $font, $experie);

    $expeyearA = wordwrap($row['expeyearA'], 50, "\n", true);
    imagettftext($image, 20, 0,  1235, 1587, $color, $font, $expeyearA);

    $expetitleA = wordwrap($row['expetitleA'], 50, "\n", true);
    imagettftext($image, 40, 0, 1470, 1600, $colorA, $font, $expetitleA);

    $experieA = wordwrap($row['expeA'], 37, "\n", true);
    imagettftext($image, 40, 0, 1470, 1700, $colorA, $font, $experieA);



    $expeyearB = wordwrap($row['expeyearB'], 50, "\n", true);
    imagettftext($image, 20 , 0, 1235, 2238, $color, $font, $expeyearB);

    $expetitleB = wordwrap($row['expetitleB'], 50, "\n", true);
    imagettftext($image, 40, 0, 1470, 2250, $colorA, $font, $expetitleB);

    $experieB = wordwrap($row['expeB'], 37, "\n", true);
    imagettftext($image, 40, 0, 1470, 2368, $colorA, $font, $experieB);



    $experie = "WORK EXPERIENCE";
    imagettftext($image, 60, 0, 1235, 2900, $colorA, $font, $experie);
    
    $phone = "Phone";
    imagettftext($image, 40, 0, 1235, 3050, $colorA, $font, $phone);

    $phoneA = $row['phone'];
    imagettftext($image, 40, 0, 1235, 3145, $colorA, $font, $phoneA);


    
    $email = "Email";
    imagettftext($image, 40, 0, 1800, 3050, $colorA, $font, $email);

    $emailA = $row['email'];
    imagettftext($image, 40, 0, 1800, 3145, $colorA, $font, $emailA);
    

    
    $address = "Address";
    imagettftext($image, 40, 0, 1235,  3290, $colorA, $font, $address);

    $addressA = $row['address'];
    imagettftext($image, 40, 0, 1235, 3385, $colorA, $font, $addressA);



    imagepng($image);
    imagedestroy($image);
}
?><?php
}
?>