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
    <title>Leave Log - Add Employee</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../assets/images/logo-sm.png" type="image/png" />
    <link rel="stylesheet" href="../assets/icons/webfont.css">
    <link rel="stylesheet" href="../assets/icons/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="../assets/css/tracker-admin.css">
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
                <a href="employees.php" class="float-left mr-2"><i class="fa fa-chevron-circle-left text-muted text-24 lh-30"></i></a><h4>Add Employee</h4>
            </div>
        </div>
    </div>
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
                            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                               aria-controls="collapseOne1">
                                <h5 class="mb-0">
                                    Basic Information <i class="fa fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>
                        <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                             data-parent="#accordionEx">
                            <div class="card-body" style="min-height:380px;">
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label>First name</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Middle name</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Last name</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Personal Email</label>
                                        <input type="email" class="form-control" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group mb-0 col-sm-4">
                                        <label>Date of Birth</label>
                                        <div class="date">
                                            <input type='text' class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 col-sm-4">
                                        <label class="w-100">Gender</label>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="customRadio" name="example1" value="customEx">
                                            <label class="custom-control-label" for="customRadio">Male</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="customRadio" name="example1" value="customEx">
                                            <label class="custom-control-label" for="customRadio">Female</label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 col-sm-4">
                                        <label class="w-100">Marital Status</label>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="customRadio" name="example1" value="customEx">
                                            <label class="custom-control-label" for="customRadio">Married</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="customRadio" name="example1" value="customEx">
                                            <label class="custom-control-label" for="customRadio">Unmarried</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!---->
                    <div class="card">
                        <div class="card-header" role="tab" id="headingTwo2">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                               aria-expanded="false" aria-controls="collapseTwo2">
                                <h5 class="mb-0">
                                    Employee Information <i class="fa fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>
                        <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                             data-parent="#accordionEx">
                            <div class="card-body" style="min-height:380px;">
                                <div class="row">
                                    <div class="form-group col-sm-3">
                                        <label>Employee ID</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label>Joining Date</label>
                                        <div class="date">
                                            <input type='text' class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label>Department</label>
                                        <select class="custom-select"></select>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label>Designation</label>
                                        <select class="custom-select"></select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label>Company Email</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="w-100">Type of Employee</label>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="customRadio1" name="example1" value="customEx">
                                            <label class="custom-control-label" for="customRadio1">Full Time</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="customRadio2" name="example1" value="customEx">
                                            <label class="custom-control-label" for="customRadio2">Part time</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group mb-0 col-sm-4">
                                        <label class="w-100">Administrator</label>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="customRadio1" name="example1" value="customEx">
                                            <label class="custom-control-label" for="customRadio1">Yes</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="customRadio2" name="example1" value="customEx">
                                            <label class="custom-control-label" for="customRadio2">No</label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 col-sm-4">
                                        <label class="w-100">Leave Approver</label>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="customRadio1" name="example1" value="customEx">
                                            <label class="custom-control-label" for="customRadio1">Yes</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="customRadio2" name="example1" value="customEx">
                                            <label class="custom-control-label" for="customRadio2">No</label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 col-sm-4">
                                        <label class="w-100">Clock In and Outs Edit Approver</label>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="customRadio1" name="example1" value="customEx">
                                            <label class="custom-control-label" for="customRadio1">Yes</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="customRadio2" name="example1" value="customEx">
                                            <label class="custom-control-label" for="customRadio2">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!---->
                    <div class="card" style="min-height:380px;">
                        <div class="card-header" role="tab" id="headingThree3">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
                               aria-expanded="false" aria-controls="collapseThree3">
                                <h5 class="mb-0">
                                    Contact Information <i class="fa fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>
                        <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                             data-parent="#accordionEx">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Address Line 1</label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>Address Line 2</label>
                                    <div class="date">
                                        <input type='text' class="form-control" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group mb-0 col-sm-3">
                                        <label>City</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group mb-0 col-sm-3">
                                        <label>State</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group mb-0 col-sm-3">
                                        <label>Zip Code</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group mb-0 col-sm-3">
                                        <label>Country</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---->
                </div>
                <!-- Accordion wrapper -->
            </div>
        </div>
        <!--/ END OF LEAVE APPS-->
    </div>
    <div class="content-section d-flex justify-content-end pt-0">
        <button type="button" class="btn btn-primary btn-lg">Add Employee</button>
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
    <script src="../assets/js/perfect-scrollbar.js"></script>
    <script src="../assets/js/moment-with-locales.min.js"></script>
    <script src="../assets/vendors/bootstrap-datetimepicker.min.js"></script>
    <script src="../assets/js/add.employee.js"></script>
    <script src="../assets/js/common.js"></script>
</body>
</html>