<?php
include('../session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Leave Log - Admin Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../assets//images/logo-sm.png" type="image/png" />
    <link rel="stylesheet" href="../assets//icons/webfont.css">
    <link rel="stylesheet" href="../assets//icons/font-awesome.min.css">
    <link rel="stylesheet" href="../assets//bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets//css/Chart.min.css">
    <link rel="stylesheet" href="../assets//bootstrap/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets//css/tracker-admin.css">
</head>
<body>
    <!--LEFT NAV BAR -->
    <?php include '../includes/layouts/admin/leftnav.php'; ?>
    <!--/ END OF LEFT NAV BAR -->
    <!--TOP NAV BAR -->
    <?php include '../includes/layouts/admin/header.php'; ?>
    <!--/ END OF TOP NAV BAR -->
    <!--ALERTS-->
    <?php include '../includes/layouts/admin/messages.php'; ?>        
    <!--/ END OF ALERTS-->
    <div class="content-section">
        <!--CARDS-->
        <div class="row">
            <div class="col-sm-3">
                <div class="card mb-3">
                    <div class="card-body text-center">
                        <i class="icon dripicons-user-group text-30 text-info"></i><br />
                        <span class="text-30">1200</span><br />
                        <span class="text-14 text-info">TOTAL EMPLOYEES</span>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col-sm-3">
                <div class="card mb-3">
                    <div class="card-body text-center">
                        <i class="icon dripicons-enter text-30 text-primary"></i><br />
                        <span class="text-30">1194</span><br />
                        <span class="text-14 text-primary">EMPLOYEES PRESENT</span>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col-sm-3">
                <div class="card mb-3">
                    <div class="card-body text-center">
                        <i class="icon dripicons-exit text-30 text-danger"></i><br />
                        <span class="text-30">6</span><br />
                        <span class="text-14 text-danger">EMPLOYEES ABSENT</span>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col-sm-3">
                <div class="card mb-3">
                    <div class="card-body text-center">
                        <i class="icon dripicons-checkmark text-30 text-muted"></i><br />
                        <span class="text-30">4</span><br />
                        <span class="text-14 text-muted">UPCOMING LEAVES</span>
                    </div>
                </div>
            </div>
            <!---->
        </div>
        <!--/ END OF CARDS-->
    </div>
    <div class="content-section pt-0">
        <!--GRAPHS-->
        <div class="row clear-fix">
            <div class="col-sm-8">
                <div class="card mb-3">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Department wise Head Count</h5>
                        <p class="text-muted text-14 mb-0">Total no of employess in each department</p>
                    </div>
                    <div class="card-body">
                        <canvas id="BarChart" style="width:100%;height:300px;"></canvas>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col-sm-4">
                <div class="card mb-3">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Today's Attendance</h5>
                        <p class="text-muted text-14 mb-0">The total no of present and absent employees.</p>
                    </div>
                    <div class="card-body">
                        <canvas id="DoughnutChart" style="width:100%;height:300px;"></canvas>
                    </div>
                </div>
            </div>
            <!---->
        </div>
        <!--/ END OF GRAPHS-->
    </div>    
    <!--FOOTER -->
    <?php include '../includes/layouts/admin/footer.php'; ?>
    <!--/ END OF FOOTER -->
    <!--REQUIRED POPPERS -->
    <?php include '../includes/layouts/admin/support-modal.php'; ?>
    <!--/ END OF REQUIRED POPPERS -->
    <!-- Required Scripts -->
    <script src="../assets//vendors/jquery.min.js"></script>
    <script src="../assets//vendors/popper.min.js"></script>
    <script src="../assets//vendors/bootstrap.min.js"></script>
    <script src="../assets//vendors/Chart.min.js"></script>
    <script src="../assets//vendors/jquery.dataTables.min.js"></script>
    <script src="../assets//vendors/dataTables.bootstrap4.min.js"></script>
    <script src="../assets//js/perfect-scrollbar.js"></script>
    <script src="../assets//js/dashboard.js"></script>
    <script src="../assets//js/common.js"></script>
</body>
</html>