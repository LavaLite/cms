<?php
function humanTiming ($time)
{
$time = time() - $time; // to get the time since that moment
$time = ($time<1)? 1 : $time;
    $tokens = array ( 31536000 => 'year', 2592000 => 'month', 604800 => 'week', 86400 => 'day', 3600 => 'hour', 60 => 'minute', 1 => 'second');
    foreach ($tokens as $unit =>
    $text) {
    if ($time < $unit) continue;
    $numberOfUnits = floor($time / $unit);
    return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
    }
    }
    ?>
<header class="main-header">
    <!-- Logo -->
    <a href="{{ Trans::to('admin') }}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini">{!!trans('cms.name.short')!!}</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg">{!!trans('cms.name.html')!!}</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success"> {!!Message::count('Inbox')!!}</span>
                </a>
                {!! Message::display('drop') !!}
                </li>
                <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-calendar"></i>
                  <span class="label label-warning">  {!!count(Calendar::latestEvents())!!}</span>
                </a>
                {!! Calendar::display('drop') !!}
                </li>
                <!-- Tasks: style can be found in dropdown.less -->
                <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">  {!!count(Task::tasks())!!}</span>
                </a>
                {!! Task::display('drop') !!}
                </li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{!!User::users('picture')!!}" class="user-image" alt="User Image"/>
                    <span class="hidden-xs">{!!User::users('name')!!}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{!!User::users('picture')!!}" class="img-circle" alt="User Image" />
                            <p>
                            {!!User::users('name')!!} - {!!User::users('designation')!!}
                            <small>Member since {!!User::users('joined')!!}</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="col-xs-12 text-center">
                              <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                              <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                              <a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ URL::to('admin/profile') }}" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ URL::to('logout') }}" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                  <!-- Control Sidebar Toggle Button -->
                  <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                  </li>
            </ul>
        </div>
    </nav>
</header>
<style type="text/css">
    .img-circle{
        width: 40px;
        height: 40px;
        margin: auto 10px auto auto; 
    }
    .dropdown-menu > li .menu > li > a > h4 {
    padding: 0;
    margin: 0 0 0 45px;
    color: #444444;
    font-size: 15px;
    position: relative;
}
.dropdown-menu > li .menu > li > a > p {
    margin: 0 0 0 45px;
    font-size: 12px;
    color: #888888;
}
.dropdown-menu > li .menu > li > a > h4 > small {
    color: #999999;
    font-size: 10px;
    position: absolute;
    top: 0;
    right: 0;
}
</style>