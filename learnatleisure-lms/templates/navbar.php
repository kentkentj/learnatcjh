<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <!--<div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt="">  </div>-->
        <div>
            <a class="pe-5" href="handbook">Employee HandBook</a>
            <a href="profile"><?= strtoupper($property . ' - '. $employee_first_name . ' ' . $employee_middle_name . ' ' . $employee_last_name . ' ' . $employee_suffix); ?></a>
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-book-open nav_logo-icon'></i> <span class="nav_logo-name">E-Learning <br> Management <br> System</span> </a>
                <div class="nav_list"> 
                    <a href="/learnatleisure-lms" class="nav_link <?= ($activePage == 'index') ? 'active':''; ?>"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> 
                    <a href="<?php echo $server_link;?>library" class="nav_link <?= (($activePage == 'library') || ($activePage == 'course')) ? 'active':''; ?>"> <i class='bx bx-library nav_icon'></i> <span class="nav_name">My LMS</span> </a> 
                    <?php if(($account_type == 'administrator') || ($account_type == 'instructor')):?>
                    <a href="<?php echo $server_link;?>user_accounts" class="nav_link <?= ($activePage == 'user_accounts' || $activePage == 'account') ? 'active':''; ?>"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Users</span> </a> 
                    <?php endif?>
                    <a href="<?php echo $server_link;?>conversations" class="nav_link <?= ($activePage == 'conversations') ? 'active':''; ?>"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Inbox</span> </a> 
                    <a href="<?php echo $server_link;?>calendar" class="nav_link <?= ($activePage == 'calendar') ? 'active':''; ?>"> <i class='bx bx-calendar nav_icon'></i> <span class="nav_name">Training Calendar</span> </a> 
                    <a href="news" class="nav_link <?= ($activePage == 'news') ? 'active':''; ?>"> <i class='bx bx-news nav_icon'></i> <span class="nav_name">Updates</span> </a> 
                    <a href="noticeboard" class="nav_link <?= ($activePage == 'noticeboard') ? 'active':''; ?>"> <i class='bx bx-bell nav_icon'></i> <span class="nav_name">Noticeboard</span> </a> 
                    <?php if(($account_type == 'administrator') || ($account_type == 'instructor')):?>
                    <a href="performacereview" class="nav_link <?= ($activePage == 'performacereview') ? 'active':''; ?>"> <i class='bx bx-doughnut-chart nav_icon'></i> <span class="nav_name">Performance Review</span> </a> 
                    <?php endif?>
                </div>
            </div> <a href="logout" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>