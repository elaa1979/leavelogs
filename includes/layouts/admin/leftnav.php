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
         
            <a <?php if (stripos($_SERVER['REQUEST_URI'],'dashboard.php') !== false) {echo 'class="nav-link active"';} ?> class="nav-link" href="dashboard.php">
                <i class="fa fa-dashboard mr-2"></i><span>Admin Dashboard</span>
            </a>
            <a <?php if (stripos($_SERVER['REQUEST_URI'],'company.php') !== false) {echo 'class="nav-link active"';} ?> class="nav-link" href="company.php">
                <i class="fa fa-building mr-2"></i><span>Company Profile</span>
            </a>
            <a <?php if (stripos($_SERVER['REQUEST_URI'],'branches.php') !== false) {echo 'class="nav-link active"';} ?> class="nav-link" href="branches.php">
                <i class="fa fa-sitemap mr-2"></i><span>Branches</span>
            </a>
            <a <?php if (stripos($_SERVER['REQUEST_URI'],'departments.php') !== false) {echo 'class="nav-link active"';} ?> class="nav-link" href="departments.php">
                <i class="fa fa-usb mr-2"></i><span>Departments</span>
            </a>
            <a <?php if (stripos($_SERVER['REQUEST_URI'],'employees.php') !== false) {echo 'class="nav-link active"';} ?> class="nav-link" href="employees.php">
                <i class="fa fa-users mr-2"></i><span>Employees</span>
            </a>
            <a <?php if (stripos($_SERVER['REQUEST_URI'],'holidays.php') !== false) {echo 'class="nav-link active"';} ?> class="nav-link" href="holidays.php">
                <i class="fa fa-suitcase mr-2"></i><span>Holidays</span>
            </a>
            <a <?php if (stripos($_SERVER['REQUEST_URI'],'leave-types.php') !== false) {echo 'class="nav-link active"';} ?> class="nav-link" href="leave-types.php">
                <i class="fa fa-calendar mr-2"></i><span>Leave Types</span>
            </a>
            <a <?php if (stripos($_SERVER['REQUEST_URI'],'manage-approvers.php') !== false) {echo 'class="nav-link active"';} ?> class="nav-link" href="manage-approvers.php">
                <i class="fa fa-calendar-check-o mr-2"></i><span>Approvers</span>
            </a>
            <a <?php if (stripos($_SERVER['REQUEST_URI'],'leaves.php') !== false) {echo 'class="nav-link active"';} ?> class="nav-link" href="../admin/leaves.php">
                <i class="fa fa-home mr-2"></i><span>Leaves</span>
            </a>
            
            <a <?php if (stripos($_SERVER['REQUEST_URI'],'email-templates.php') !== false) {echo 'class="nav-link active"';} ?> class="nav-link" href="email-templates.php">
                <i class="fa fa-file-photo-o mr-2"></i><span>Email Templates</span>
            </a>

            <a class="btn btn-info support text-white" data-toggle="modal" data-target="#supportModal" 
            data-backdrop="static" data-keyboard="false">
                <i class="fa fa-envelope-o mr-2"></i><span>Contact Support</span>
            </a>
        </div>
    </nav>
