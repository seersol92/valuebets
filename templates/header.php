<?php

include dirname(__FILE__) . '/../ASEngine/AS.php';

if (! app('login')->isLoggedIn()) {
    redirect("login.php");
}

$currentUser = app('current_user');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="<?= WEBSITE_NAME ?>">
    <meta name="author" content=" ">
    <meta name="keyword" content="">
    <title><?= trans('home') ?> | <?= WEBSITE_NAME ?></title>
    <!-- Icons-->
    <link href="assets/vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="assets/vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
  

<header class="app-header navbar">
   <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
   <span class="navbar-toggler-icon"></span>
   </button>
   <a class="navbar-brand" href="#">
   <img class="navbar-brand-full" src="assets/img/brand/logo.svg" width="89" height="25" alt="CoreUI Logo">
   <img class="navbar-brand-minimized" src="assets/img/brand/sygnet.svg" width="30" height="30" alt="CoreUI Logo">
   </a>
   <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
   <span class="navbar-toggler-icon"></span>
   </button>
 
   <ul class="nav navbar-nav ml-auto">
      <li class="nav-item dropdown" style="right: 30px;">
         <a class="nav-link nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
         <img class="img-avatar" src="assets/img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
         </a>
         <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center">
               <strong>Account</strong>
            </div>
            <a class="dropdown-item" href="#">
            <i class="fa fa-bell-o"></i> Updates
            <span class="badge badge-info">42</span>
            </a>
            <a class="dropdown-item" href="#">
            <i class="fa fa-envelope-o"></i> Messages
            <span class="badge badge-success">42</span>
            </a>
            <a class="dropdown-item" href="#">
            <i class="fa fa-tasks"></i> Tasks
            <span class="badge badge-danger">42</span>
            </a>
            <a class="dropdown-item" href="#">
            <i class="fa fa-comments"></i> Comments
            <span class="badge badge-warning">42</span>
            </a>
            <div class="dropdown-header text-center">
               <strong>Settings</strong>
            </div>
            <a class="dropdown-item" href="#">
            <i class="fa fa-user"></i> Profile</a>
            <a class="dropdown-item" href="#">
            <i class="fa fa-wrench"></i> Settings</a>
            <a class="dropdown-item" href="#">
            <i class="fa fa-usd"></i> Payments
            <span class="badge badge-dark">42</span>
            </a>
            <a class="dropdown-item" href="#">
            <i class="fa fa-file"></i> Projects
            <span class="badge badge-primary">42</span>
            </a>
            <div class="divider"></div>
            <a class="dropdown-item" href="#">
            <i class="fa fa-shield"></i> Lock Account</a>
            <a class="dropdown-item" href="logout.php">
            <i class="fa fa-lock"></i> Logout</a>
         </div>
      </li>
   </ul>
</header>
<div class="app-body" style="overflow-x: unset;">
<?php include 'sidebar.php'; ?>