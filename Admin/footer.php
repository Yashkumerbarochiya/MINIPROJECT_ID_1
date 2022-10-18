<?php
    session_start();
    if ($_SESSION['email'] == null)
    {
        header('location:login.php');
    }
    if($_SESSION['email'] ) {
        
error_reporting(0);
?>
<footer class="footer"> © 2022 MINI PROJECT YASH | KRUPA | DEEP </footer>
<?php
}	
?>