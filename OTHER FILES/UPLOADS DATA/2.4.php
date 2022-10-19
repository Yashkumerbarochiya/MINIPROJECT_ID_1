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
    $image = imagecreatefrompng("2.4.png");
    $color = imagecolorallocate($image, 255, 255, 255);
    $colorA = imagecolorallocate($image, 0, 0, 0);

    $imagep = imagecreatefrompng("../../".$row ['image']);
    imagecopy($image,$imagep,8,9,0,0,900,1080);



    $name = $row['full_name'];
    imagettftext($image, 110, 0, 1020, 500, $color, $font, $name);

    $ex = $row['expert'];
    imagettftext($image, 50, 0, 1020, 650, $color, $font, $ex);



    $educa = "EDUCATION";
    imagettftext($image, 50, 0, 260, 1215, $color, $font, $educa);

    $educaAB = $row['yearA'];
    imagettftext($image, 45, 0, 190, 1400, $colorA, $font, $educaAB);

    $educaAA = $row['eduA'];
    imagettftext($image, 45, 0, 190, 1500, $colorA, $font, $educaAA);

    $educaBB = $row['yearB'];
    imagettftext($image, 45, 0, 190, 1670, $colorA, $font, $educaBB);

    $educaBA = $row['eduB'];
    imagettftext($image, 45, 0, 190, 1770, $colorA, $font, $educaBA);



    $langu = "LANGUAGES";
    imagettftext($image, 50, 0, 257, 2090, $color, $font, $langu);

    $languA = $row['lA'];
    imagettftext($image, 45, 0, 190, 2250, $colorA, $font, $languA);

    $languB = $row['lB'];
    imagettftext($image, 45, 0, 190, 2380, $colorA, $font, $languB);

    $languC = $row['lC'];
    imagettftext($image, 45, 0, 190, 2510, $colorA, $font, $languC);



    $skill = "SKILL";
    imagettftext($image, 50, 0, 370, 2740, $color, $font, $skill);

    $skillA = $row['skillA'];
    imagettftext($image, 45, 0, 190, 2880, $colorA, $font, $skillA);

    $skillB = $row['skillB'];
    imagettftext($image, 45, 0, 190, 3010, $colorA, $font, $skillB);

    $skillC = $row['skillC'];
    imagettftext($image, 45, 0, 190, 3140, $colorA, $font, $skillC);

    $skillD = $row['skillD'];
    imagettftext($image, 45, 0, 190, 3270, $colorA, $font, $skillD);

    $skillE = $row['skillE'];
    imagettftext($image, 45, 0, 190, 3400, $colorA, $font, $skillE);








    


    $addressA = wordwrap($row['about'], 55, "\n", true);
    imagettftext($image, 40, 0, 1065, 1370, $colorA, $font, $addressA);





    $expeyearA = wordwrap($row['expeyearA'], 50, "\n", true);
    imagettftext($image, 40, 0,  1065, 2050, $colorA, $font, $expeyearA);

    $expetitleA = wordwrap($row['expetitleA'], 50, "\n", true);
    imagettftext($image, 40, 0, 1340, 2050, $colorA, $font, $expetitleA);

    $experieA = wordwrap($row['expeA'], 40, "\n", true);
    imagettftext($image, 40, 0, 1340, 2150, $colorA, $font, $experieA);



    $expeyearB = wordwrap($row['expeyearB'], 50, "\n", true);
    imagettftext($image, 40, 0, 1065, 2535, $colorA, $font, $expeyearB);

    $expetitleB = wordwrap($row['expetitleB'], 50, "\n", true);
    imagettftext($image, 40, 0, 1340, 2535, $colorA, $font, $expetitleB);

    $experieB = wordwrap($row['expeB'], 40, "\n", true);
    imagettftext($image, 40, 0, 1340, 2635, $colorA, $font, $experieB);




    $phoneA = $row['phone'];
    imagettftext($image, 40, 0, 1120, 3265, $colorA, $font, $phoneA);


    $emailA = $row['email'];
    imagettftext($image, 40, 0, 1840, 3260, $colorA, $font, $emailA);
    

    $addressA = $row['address'];
    imagettftext($image, 40, 0, 1120, 3415, $colorA, $font, $addressA);



    imagepng($image);
    imagedestroy($image);
}
?><?php
}
?>