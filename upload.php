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
  if (isset($_POST["ok"])) {


    if (($_FILES['fileToUpload']['error'] == UPLOAD_ERR_OK)) {
      // echo "Hello";
      $filetmppath = $_FILES['fileToUpload']['tmp_name'];
      $fname = $_FILES['fileToUpload']['name'];
      $filetype = $_FILES['fileToUpload']['type'];

      $fnamecmps = explode('.', $fname);

      $fileextension = strtolower(end($fnamecmps));
      echo $fileextension;

      $newfilename = ($fname);
      echo $fname;

      $extensionlist = array('png');

      if (in_array($fileextension, $extensionlist)) {

        $uploaddir = "uploads/";
        $dpath = $uploaddir . $newfilename;

        if (move_uploaded_file($filetmppath, $dpath)) {
          $message = "File uploaded successfully..!";
          $color = 1;
        } else {
          $message = "File upload error..!";
        }
      } else {
        $message = "Invalid file extension..!<br>Valid file extension is " . $extensionlist;
      }
    }


    if ($fname == null) {
      $query = "update resume_data set full_name='" . $_POST['full_name'] . "',expert='" . $_POST['expert'] . "',about='" . $_POST['about_me'] . "',lA='" . $_POST['lA'] . "',lB='" . $_POST['lB'] . "',lC='" . $_POST['lC'] . "',address='" . $_POST['address'] . "',phone='" . $_POST['phone'] . "',email='" . $_POST['email'] . "',eduA='" . $_POST['in_A'] . "',yearA='" . $_POST['iy_A'] . "',eduB='" . $_POST['in_B'] . "',yearB='" . $_POST['iy_B'] . "',expeyearA='" . $_POST['exp_year_A'] . "', 	expetitleA='" . $_POST['exp_title_A'] . "',expeA='" . $_POST['exp_A'] . "',expeyearB='" . $_POST['exp_year_B'] . "', 	expetitleB='" . $_POST['exp_title_B'] . "',expeB='" . $_POST['exp_B'] . "',skillA='" . $_POST['skill_A'] . "',skillB='" . $_POST['skill_B'] . "',skillC='" . $_POST['skill_C'] . "',skillD='" . $_POST['skill_D'] . "',skillE='" . $_POST['skill_E'] . "' where user_id='".$_SESSION['u_name']."'";
    } else {
      $query = "update resume_data set image='$dpath',full_name='" . $_POST['full_name'] . "',expert='" . $_POST['expert'] . "',about='" . $_POST['about_me'] . "',lA='" . $_POST['lA'] . "',lB='" . $_POST['lB'] . "',lC='" . $_POST['lC'] . "',address='" . $_POST['address'] . "',phone='" . $_POST['phone'] . "',email='" . $_POST['email'] . "',eduA='" . $_POST['in_A'] . "',yearA='" . $_POST['iy_A'] . "',eduB='" . $_POST['in_B'] . "',yearB='" . $_POST['iy_B'] . "',expeyearA='" . $_POST['exp_year_A'] . "', 	expetitleA='" . $_POST['exp_title_A'] . "',expeA='" . $_POST['exp_A'] . "',expeyearB='" . $_POST['exp_year_B'] . "', 	expetitleB='" . $_POST['exp_title_B'] . "',expeB='" . $_POST['exp_B'] . "',skillA='" . $_POST['skill_A'] . "',skillB='" . $_POST['skill_B'] . "',skillC='" . $_POST['skill_C'] . "',skillD='" . $_POST['skill_D'] . "',skillE='" . $_POST['skill_E'] . "' where user_id='".$_SESSION['u_name']."'";
    }


    // $query = "insert into resume_data(id,image,full_name,expert,about,lA,lB,lC,address,phone,email,eduA,yearA,eduB,yearB,expeA,expeB,skillA,skillB,skillC,skillD,skillE) values('NULL','$dpath','" . $_POST['full_name'] . "','" . $_POST['expert'] . "','" . $_POST['about_me'] . "','" . $_POST['lA'] . "','" . $_POST['lB'] . "','" . $_POST['lC'] . "','" . $_POST['address'] . "','" . $_POST['phone'] . "','" . $_POST['email'] . "','" . $_POST['in_A'] . "','" . $_POST['iy_A'] . "','" . $_POST['in_B'] . "','" . $_POST['iy_B'] . "','" . $_POST['exp_A'] . "','" . $_POST['exp_B'] . "','" . $_POST['skill_A'] . "','" . $_POST['skill_B'] . "','" . $_POST['skill_C'] . "','" . $_POST['skill_D'] . "','" . $_POST['skill_E'] . "')";



    //  $query = "update resume_data set image='$dpath',full_name='" . $_POST['full_name'] . "',expert='" . $_POST['expert'] . "',about='" . $_POST['about_me'] . "',lA='" . $_POST['lA'] . "',lB='" . $_POST['lB'] . "',lC='" . $_POST['lC'] . "',address='" . $_POST['address'] . "',phone='" . $_POST['phone'] . "',email='" . $_POST['email'] . "',eduA='" . $_POST['in_A'] . "',yearA='" . $_POST['iy_A'] . "',eduB='" . $_POST['in_B'] . "',yearB='" . $_POST['iy_B'] . "',expeA='" . $_POST['exp_A'] . "',expeB='" . $_POST['exp_B'] . "',skillA='" . $_POST['skill_A'] . "',skillB='" . $_POST['skill_B'] . "',skillC='" . $_POST['skill_C'] . "',skillD='" . $_POST['skill_D'] . "',skillE='" . $_POST['skill_E'] . "' where username='".$_SESSION['user']."'";


    // $query = "update resume_data set image='$dpath',full_name='" . $_POST['full_name'] . "',expert='" . $_POST['expert'] . "',about='" . $_POST['about_me'] . "',lA='" . $_POST['lA'] . "',lB='" . $_POST['lB'] . "',lC='" . $_POST['lC'] . "',address='" . $_POST['address'] . "',phone='" . $_POST['phone'] . "',email='" . $_POST['email'] . "',eduA='" . $_POST['in_A'] . "',yearA='" . $_POST['iy_A'] . "',eduB='" . $_POST['in_B'] . "',yearB='" . $_POST['iy_B'] . "',expeA='" . $_POST['exp_A'] . "',expeB='" . $_POST['exp_B'] . "',skillA='" . $_POST['skill_A'] . "',skillB='" . $_POST['skill_B'] . "',skillC='" . $_POST['skill_C'] . "',skillD='" . $_POST['skill_D'] . "',skillE='" . $_POST['skill_E'] . "' where id='6'";


    $result = mysqli_query($con, $query);
    if ($result) {
      echo "<script>alert('inserted')</script>";
    } else {
      echo "<script>alert('something went wrong')</script>";
    }
  }
  header('location:templateprofile.php');
?>
<?php
}
?>