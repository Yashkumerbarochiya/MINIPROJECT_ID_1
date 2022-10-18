<?php
    session_start();

    unset($_SESSION['u_name']);
    unset($_SESSION['password']);
    echo "<script>window.location='index.php'</script>";
?>