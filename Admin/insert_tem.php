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


    // $query = "insert into resume_data(id,image,full_name,expert,about,lA,lB,lC,address,phone,email,eduA,yearA,eduB,yearB,expeA,expeB,skillA,skillB,skillC,skillD,skillE) values('NULL','$dpath','" . $_POST['full_name'] . "','" . $_POST['expert'] . "','" . $_POST['about_me'] . "','" . $_POST['lA'] . "','" . $_POST['lB'] . "','" . $_POST['lC'] . "','" . $_POST['address'] . "','" . $_POST['phone'] . "','" . $_POST['email'] . "','" . $_POST['in_A'] . "','" . $_POST['iy_A'] . "','" . $_POST['in_B'] . "','" . $_POST['iy_B'] . "','" . $_POST['exp_A'] . "','" . $_POST['exp_B'] . "','" . $_POST['skill_A'] . "','" . $_POST['skill_B'] . "','" . $_POST['skill_C'] . "','" . $_POST['skill_D'] . "','" . $_POST['skill_E'] . "')";



        $con = mysqli_connect("localhost", "root", "", "resume");

        $query = "insert into template(id,temp_id,temp_name,about_temp,example_image,kit_image,logic_file)values('NULL','" . $_POST['t_id'] . "','" . $_POST['t_name'] . "','" . $_POST['t_about'] . "','$dpath','$dpathB','$dpathC')";

        $result = mysqli_query($con, $query);

        if ($result) {
            echo "<script>alert('inserted')</script>";
        } else {
            echo "<script>alert('something went wrong')</script>";
        }


  }
  header('location:addtemplates.php');

?><?php
}	
?>