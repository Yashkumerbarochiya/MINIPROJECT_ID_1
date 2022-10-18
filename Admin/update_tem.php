<?php
    session_start();
    if ($_SESSION['email'] == null)
    {
        header('location:login.php');
    }
    if($_SESSION['email'] ) {
        
error_reporting(0);
?>
<?php

$r = $_POST['idx'];
  $con = mysqli_connect("localhost", "root", "", "resume");
  if (isset($_POST["ok"])) {


    if (($_FILES['fileToUpload']['error'] == UPLOAD_ERR_OK)) {
      echo "Hello";
      $filetmppath = $_FILES['fileToUpload']['tmp_name'];
      $fname = $_FILES['fileToUpload']['name'];
      $filetype = $_FILES['fileToUpload']['type'];

      $fnamecmps = explode('.', $fname);

      $fileextension = strtolower(end($fnamecmps));
      echo $fileextension;

      $newfilename = ($fname);
      echo $fname;

      $extensionlist = array('jpg', 'jpeg', 'png', 'svg');

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



    if (($_FILES['fileToUploadB']['error'] == UPLOAD_ERR_OK)) {
      echo "Hello";
      $filetmppathB = $_FILES['fileToUploadB']['tmp_name'];
      $fnameB = $_FILES['fileToUploadB']['name'];
      $filetypeB = $_FILES['fileToUploadB']['type'];

      $fnamecmpsB = explode('.', $fnameB);

      $fileextensionB = strtolower(end($fnamecmpsB));
      echo $fileextensionB;

      $newfilenameB = ($fnameB);
      echo $fnameB;

      $extensionlistB = array('jpg', 'jpeg', 'png', 'svg');

      if (in_array($fileextensionB, $extensionlistB)) {

        $uploaddirB = "uploads/";
        $dpathB = $uploaddirB . $newfilenameB;

        if (move_uploaded_file($filetmppathB, $dpathB)) {
          $messageB = "File uploaded successfully..!";
          $colorB = 1;
        } else {
          $messageB = "File upload error..!";
        }
      } else {
        $messageB = "Invalid file extension..!<br>Valid file extension is " . $extensionlistB;
      }
    }


    if (($_FILES['fileToUploadC']['error'] == UPLOAD_ERR_OK)) {
      echo "Hello";
      $filetmppathC = $_FILES['fileToUploadC']['tmp_name'];
      $fnameC = $_FILES['fileToUploadC']['name'];
      $filetypeC = $_FILES['fileToUploadC']['type'];

      $fnamecmpsC = explode('.', $fnameC);

      $fileextensionC = strtolower(end($fnamecmpsC));
      echo $fileextensionC;

      $newfilenameC = ($fnameC);
      echo $fnameC;

      $extensionlistC = array('php');

      if (in_array($fileextensionC, $extensionlistC)) {

        $uploaddirC = "uploads/";
        $dpathC = $uploaddirC . $newfilenameC;

        if (move_uploaded_file($filetmppathC, $dpathC)) {
          $messageC = "File uploaded successfully..!";
          $colorC = 1;
        } else {
          $messageC = "File upload error..!";
        }
      } else {
        $messageC = "Invalid file extension..!<br>Valid file extension is " . $extensionlistC;
      }
    }

    // $q = "update template set temp_id='" . $_POST['t_id'] . "',temp_name='" . $_POST['t_name'] . "',about_temp='" . $_POST['t_about'] . "',example_image='$dpath',kit_image='$dpathB',logic_file='$dpathC' where id=$r";    


    if ($fname == null && $fnameB == null && $fnameC == null) {
      $q = "update template set temp_id='" . $_POST['t_id'] . "',temp_name='" . $_POST['t_name'] . "',about_temp='" . $_POST['t_about'] . "' where id=$r";
    }
    else if($fname == null && $fnameB == null){
      $q = "update template set temp_id='" . $_POST['t_id'] . "',temp_name='" . $_POST['t_name'] . "',about_temp='" . $_POST['t_about'] . "',logic_file='$dpathC' where id=$r";
    }
    else if($fname == null && $fnameC == null){
      $q = "update template set temp_id='" . $_POST['t_id'] . "',temp_name='" . $_POST['t_name'] . "',about_temp='" . $_POST['t_about'] . "',kit_image='$dpathB' where id=$r";
    }
    else if($fnameB == null && $fnameC == null){
      $q = "update template set temp_id='" . $_POST['t_id'] . "',temp_name='" . $_POST['t_name'] . "',about_temp='" . $_POST['t_about'] . "',example_image='$dpath' where id=$r";
    }
    else if($fname == null){
      $q = "update template set temp_id='" . $_POST['t_id'] . "',temp_name='" . $_POST['t_name'] . "',about_temp='" . $_POST['t_about'] . "',kit_image='$dpathB',logic_file='$dpathC' where id=$r";
    }
    else if($fnameB == null){
      $q = "update template set temp_id='" . $_POST['t_id'] . "',temp_name='" . $_POST['t_name'] . "',about_temp='" . $_POST['t_about'] . "',example_image='$dpath',logic_file='$dpathC' where id=$r";
    }
    else if($fnameC == null){
      $q = "update template set temp_id='" . $_POST['t_id'] . "',temp_name='" . $_POST['t_name'] . "',about_temp='" . $_POST['t_about'] . "',example_image='$dpath',kit_image='$dpathB' where id=$r";
    }
    else {
      $q = "update template set temp_id='" . $_POST['t_id'] . "',temp_name='" . $_POST['t_name'] . "',about_temp='" . $_POST['t_about'] . "',example_image='$dpath',kit_image='$dpathB',logic_file='$dpathC' where id=$r";
    }


    $k = mysqli_query($con, $q);
    echo $q;
    if ($k) {
      header('location:editdelete.php');
    } else {
      echo "<script>
    alert('something went wrong')
</script>";
    }
  }
?><?php
}	
?>