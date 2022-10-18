<?php
session_start();
if ($_SESSION['email'] == null) {
    header('location:login.php');
}
if ($_SESSION['email']) {

    error_reporting(0);
?>
    <header class="topbar">
        <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">
                    <!-- Logo icon --><b>
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->

                        <!-- Light Logo icon -->
                        <img src="assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text --><span>

                        <!-- Light Logo text -->
                        <img src="" class="light-logo" alt="" />
                    </span>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav mr-auto mt-md-0">


                </ul>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <ul class="navbar-nav my-lg-0">
                    <!-- ============================================================== -->
                    <!-- Profile -->
                    <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "resume");
                    $query = "select * from admin where email='" . $_SESSION['email'] . "'";
                    $res = mysqli_query($con, $query);
                    while ($row = mysqli_fetch_array($res)) {
                    ?>
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="admindata.php" aria-expanded="false">Hello, <?php echo $row['full_name'] ?></a>
                    <?php
                    }
                    ?>
                        </li>

                </ul>
            </div>
        </nav>
    </header>
<?php
}
?>