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
    <title>Register | <?= WEBSITE_NAME ?></title>
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
            <div class="col-md-6">
                <div class="card mx-4">
                    <div class="card-body p-3" id="forgot">
                        <h3 class="mb-4 mt-4">Recover Password </h3>
                        <form action="" method="POST">

                        <div class="form-group">
                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                <i class="icon-user"></i>
                                </span>
                            </div>
                            <input type="email" name="email" class="form-control" placeholder="Your Email..">
                        </div>
                        </div>
                        <button id="btn-forgot-password"
                                type="submit"
                                class="btn btn-success mt-4  btn-block btn-lg"
                                data-loading-text="<?= trans('resetting') ?>">
                                Recover Password
                        </button> 

                        </form>
                    </div>
                <div class="card-footer">
                <div class="col-12">
                <div class="text-center text-muted mt-3 sign-in-controls">
                    <a href="login.php" class="form-change"><?= trans('login') ?></a>
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
    <script type="text/javascript" src="assets/js/app/passwordreset.js"></script>


    <script>
      $('#ui-view').ajaxLoad();
      $(document).ajaxComplete(function() {
        Pace.restart()
      });
    </script>
  </body>
</html>