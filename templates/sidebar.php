<!--<div class="col-lg-2 col-md-3">
    <div class="list-group list-group-borderless">
        <a href="index.php"
           class="list-group-item list-group-item-action <?//= $sidebarActive == 'home' ? 'active' : '' ?>">
            <i class="fa fa-home"></i>
            <?//= trans('home') ?>
        </a>
        <a href="profile.php"
           class="list-group-item list-group-item-action <?//= $sidebarActive == 'profile' ? 'active' : '' ?>">
            <i class="fa fa-user"></i>
            <?//= trans('my_profile') ?>
        </a>
        <?php //if (app('current_user')->is_admin) : ?>
            <a href="users.php"
               class="list-group-item list-group-item-action <?//= $sidebarActive == 'users' ? 'active' : '' ?>">
                <i class="fa fa-users"></i>
                <?//= trans('users') ?>
            </a>
            <a href="user_roles.php"
               class="list-group-item list-group-item-action <?//= $sidebarActive == 'roles' ? 'active' : '' ?>">
                <i class="fa fa-user-secret"></i>
                <?//= trans('user_roles') ?>
            </a>
        <?php// endif; ?>
    </div>
</div>
--->

<div class="sidebar">
   <nav class="sidebar-nav">
      <ul class="nav">
         <li class="nav-item">
            <a class="nav-link" href="main.html">
            <i class="nav-icon icon-speedometer"></i> BankRoll
            <span class="badge badge-info">10000USD</span>
            </a>
         </li>
         <li class="nav-title">ADMIN MENU</li>
         <li class="nav-item">
            <a class="nav-link" href="./admin_dashboard.php">
            <i class="nav-icon icon-layers"></i> Dashboard</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="./comparing.php">
            <i class="nav-icon icon-layers"></i> Comparing</a>
         </li>
         <li class="nav-title">MENU</li>
         <li class="nav-item">
            <a class="nav-link" href="./">
            <i class="nav-icon icon-layers"></i> Dashboard</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="bets_feeds.php">
            <i class="nav-icon icon-note"></i> Bets Feed</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="my_bets.php">
            <i class="nav-icon icon-list"></i> My Bets</a>
         </li>
      </ul>
   </nav>
   <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>