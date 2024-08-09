<!doctype html>
<html lang="en">
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
<body>
  <!-- loader Start -->
  <div id="loading">
    <div id="loading-center">
    </div>
  </div>
  <!-- loader END -->
  <!-- Sign in Start -->
  <section class="sign-in-">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-sm-4 align-self-center mt-5 p-0"></div>
        <div class="col-sm-4 align-self-center mt-5 p-0 bg-white">
          <div class="sign-in-from mt-5 bg-white">
            <h1 class="mb-0">Sign Up</h1>
            <p>Enter your email address and password to access admin panel.</p>
            <form id="FrmReg_users_sp" class="mt-4">
              <input type="hidden" class="form-control" name="pro" value="users_sp">
              <input type="hidden" name="usr_ID" id="usr_ID" value="">
              <div class="form-group">
                <label for="exampleInputEmail1">Your Full Name</label>
                <input type="text" class="form-control mb-0" name="usrnames" id="usrnames" placeholder="Your Full Name" autocomplete="no">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail2">Email address</label>
                <input type="email" class="form-control mb-0" name="usremail" id="usremail" placeholder="Enter email" autocomplete="no">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail2">Phone number</label>
                <input type="number" class="form-control mb-0" name="usrtel" id="usrtel" placeholder="Enter phone number" autocomplete="no">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control mb-0" name="usrpass" id="usrpass" placeholder="Password" autocomplete="no">
                <input type="hidden" class="form-control mb-0" name="usertypes" id="usertypes" value="Panding">
                <input type="hidden" class="form-control" name="datecreated" id="usrdatecreated" value="<?php echo date("Y-m-d"); ?>">
                <input type="hidden" class="form-control" name="datemodified" id="usrdatemodified" value="<?php echo date("Y-m-d"); ?>" readonly="true">
              </div>
              <div class="d-inline-block w-100">
                <button type="button" class="btn btn-primary float-right" id="btn_inserts_users_sp">Sign Up</button>
              </div>
              <div class="sign-info">
                <span class="dark-color d-inline-block line-height-2">Already Have Account ? <a href="index.php">Log In</a></span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Sign in END -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <!-- Smooth Scrollbar JavaScript -->
  <script src="assets/js/smooth-scrollbar.js"></script>
<script src="assets/js/sweetalert2.js"></script>
  <!-- Chart Custom JavaScript -->
  <script src="assets/js/chart-custom.js"></script>
  <!-- Custom JavaScript -->
  <script src="assets/js/custom.js"></script>
</body>
</html>