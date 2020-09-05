<?php
include('../session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Leave Log - Employee Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../assets/images/logo-sm.png" type="image/png" />
    <link rel="stylesheet" href="../assets/icons/webfont.css">
    <link rel="stylesheet" href="../assets/icons/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="../assets/css/fullcalendar.css">
    <link rel="stylesheet" href="../assets/css/tracker-admin.css">
</head>
<body>
    <!--LEFT NAV BAR -->
    <?php include '../includes/layouts/superadmin/leftnav.php'; ?>
    <!--/ END OF LEFT NAV BAR -->
    <!--TOP NAV BAR -->
    <?php include '../includes/layouts/superadmin/header.php'; ?>
    <!--/ END OF TOP NAV BAR -->
    <!--ALERTS-->
    <?php include '../includes/layouts/superadmin/messages.php'; ?>        
    <!--/ END OF ALERTS-->
    <div class="content-section">        
        <!--GRAPHS-->
        <div class="row clear-fix">
            <div class="col-sm-7">
                <div class="card mb-3">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Working Hours Calendar</h5>
                    </div>
                    <div class="card-body">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col-sm-5">
                <div class="card mb-3">
                    <div class="card-header bg-white d-flex justify-content-between">
                        <h5 class="card-title mb-0">Upcoming Holidays</h5>
                        <button type="button" data-toggle="modal" data-target="#holidays-list" class="btn btn-primary btn-sm">View All</button>
                    </div>
                    <div class="card-body">
                        <table class="table holiday mb-0">
                            <tbody>
                                <tr>
                                    <td>GANDHI JAYANTHI</td>
                                    <td>( Friday ) 02/10/2020</td>
                                </tr>
                                <tr>
                                    <td>VIJAYA DASAMI</td>
                                    <td>( Monday ) 26/10/2020</td>
                                </tr>
                                <tr>
                                    <td>DIWALI</td>
                                    <td>( Saturday ) 14/11/2020</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!---->
        </div>
        <!--/ END OF GRAPHS-->
    </div>
    <div class="content-section pt-0">
        <!--LEAVE APPS-->
        <div class="row clear-fix">
            <div class="col-sm-6">
                <div class="card mb-3">
                    <div class="card-header bg-white d-flex justify-content-between">
                        <h5 class="card-title mb-0">Today's Clock In</h5>
                        <span>Elapsed Time:&nbsp;8 hr(s):10 min(s)</span>
                    </div>
                    <div class="card-body">
                        <table id="LeaveApplication" class="table table-bordered mb-0" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Day</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Friday</td>
                                    <td>02/08/2020</td>
                                    <td>13.08</td>
                                    <td class="text-right">
                                        <button type="button" data-toggle="modal" data-target="#clock-in-edit" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card mb-3">
                    <div class="card-header bg-white d-flex justify-content-between">
                        <h5 class="card-title mb-0">Today's Clock Out</h5>
                        <span>Elapsed Time:&nbsp;0 hr(s):24 min(s)</span>
                    </div>
                    <div class="card-body">
                        <table id="LeaveApplication" class="table table-bordered mb-0" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Day</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Break Type</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Friday</td>
                                    <td>02/08/2020</td>
                                    <td>13.08</td>
                                    <td>Lunch</td>
                                    <td class="text-right">
                                        <button type="button" data-toggle="modal" data-target="#clock-out-edit" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/ END OF LEAVE APPS-->
    </div>
    <div class="content-section pt-0">
        <!--LEAVE APPS-->
        <div class="row clear-fix">
            <div class="col-sm-9">
                <div class="card mb-3">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Recent Leave Applications</h5>
                    </div>
                    <div class="card-body">
                        <table id="LeaveApplication" class="table table-bordered mb-0" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Applied for Day &amp; Date</th>
                                    <th>Leave Type</th>
                                    <th>No. of Days</th>
                                    <th>Applied on</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Applied for Day &amp; Date</td>
                                    <td>Leave Type</td>
                                    <td>No. of Days</td>
                                    <td>Applied on</td>
                                    <td>Status</td>
                                    <td class="text-right">
                                        <button type="button" data-toggle="modal" data-target="#recent-leave-application" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></button>
                                        <button type="button" class="btn btn-sm btn-danger"><i class="fa fa-remove"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header bg-white d-flex justify-content-between">
                        <h5 class="card-title mb-0">Leave Balance</h5>
                    </div>
                    <div class="card-body">
                        <table class="table holiday border-0 mb-0">
                            <tbody>
                                <tr>
                                    <td class="border-0">Casual</td>
                                    <td class="border-0">6</td>
                                    <td class="text-right border-0"><button type="button" data-toggle="modal" data-target="#apply-leave" class="btn btn-sm btn-primary">Apply</button></td>
                                </tr>
                                <tr>
                                    <td>Sick</td>
                                    <td>6</td>
                                    <td class="text-right"><button type="button" data-toggle="modal" data-target="#apply-leave" class="btn btn-sm btn-primary">Apply</button></td>
                                </tr>
                                <tr>
                                    <td>Earned</td>
                                    <td>12</td>
                                    <td class="text-right"><button type="button" data-toggle="modal" data-target="#apply-leave" class="btn btn-sm btn-primary">Apply</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/ END OF LEAVE APPS-->
    </div>

    <!--FOOTER -->
    <?php include '../includes/layouts/superadmin/footer.php'; ?>    
    <!--/ END OF FOOTER -->

    <!-- Required Scripts -->
    <script src="../assets/vendors/jquery.min.js"></script>
    <script src="../assets/vendors/popper.min.js"></script>
    <script src="../assets/vendors/bootstrap.min.js"></script>
    <script src="../assets/vendors/jquery.dataTables.min.js"></script>
    <script src="../assets/vendors/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/js/perfect-scrollbar.js"></script>
    <script src="../assets/js/moment-with-locales.min.js"></script>
    <script src="../assets/vendors/fullcalendar.min.js"></script>
    <script src="../assets/vendors/bootstrap-datetimepicker.min.js"></script>
    <script src="../assets/js/home.js"></script>
    <script src="../assets/js/common.js"></script>
</body>
</html>