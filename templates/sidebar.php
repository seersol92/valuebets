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
         <li class="nav-title">MENU</li>
         <li class="nav-item">
            <a class="nav-link" href="colors.html">
            <i class="nav-icon icon-layers"></i> Dashboard</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="betsfeeds.php">
            <i class="nav-icon icon-note"></i> Bets Feed</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="typography.html">
            <i class="nav-icon icon-list"></i> My Bets</a>
         </li>
        <!-- <li class="nav-title">Components</li>
         <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#">
            <i class="nav-icon icon-puzzle"></i> Base</a>
            <ul class="nav-dropdown-items">
               <li class="nav-item">
                  <a class="nav-link" href="base/breadcrumb.html">
                  <i class="nav-icon icon-puzzle"></i> Breadcrumb</a>
               </li>
               
            </ul>
         </li>
         -->
      </ul>
   </nav>
   <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
