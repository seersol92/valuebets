<?php

include "ASEngine/AS.php";

if (app('login')->isLoggedIn()) {
    redirect('index.php');
}

$token = app('register')->socialToken();
ASSession::set('as_social_token', $token);
app('register')->botProtection();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Valuebets">
    <meta name="author" content="">
    <meta name="keyword" content="ValueBets">
    <title>Login | <?= WEBSITE_NAME ?></title>
    <!-- Icons-->
    <link href="assets/vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="assets/vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
  </head>
  <body class="app flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
		<img src="assets/img/logo-valuebets.svg" style="
			width: 60%;
			margin-left: auto;
			margin-right: auto;
			display: block;
			padding: 50px;
		">          
		<div class="card-group">
            <div class="card p-4">
              <div class="card-body" id="login">
                <h1>Login</h1>
                <form action="" method="POST">
                <p class="text-muted">Sign In to your account</p>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-user"></i>
                    </span>
                  </div>
                  <input type="text" name="username" class="form-control" placeholder="Your Username">
                </div>
                <div class="input-group mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-lock"></i>
                    </span>
                  </div>
                  <input type="password" name="password" class="form-control" placeholder="Your Password">
                </div>
                <div class="row">
                  <div class="col-6">
                    <button class="btn btn-primary px-4"  id="btn-login" type="submit">Login</button>
                  </div>
                  <div class="col-6 text-right">
                    <button class="btn btn-link px-0" type="button" onclick="window.location='forget_password.php'">Forgot password?</button>
                  </div>
                </div>
              </form>
              </div>
            </div>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
              <div class="card-body text-center">
                <div>
                  <h2>Sign up</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <button class="btn btn-primary active mt-3" type="button" onClick="window.location='register.php'">Register Now!</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
    <!-- Bootstrap and necessary plugins-->
    <script src="assets/vendors/jquery/js/jquery.min.js"></script>
    <script src="assets/vendors/popper.js/js/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendors/pace-progress/js/pace.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
    <script src="assets/vendors/@coreui/coreui-pro/js/coreui.min.js"></script>
    <!-- Common Scripts -->
    <script src="assets/js/vendor/sha512.js"></script>
    <script src="assets/js/vendor/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/js/app/bootstrap.php"></script>
    <script src="assets/js/app/common.js"></script>
    <?php if (ASLang::getLanguage() != DEFAULT_LANGUAGE) : ?>
    <script src="assets/js/vendor/jquery-validate/localization/messages_<?= ASLang::getLanguage() ?>.js"></script>
    <?php endif; ?>
    <!-- Page Scripts -->
    <script type="text/javascript" src="assets/js/app/login.js"></script>
    <script type="text/javascript" src="assets/js/app/register.js"></script>
    <script type="text/javascript" src="assets/js/app/passwordreset.js"></script>


    <script>
      $('#ui-view').ajaxLoad();
      $(document).ajaxComplete(function() {
        Pace.restart()
      });
    </script>
  </body>
</html>