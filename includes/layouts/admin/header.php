<header>

    <nav class="navbar navbar-expand-md bg-white navbar-top navbar-light fixed-top border border-top-0 border-left-0 border-right-0">
        <!-- Brand -->
        <div class="logo bg-white logo-sm-device">
            <a class="brand" href="#" title="Leave Log">
                <img src="../assets/images/logo-sm.png" alt="Leave Log" />
            </a>
        </div>
        <div class="mr-auto">
            <div id="nav-icon" class="float-left mt-2 mr-4">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div id="nav-icon-sm" class="float-left mt-2 mr-4">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="navbar-nav">
                <?php if ($current_session != null && $current_session->SuperAdmin) { ?>
                <li class="nav-item">
                    <a class="btn btn-sm btn-light mt-1 mr-3 active text-uppercase" href="../superadmin/dashboard.php">Super Admin</a>
                </li>
                <?php } ?>
                <?php if ($current_session != null && ($current_session->Admin || $current_session->SuperAdmin)) { ?>
                    <li class="nav-item">
                        <a class="btn btn-sm btn-light mt-1 mr-3 active text-uppercase" href="../employee/my-dashboard.php">Employee</a>
                    </li>
                <?php } ?>
                <li class="nav-item">
                    <a class="btn btn-sm btn-light mt-1 mr-3 active text-uppercase" href="../projects/dashboard.php">Projects</a>
                </li>
            </ul>
        </div>
        <!-- Navbar links -->
        <ul class="navbar-nav">
            

            <li class="nav-item">
                <div class="btn-group mt-1 mr-3">
                    <span class="btn btn-sm btn-info active">
                        <i class="fa fa-clock-o mr-1"></i><span class="digital-clock">00:00:00</span>
                    </span>
                    <div class="btn-group">
                        <a class="btn btn-sm btn-info dropdown-toggle" id="clockoutdropdown">CLOCK OUT</a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-clockout p-3">
                            <div class="form-group mb-0">
                                <label>Going for break select a reason:</label>
                                <div class="input-group">
                                    <select class="custom-select custom-select-sm"></select>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary btn-sm" type="submit">Go</button>
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <div class="form-group mb-0">
                                <button type="button" class="btn btn-danger btn-sm btn-block">CLOCK OUT FOR THE DAY!</button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    <i class="fa fa-bell-o text-20"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-right-sm p-0 border-0 w-300">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="#" class="text-muted">Total no of employess in each department...</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="text-muted">Total no of employess in each department...</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="text-muted">Total no of employess in each department...</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="text-muted">Total no of employess in each department...</a>
                        </li>
                        <li class="list-group-item text-right">
                            <a href="#" class="text-muted">View All</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    <i class="fa fa-envelope-o text-20"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right p-0 border-0 w-300">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="#" class="text-muted">Total no of employess in each department...</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="text-muted">Total no of employess in each department...</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="text-muted">Total no of employess in each department...</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="text-muted">Total no of employess in each department...</a>
                        </li>
                        <li class="list-group-item text-right">
                            <a href="#" class="text-muted">View All</a>
                        </li>
                    </ul>
                </div>
            </li>

            <?php if ($current_session != null && $current_session->Id > 0) { ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        <i class="fa fa-user-circle text-20 text-info"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="../employee/edit-profile.php">Edit Profile</a>
                        <a class="dropdown-item" href="../employee/logout.php">Logout</a>
                    </div>
                </li>
            <?php } ?>

        </ul>
    </nav>
</header>