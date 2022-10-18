<?php
    session_start();
    if ($_SESSION['email'] == null)
    {
        header('location:login.php');
    }
    if($_SESSION['email'] ) {
        
error_reporting(0);
?>
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li> <a class="waves-effect waves-dark" href="index.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                </li>

                <li> <a class="waves-effect waves-dark" href="x.php" aria-expanded="false"><i class="mdi mdi-checkerboard"></i><span class="hide-menu">TEMPLATES</span></a>
                    <ul id="sidebarnav">

                        <li> <a class="waves-effect waves-dark" href="addtemplates.php" aria-expanded="false"><span class="hide-menu">ADD TEMPLATES</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="editdelete.php" aria-expanded="false"><span class="hide-menu">EDIT TEMPLATES</span></a></li>
                    </ul>
                </li>

                <li> <a class="waves-effect waves-dark" href="viwealltemplates.php" aria-expanded="false"><i class="mdi mdi-camera-burst"></i><span class="hide-menu">Viwe All Templates</span></a>

                <li> <a class="waves-effect waves-dark" href="viewusers.php" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">TABLE</span></a>
                </li>
                
                </li>
                <li> <a class="waves-effect waves-dark" href="admindata.php" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">ADMIN</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="logout.php" aria-expanded="false"><i class="mdi mdi-logout"></i><span class="hide-menu">ADMIN</span></a>
                </li>
                </li>
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>

</aside><?php
}	
?>