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

?>
<?php
$con = mysqli_connect("localhost", "root", "","resume");
$id=$_REQUEST['id'];
$q="delete from template where id='$id' ";
$result=mysqli_query($con,$q);
if($result)
{
	echo "<script>window.location='editdelete.php'</script>";
}
else 
{
	echo "<script>alert('Something Went Wrong')</script>";
}
?>
<?php
}	
?>