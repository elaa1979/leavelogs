<?php
include('../session.php');
include('../dal/branch-dal.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Leave Log - Admin - Email Templates</title>
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
    $rows = BranchDAL::GetByAccountId($current_session->AccountId);
    echo "<script>var data=" . json_encode($rows) . ";</script>";
    ?>
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

    <div class="content-section mb-0 pb-0">
        <div class="row">
            <div class="col-lg-6">
                <h4>Email Templates</h4>
            </div>
        </div>
    </div>

    <div class="content-section">
        <!-- Nav pills -->
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="pill" href="#BirthdayTemplates">Birthday Templates</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#AnniversaryTemplates">Anniversary Templates</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#AnniversaryTemplates">Meeting Invitation Templates</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content mt-3">
          <div class="tab-pane active" id="BirthdayTemplates">
            <div class="row">
                <div class="col-sm-3">
                    <div class="card mb-3">
                        <img class="card-img-top" src="../assets/images/bd-temp-01.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                          <a href="#" class="btn btn-info btn-sm btn-block stretched-link">Select</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card mb-3">
                        <img class="card-img-top" src="../assets/images/bd-temp-02.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                          <a href="#" class="btn btn-info btn-sm btn-block stretched-link">Select</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card mb-3">
                        <img class="card-img-top" src="../assets/images/bd-temp-03.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                          <a href="#" class="btn btn-info btn-sm btn-block stretched-link">Select</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card mb-3">
                        <img class="card-img-top" src="../assets/images/bd-temp-04.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                          <a href="#" class="btn btn-info btn-sm btn-block stretched-link">Select</a>
                        </div>
                    </div>
                </div>
            </div>              
          </div>
          <!---->
          <div class="tab-pane fade" id="AnniversaryTemplates">
              <div class="row">
                <div class="col-sm-3">
                    <div class="card mb-3">
                        <img class="card-img-top" src="../assets/images/bd-temp-01.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                          <a href="#" class="btn btn-info btn-sm btn-block stretched-link">Select</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card mb-3">
                        <img class="card-img-top" src="../assets/images/bd-temp-02.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                          <a href="#" class="btn btn-info btn-sm btn-block stretched-link">Select</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card mb-3">
                        <img class="card-img-top" src="../assets/images/bd-temp-03.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                          <a href="#" class="btn btn-info btn-sm btn-block stretched-link">Select</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card mb-3">
                        <img class="card-img-top" src="../assets/images/bd-temp-04.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                          <a href="#" class="btn btn-info btn-sm btn-block stretched-link">Select</a>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>

    <!--FOOTER -->
    <?php include '../includes/layouts/admin/footer.php'; ?>
    <!--/ END OF FOOTER -->
    <!--REQUIRED POPPERS -->
    <?php include '../includes/layouts/admin/support-modal.php'; ?>
    <!--/ END OF REQUIRED POPPERS -->
    <!-- Required Scripts -->
    <script src="../assets/vendors/jquery.min.js"></script>
    <script src="../assets/vendors/popper.min.js"></script>
    <script src="../assets/vendors/bootstrap.min.js"></script>
    <script src="../assets/chosen/chosen.jquery.min.js"></script>
    <script src="../assets/js/perfect-scrollbar.js"></script>
    <script src="../assets/js/common.js"></script>
</body>

</html>