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
				<img src="assets/img/logo-valuebets.svg" style="
				width: 60%;
				margin-left: auto;
				margin-right: auto;
				display: block;
				padding: 50px;
				">
              <div class="card mx-4">
                <div class="card-body p-4" id="create">
                  <h1>Register</h1>
                  <form action="" method="POST">
                  <p class="text-muted">Create your account</p>

                  <div class="form-group">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="icon-user"></i>
                      </span>
                    </div>
                    <input class="form-control" type="text" placeholder="Username" name="username" >
                  </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                      </div>
                      <input class="form-control" type="text" placeholder="Email" name="email">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="icon-lock"></i>
                        </span>
                      </div>
                      <input class="form-control" type="password" placeholder="Password" name="password">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="icon-lock"></i>
                        </span>
                      </div>
                      <input class="form-control" type="password" placeholder="Repeat password" name="password_confirmation">
                    </div>
                  </div>

                  <div class="form-group">
                      <label>
                          <?= ASSession::get("bot_first_number") ?> +
                          <?= ASSession::get("bot_second_number") ?>
                          <span class="required">*</span>
                      </label>
                      <input type="text" name="bot_protection" class="form-control" placeholder="Your Answer Here..">
                  </div>

                  <button id="btn-register"
                          type="submit"
                          class="btn btn-primary  btn-block btn-lg"
                          data-loading-text="<?= trans('creating_account') ?>">
                          Create Account
                  </button>            
                  </form>
                </div>
            <div class="card-footer p-4">
              <div class="row">
                <div class="col-12">
                <?php if (FACEBOOK_ENABLED) : ?>
                    <button class="btn btn-block btn-facebook" type="button"
                    onClick="window.location='socialauth.php?p=facebook&token=<?= $token ?>'"
                    >
                      <span>Login with FACEBOOK</span>
                    </button>
                    <?php endif; ?>
                  </div>
              </div>
              <div class="col-12">
              <div class="text-center text-muted mt-3 sign-in-controls">
                <?= trans('already_have_an_account') ?>
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