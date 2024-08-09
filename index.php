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
  <section class="sign-in-page">
    <div class="container align-self-center mt-5">
      <div class="row no-gutters">
        <div class="col-sm-4 align-self-center mt-5 p-0"></div>
        <div class="col-sm-4 align-self-center mt-5 p-0 bg-white">
          <div class="sign-in-from mt-5 bg-white">
            <div class="alert text-white bg-danger" role="alert">
              <div class="iq-alert-text" id="alert-msg"></div>
            </div> 
            <h1 class="mb-0 dark-signin">Sign in</h1>
            <p>Enter your email address and password to access admin panel.</p>
            <form class="mt-4 LoginFormIdentifier" method="POST" action="config/check_users.php">
              <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control mb-0" name="usrname" id="usrname" placeholder="Enter email" autocomplete="no">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control mb-0" name="pssword" id="pssword" placeholder="Password" autocomplete="no">
                <input type="hidden" class="form-control mb-0" name="type_user" id="type_user" value="userAdmin">
              </div>
              <div class="d-inline-block w-100">
                <button type="submit" class="btn btn-primary float-right">Sign in</button>
              </div>
              <div class="sign-info">
                <span class="dark-color d-inline-block line-height-2">Don't have remember my password? <a href="forget_password.php">Forget password</a></span>
                <!-- <span class="dark-color d-inline-block line-height-2">Don't have an account? <a href="sign-up.php">Sign up</a></span> -->
                <span class="dark-color d-inline-block line-height-2">I have applicant account? <a href="login_applicant.php">Sign In Applicant Side</a></span>
                <span class="dark-color d-inline-block line-height-2">I want to request Appointiment <a href="applicant.php">Request Appointiment</a></span>
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
  <!-- Chart Custom JavaScript -->
  <!-- <script src="assets/js/chart-custom.js"></script> -->
  <!-- Custom JavaScript -->
  <script src="assets/js/custom.js"></script>
  <script>    
    $(".alert").hide();
    $(".LoginFormIdentifier").on('submit',(function(e){
      e.preventDefault();
      $.ajax({
        url: "config/check_users.php",
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function(){
        // $("#"+preveiw_id).fadeOut();
        // $("#"+ouput_id).fadeOut();
        },
        success: function(data){
          // alert(data)
          var spl =data.split(",")
          if (data == "405") {
            //alert("")
            $(".alert").removeClass("bg-danger").addClass("bg-warning");
            $(".alert").show();
            $("#alert-msg").text("Sorry This user is already Deleted please contact you service provider !!");
          } 
          else if (data == "500") {
            //alert(spl[1])
            $(".alert").removeClass("bg-danger").addClass("bg-danger");
            $(".alert").show();
            $("#alert-msg").text("Username or password is incorrect please check and try again !!");
          // alert("Username or password is incorrect please check and try again !!")
          }
          else if (data == "304") {
            //alert(spl[1])
            $(".alert").removeClass("bg-danger").addClass("bg-warning");
            $(".alert").show();
            $("#alert-msg").text("Sorry This user is not active please contact you service provider !!");
          // alert("Username or password is incorrect please check and try again !!")
          }
          else if (data == "30") {
            // alert(data)
            $(".alert").removeClass("bg-danger").addClass("bg-success");
            $(".alert").show();
            $("#alert-msg").text("Successfull");
            window.location.href = "pages/";
          }
        },
        error: function(e){
        //alert("Error: "+e);
          $.notify({
            icon: "add_alert",
            message:"Error 404 > "+e
          }, {
            type: 'danger',
            timer: 3000,
            placement: {
              from: 'top',
              align: 'center'
            }
          });
        // $("#"+ouput_id).html("<p class='alert alert-danger alert-link'>"+e+"</p>").fadeIn();
        }
      });
    }));
    
  </script>
</body>
</html>