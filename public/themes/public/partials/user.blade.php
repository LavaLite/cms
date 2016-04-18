<div class="panel panel-default">
    <div class="panel-heading">My  <small>Account</small></div>
    <div class="panel-body">
        <ul class="nav nav-pills nav-stacked">
            <li class="presentation"> <a href="{{ trans_url('home') }}"><i class="fa fa-tachometer fa-fw"></i> Dashboard </a></li>
            <li class="presentation"><a href="{{ trans_url('/user/profile') }}"><i class="fa fa-user  fa-fw"></i> Profile </a></li>
            <li class="presentation"><a href="{{ trans_url('/user/password') }}"><i class="fa fa-key  fa-fw"></i> Password </a></li>
            @is('admin')
            <li class="presentation"><a href="{{ trans_url('/admin') }}"><i class="fa fa-cog  fa-fw"></i> Manage site </a></li>
            @endis
            <li class="presentation"><a href="{{ trans_url('/logout') }}"><i class="fa fa-sign-out  fa-fw"></i> Logout </a></li>
        </ul>
    </div>
</div>
