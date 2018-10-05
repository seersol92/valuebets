<?php

include "ASEngine/AS.php";

if (! isset($_GET['k'])) {
    redirect('login.php');
}

$valid = app('validator')->prKeyValid($_GET['k']);
?>
<!doctype html>
<html lang="en"> 
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        
        <title><?= trans('password_reset') ?> | <?= WEBSITE_NAME ?></title>

        <link href="assets/vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
        <link href="assets/vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
        <link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
        <!-- Main styles for this application-->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            
            <div class="col-md-8 col-lg-6 col-xl-5 mx-auto" style="margin-top: 10%; margin-bottom: 10%;">				<img src="assets/img/logo-valuebets.svg" style="				width: 60%;				margin-left: auto;				margin-right: auto;				display: block;				padding: 50px;				">
                <div class="card" >
                    <div class="card-body pt-4">

                        <div class="px-4 pb-3">
                            <?php if ($valid) : ?>
                                <!-- start: Reset Password Form -->
                                <div class="form-wrapper active">
                                    <h6 class="text-uppercase mb-5 mt-3">
                                        <?= trans('reset_password') ?>
                                    </h6>

                                    <form id="password-reset-form">
                                        <div class="form-group">
                                            <label>
                                                <?= trans('new_password') ?>
                                            </label>
                                            <input type="password" name="new_password" class="form-control">
                                        </div>

                                        <button id="btn-reset-pass"
                                                type="submit"
                                                class="btn btn-primary mt-4 btn-block btn-lg"
                                                data-loading-text="<?= trans('resetting') ?>">
                                            <?= trans('reset_password') ?>
                                        </button>
                                    </form>
                                </div>
                                <!-- end: Reset Password Form -->
                            <?php else : ?>
                                <h5 class="text-danger text-center mt-3">
                                    <?= trans('invalid_password_reset_key') ?>
                                </h5>
                                <div class="text-center text-muted mt-3 sign-in-controls">
                                    <?= trans('login') ?>
                                    <a href="login.php" class="form-change"><?= trans('login') ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Common Scripts -->
        <script src="assets/js/vendor/sha512.js"></script>
        <script src="assets/js/vendor/jquery.min.js"></script>
        <script src="assets/js/vendor/popper.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/vendor/jquery-validate/jquery.validate.min.js"></script>
        <script src="assets/js/app/bootstrap.php"></script>
        <script src="assets/js/app/common.js"></script>

        <!-- Page Scripts -->
        <script type="text/javascript" src="assets/js/app/passwordreset.js"></script>
    </body>
</html>