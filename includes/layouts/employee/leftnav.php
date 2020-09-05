 <nav class="navbar-left bg-light navbar-light fixed-top border border-top-0 border-left-0 border-bottom-0">
        <!-- Brand -->
        <div class="logo bg-white border border-top-0 border-left-0 border-right-0">
            <a class="brand" href="#" title="Leave Log">
                <img src="../assets/images/logo.png" alt="Leave Log" class="logo-bg" />
                <img src="../assets/images/logo-sm.png" alt="Leave Log" class="logo-sm" />
            </a>
        </div>

        <!-- Navbar links -->
        <div class="mt-2 leftnav-links">
         
            <a <?php if (stripos($_SERVER['REQUEST_URI'],'my-dashboard.php') !== false) {echo 'class="nav-link active"';} ?> class="nav-link" href="my-dashboard.php">
                <i class="fa fa-home mr-2"></i><span>My Dashboard</span>
            </a>
            <a <?php if (stripos($_SERVER['REQUEST_URI'],'my-profile.php') !== false) {echo 'class="nav-link active"';} ?> class="nav-link" href="my-profile.php">
                <i class="fa fa-home mr-2"></i><span>My Profile</span>
            </a>
            <a <?php if (stripos($_SERVER['REQUEST_URI'],'change-password.php') !== false) {echo 'class="nav-link active"';} ?> class="nav-link" href="change-password.php">
                <i class="fa fa-lock mr-2"></i><span>Change Password</span>
            </a>

            <a <?php if (stripos($_SERVER['REQUEST_URI'],'notifications.php') !== false) {echo 'class="nav-link active"';} ?> class="nav-link" href="notifications.php">
                <i class="fa fa-bell-o mr-2"></i><span>Notifications</span>
            </a>

            <a class="btn btn-info support text-white" data-toggle="modal" data-target="#supportModal" 
            data-backdrop="static" data-keyboard="false">
                <i class="fa fa-envelope-o mr-2"></i><span>Contact Support</span>
            </a>
        </div>
    </nav>
