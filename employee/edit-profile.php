<?php
include('../session.php');
include('../dal/employee-dal.php');

if ($current_session != null) {
    $row = EmployeeDAL::GetById($current_session->Id);    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Leave Log - Employee Profile</title>
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
    <?php include '../includes/layouts/employee/leftnav.php'; ?>
    <!--/ END OF LEFT NAV BAR -->
    <!--TOP NAV BAR -->
    <?php include '../includes/layouts/employee/header.php'; ?>
    <!--/ END OF TOP NAV BAR -->
    <!--ALERTS-->
    <?php include '../includes/layouts/employee/messages.php'; ?>
    <!--/ END OF ALERTS-->
    <div class="content-section mb-0 pb-0">
        <div class="row">
            <div class="col-lg-12">
                <h4>Profile</h4>
            </div>
        </div>
    </div>
    <?php if ($row != null) { ?>
        <form method="post" action="profile.php">
            <div class="content-section">
                <!--LEAVE APPS-->
                <div class="row clear-fix">
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body p-0">
                                <img src="../assets/images/img_avatar3.png" class="img-fluid" />
                            </div>
                            <div class="card-footer p-0">
                                <div class="button-wrap">
                                    <label class="new-button mb-0" for="upload">
                                        Browse<input id="upload" type="file">
                                    </label>
                                    <input type="file" class="custom-file-input">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10">
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
                                        <div class="row">
                                            <div class="form-group col-sm-6">
                                                <label>First name</label>
                                                <input type="text" name="fname" value="<?php echo $row->FirstName; ?>" class="form-control" />
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label>Last name</label>
                                                <input type="text" name="lname" value="<?php echo $row->LastName; ?>" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-6">
                                                <label>Phone</label>
                                                <input type="text" value="<?php echo $row->PhoneNumber; ?>" class="form-control" />
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label>Personal Email</label>
                                                <input type="email" value="<?php echo $row->EmailId; ?>" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group mb-0 col-sm-4">
                                                <label>Date of Birth</label>
                                                <div class="date">
                                                    <input type='text' value="<?php echo $row->DOB; ?>" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group mb-0 col-sm-4">
                                                <label class="w-100">Gender</label>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" id="customRadio" <?php if($row->Gender=='Male'){echo "checked='checked' ";}?> name="example1" value="Male">
                                                    <label class="custom-control-label" for="customRadio">Male</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" id="customRadio" <?php if($row->Gender=='Female'){echo "checked='checked' ";}?> name="example1" value="Female">
                                                    <label class="custom-control-label" for="customRadio">Female</label>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group mb-0 col-sm-4">
                                            <label class="w-100">Marital Status</label>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="customRadio" name="example1" value="customEx">
                                                <label class="custom-control-label" for="customRadio">Married</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="customRadio" name="example1" value="customEx">
                                                <label class="custom-control-label" for="customRadio">Unmarried</label>
                                            </div>
                                        </div> -->
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
                <button type="submit" name="update_profile" class="btn btn-primary">Update Profile</button>
            </div>
        </form>
    <?php
    }
    ?>
    <!--FOOTER -->
    <?php include '../includes/layouts/employee/footer.php'; ?>
    <!--/ END OF FOOTER -->

    <!--REQUIRED POPPERS -->
    <?php include '../includes/layouts/employee/support-modal.php'; ?>
    <!--/ END OF REQUIRED POPPERS -->

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