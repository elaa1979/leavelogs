<?php
include('../session.php');
include('../bll/account-bll.php');

if ($current_session != null) {
    $bll=new AccountBLL();
    $row = $bll->GetById($current_session->AccountId);    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Leave Log - Company Profile</title>
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
    <div class="content-section mb-0 pb-0">
        <div class="row">
            <div class="col-lg-12">
                <h4>Company Profile</h4>
            </div>
        </div>
    </div>
    <?php if ($row != null) { ?>
        <form method="post" action="profile.php">
            <div class="content-section">
                <!--LEAVE APPS-->
                <div class="row clear-fix">
                    <div class="col-sm-12">
                        <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne1">
                                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                        <h5 class="mb-0">
                                            Basic Information <i class="fa fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                </div>
                                <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Company name<span class="text-danger text-14">&nbsp;&ndash;&nbsp;Required</span></label>
                                            <input type="text" name="fname" value="<?php echo $row->Name; ?>" class="form-control" required />
                                        </div>
                                        <div class="form-group">
                                            <label>Address<span class="text-danger text-14">&nbsp;&ndash;&nbsp;Required</span></label>
                                            <textarea class="form-control" name="lname" 
                                            ><?php echo $row->Description; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Company Contact Number<span class="text-danger text-14">&nbsp;&ndash;&nbsp;Required</span></label>
                                            <input type="text" name="fname" value="<?php echo $row->Name; ?>" class="form-control" required />
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="lname" 
                                            ><?php echo $row->Description; ?></textarea>
                                        </div>
                                        <div class="form-group mb-0">
                                            <label>Account Created Date with Leavelogs</label>
                                            <p class="mb-0"><?php echo $row->CreatedOn; ?></p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- Accordion wrapper -->
                    </div>
                </div>
                <!--/ END OF LEAVE APPS-->
            </div>
            <div class="content-section d-flex justify-content-end pt-0">
                <button type="submit" name="update_profile" class="btn btn-primary btn-lg">Update Company Profile</button>
            </div>
        </form>
    <?php
    }
    ?> 
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
    <script src="../assets//js/perfect-scrollbar.js"></script>
    <script src="../assets//js/dashboard.js"></script>
    <script src="../assets//js/common.js"></script>
</body>
</html>