<?php

include "ASEngine/AS.php";

if (! isset($_GET['k'])) {
    redirect('login.php');
}

$key = $_GET['k'];
$valid = app('validator')->confirmationKeyValid($key);

if ($valid) {
    app('db')->update(
        'as_users',
        array("confirmed" => "Y"),
        "`confirmation_key` = :k",
        array("k" => $key)
    );
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Advanced Security - PHP MySQL Register/Login System">
    <meta name="author" content="Milos Stojanovic (@loshmis)">

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
        
        <div class="col-md-8 col-lg-6 col-xl-5 mx-auto" style="margin-top: 8%; margin-bottom: 10%;">

            <h3 class="text-center">
                <?= WEBSITE_NAME ?>
            </h3>

            <div class="card mt-5">
                <div class="card-body pt-4">

                    <div class="px-4 pb-3">
                        <?php if ($valid) : ?>
                            <p class="text-success text-center lead mb-0">
                                <?= trans('email_confirmed') ?>!
                                <?= trans('you_can_login_now', array('link' => 'login.php')) ?>
                            </p>
                        <?php else : ?>
                            <h4 class="text-error text-center"><?= trans('user_with_key_doesnt_exist') ?></h4>
                        <?php endif; ?>
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
</body>
</html>