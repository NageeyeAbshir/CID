<!doctype html>
<html lang="en">
<?php 
ob_start();
session_start();
include 'config/config_class.php'; 
$coder = new ICT_MS_Class();

 ?>
 <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Vito - Responsive Bootstrap 4 Admin Dashboard Template</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.ico" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Typography CSS -->
  <link rel="stylesheet" href="assets/css/typography.css">
  <!-- Style CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body class="sidebar-main-active right-column-fixed header-top-bgcolor">
  <!-- loader Start -->
  <div id="loading">
    <div id="loading-center">
    </div>
  </div>
  <!-- loader END -->
  <!-- Wrapper Start -->
  <div class="wrapper">
    <!-- Sidebar  -->
    <!-- TOP Nav Bar -->
    <div class="iq-top-navbar">
      <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
          <div class="navbar-left">
            <ul id="topbar-data-icon" class="d-flex m-2 p-0 topbar-menu-icon">
              <h1>Criminal Investigation Departiment System <b> (CID) </b> Request Appointiment Form</h1> <br> <br>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <!-- TOP Nav Bar END -->
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
      <div class="container-fluids">
        <div class="row">
        <div class="col-lg-12">
          <div class="iq-edit-list-data">
            <div class="tab-content">
              <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                <div class="iq-card">
                  <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                      <h4 class="card-title">Personal Information</h4>
                    </div>
                  </div>
                  <div class="iq-card-body">
                    <div class="row">
                      <div class="col-lg-12">
                        <form id="FrmRegs_applicantFull_sp" method="POST">
                          <div class="modal-body">
                            <div class="iq-card">
                              <div class="iq-card-body">
                                <input type="hidden" class="form-control" name="pro" value="applicantFull_sp">
                                <input type="hidden" name="appl_ID" id="appl_ID" value="s">
                                <div class="form-group row align-items-center">
                                  <div class="col-md-6">
                                    <div class="profile-img-edit">
                                      <img class="profile-pic" src="assets/images/user/11.png" id="app_file_image" width="200" height="150">
                                      <div class="p-image">
                                        <i class="ri-pencil-line upload-button"></i>
                                        <input class="file-upload" type="file" accept="image/png, image/gif, image/jpg, image/jpeg" name="app_file_image"/>
                                        <input type="hidden" accept="image/png, image/gif, image/jpg, image/jpeg" name="app_file_image" value="ss" />
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <label for="fname">Enter your certicate of birth:</label>
                                    <input class="form-control" type="file" accept=".pdf" name="app_file_PDF"/>
                                    <input type="hidden" accept=".pdf" name="app_file_PDF" value="none" />
                                  </div>
                                </div>
                                <div class=" row align-items-center">
                                  <div class="form-group col-sm-4">
                                    <label for="fname">Full Name:</label>
                                    <input type="text" class="form-control" name="fname" id="fname" required>
                                  </div>
                                  <div class="form-group col-sm-4">
                                    <label for="mothername">Mother Name:</label>
                                    <input type="text" class="form-control" name="mothername" id="mothername" required>
                                  </div>
                                  <div class="form-group col-sm-4">
                                    <label for="contactNumber">Contact Number: <span class='badge badge-danger' required>Please enter correct Number</span></label>
                                    <input type="number" class="form-control" name="contactNumber" id="contactNumber" required>
                                  </div>
                                  <div class="form-group col-sm-3">
                                    <label for="emials">E-mail: <span class='badge badge-danger' required>Please enter correct Email</span></label>
                                    <input type="text" class="form-control" name="emials" id="emials" required>
                                  </div>
                                  <div class="form-group col-sm-3">
                                    <label class="d-block">Sex type:</label>
                                    <select class="form-control" name="sexType" id="sexType" required>
                                      <option value="" selected>Select type</option>
                                      <option value="Male">Male</option>
                                      <option value="Female">Female</option>
                                    </select>
                                  </div>
                                  <div class="form-group col-sm-3">
                                    <label class="d-block">Marital Status:</label>
                                    <select class="form-control" name="maritalType" id="maritalType" required>
                                      <option value="" selected>Select type</option>
                                      <option value="Single">Single</option>
                                      <option value="Married">Married</option>
                                    </select>
                                  </div>
                                  <div class="form-group col-sm-3">
                                    <label for="pobf">Place Of Birth:</label>
                                    <input type="text" class="form-control" name="pobf" id="pobf" required>
                                  </div>
                                  <div class="form-group col-sm-3">
                                    <label for="dob">Date Of Birth:</label>
                                    <input type="date" class="form-control" name="dob" id="dob" value="1984-01-24" required>
                                    <input type="hidden" class="form-control" name="applicant_statuss" id="applicant_statuss" value="Panding">
                                  </div>
                                  <div class="form-group col-sm-3">
                                    <label for="uname">Username: <span class='badge badge-danger' required>Please note this username</span></label>
                                    <input type="text" class="form-control" name="uname" id="uname" readonly="true" required>
                                  </div>
                                  <div class="form-group col-sm-3">
                                    <label for="upass">Password: <span class='badge badge-danger'>Please note this password</span></label>
                                    <input type="text" class="form-control" name="upass" id="upass" readonly="true" required>
                                  </div>
                                  <div class="form-group col-sm-3">
                                    <div class="loadCombo_applcnt_2" id="loadCombo_applcnt_2">
                                      <label for="contactNumber">Appointment Date:</label>
                                      <?php $coder->comboBox("select s.schedule_date 's', concat('Availible date ',s.schedule_date) bb from schedule s where s.deleted=0 and s.schedule_date >= CURRENT_DATE and s.slot_counter != 0;","cmb_pymts_apptdate","Select schedule date"); ?>
                                    </div>
                                  </div>
                                  <div class="form-group col-sm-3">
                                    <label for="lname">Appointment Time Slot:</label>
                                    <input type="text" class="form-control" name="apptslottime" id="apptslottime" value="<?php echo date('h:i:s A') ?>" readonly="true">
                                    <input type="hidden" class="form-control" name="apptstate" id="apptstate" value="Pending" required>
                                  </div>
                                  <div class="form-group col-sm-3">
                                    <label for="contactNumber">Location:</label>
                                    <?php $coder->comboBox("select l.location_id, l.location_name from locations l where l.deleted=0;","cmb_pymts_locatonName","Select location"); ?>
                                  </div>
                                  <div class="form-group col-sm-3">
                                    <label for="upass">Service Type:</label>
                                    <?php $coder->comboBox("select s.service_id, concat_ws(' | ',s.service_name,concat('$',s.services_pricce)) from services s where s.deleted=0;","cmb_pymts_servName","Select service"); ?>
                                  </div>
                                  <div class="form-group col-sm-3">
                                    <label for="">Date Created:</label>
                                    <input type="text" class="form-control" name="datecreated" id="datecreated" readonly="true" value="<?php echo date("Y-m-d"); ?>">
                                    <input type="hidden" class="form-control" name="oper" id="oper" value="insert">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary" id="btn_inasert_applicantFull_sp">Submit Data</button>
                              <a href="index.php" type="button" class="btn btn-primary" >Close applicant</a>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
  <!-- Wrapper END -->
  <!-- Wrapper END -->
 
