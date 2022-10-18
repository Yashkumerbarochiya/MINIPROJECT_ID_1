<?php
    session_start();

    unset($_SESSION['email']);
    unset($_SESSION['password']);
    echo "<script>window.location='index.php'</script>";
?>