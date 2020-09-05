<?php
include('../session.php');
include('../models/account.php');
include('../bll/account-bll.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Leave Log - Super Admin - Manage accounts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../assets/images/logo-sm.png" type="image/png" />
    <link rel="stylesheet" href="../assets/icons/webfont.css">
    <link rel="stylesheet" href="../assets/icons/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/chosen/chosen.css">
    <link rel="stylesheet" href="../assets/bootstrap/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/css/tracker-admin.css">

    <?php
    $bll=new AccountBLL();
    $rows = $bll->Get();
    echo "<script>var data=" . json_encode($rows) . ";</script>";
    ?>
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

    <div class="content-section mb-0 pb-0">
        <div class="row">
            <div class="col-lg-6">
                <h4>Manage Accounts</h4>
            </div>
        </div>
    </div>

    <div class="content-section pt-0">
        <div class="row clear-fix">
            <div class="col-sm-12">
                <div class="card mb-3 mt-3 border-0">
                    <div class="card-header bg-white border-0 p-0">
                        <div class="row">
                            <div class="col-sm-6 table-left"></div>
                            <div class="col-sm-6 table-right"></div>
                        </div>
                    </div>
                    <div class="card-body mh-250 p-0">
                        <table id="accounts" class="table table-bordered mb-0" style="width:100%">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Created Date</th>
                                    <th>Active</th>
                                </tr>
                            </thead>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--FOOTER -->
    <?php include '../includes/layouts/superadmin/footer.php'; ?>
    <!--/ END OF FOOTER -->
    <!--REQUIRED POPPERS -->
    <?php include '../includes/layouts/superadmin/support-modal.php'; ?>
    <!--/ END OF REQUIRED POPPERS -->
    <!-- Required Scripts -->
    <script src="../assets/vendors/jquery.min.js"></script>
    <script src="../assets/vendors/popper.min.js"></script>
    <script src="../assets/vendors/bootstrap.min.js"></script>
    <script src="../assets/vendors/jquery.dataTables.min.js"></script>
    <script src="../assets/vendors/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/chosen/chosen.jquery.min.js"></script>
    <script src="../assets/js/perfect-scrollbar.js"></script>
    <script src="../assets/js/accounts.js"></script>
    <script src="../assets/js/common.js"></script>
</body>

</html>