<div class="modal fade" id="mdl_spayments_sp" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-center">
        <h1 class="modal-title text-white text-center" style="font-weight: bold;">Payment Form</h1>
      </div>
      <form id="FrmRegs_spayments_sp">
        <div class="modal-body">
          <div class="iq-card">
            <div class="iq-card-body">
              <input type="hidden" class="form-control" name="pro" value="payments_sp">
              <input type="hidden" name="pymnt_ID" id="pymnt_ID" value="">
              <div class=" row align-items-center">
                <div class="form-group col-sm-12">
                  <label for="upass">Applicant Name:</label>
                  <input type="text" class="form-control" id="pymtOutDoorSysytemApp" readonly="true">
                  <input type="hidden" class="form-control" name="pymtOutDoorSysytemApp" id="pymtOutDoorSysytemApp2" readonly="true">
                </div>
                <div class="form-group col-sm-4">
                  <label for="fname">Appointment Date:</label>
                  <input type="text" class="form-control" name="pymtOutDoorSysytemAppnt" id="pymtOutDoorSysytemAppnt" readonly="true">
                </div>
                <div class="form-group col-sm-4">
                  <label for="lname">Payment Amount:</label>
                  <input type="text" class="form-control" name="pymtOutDoorSysytemAppTime" id="pymtOutDoorSysytemAppTime" readonly="true">
                  <input type="hidden" class="form-control" name="pymntstate" value="Booked">
                </div>
                <div class="form-group col-sm-4">
                  <label for="dob">Date Created:</label>
                  <input type="date" class="form-control" name="datecreated" value="<?php echo date("Y-m-d"); ?>" readonly="true">
                  <input type="hidden" class="form-control" name="datemodified" value="<?php echo date("Y-m-d"); ?>" readonly="true">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer bg-dark text-center">
          <button type="button" class="btn btn-secondary" id="btn_insertb_spayments_sp">Submit Data</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="include/mainFun.js"></script>
<script src="include/eventMaker.js"></script>

<script src="assets/js/popper.min.js"></script>      
<script src="assets/js/bootstrap.min.js"></script>
<!-- Appear JavaScript -->
<script src="assets/js/jquery.appear.js"></script>
<!-- Countdown JavaScript -->
<script src="assets/js/countdown.min.js"></script>
<!-- Counterup JavaScript -->
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- Wow JavaScript -->
<script src="assets/js/wow.min.js"></script>
<!-- Apexcharts JavaScript -->
<script src="assets/js/apexcharts.js"></script>
<!-- Slick JavaScript -->
<script src="assets/js/slick.min.js"></script>
<!-- Select2 JavaScript -->
<script src="assets/js/select2.min.js"></script>
<!-- Owl Carousel JavaScript -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Magnific Popup JavaScript -->
<!-- <script src="js/jquery.magnific-popup.min.js"></script> -->
<!-- Smooth Scrollbar JavaScript -->
<script src="assets/js/smooth-scrollbar.js"></script>
<!-- lottie JavaScript -->
<script src="assets/js/lottie.js"></script>
<!-- Chart Custom JavaScript -->
<script src="assets/js/chart-custom.js"></script>
<script src="assets/js/sweetalert2.js"></script>
<script src="assets/js/custom.js"></script>
<!-- <script src="assets/js/jquery.dataTables.min.js"></script> -->
</body>
</html>
