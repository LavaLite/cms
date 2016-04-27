<div class="panel panel-default">
    <div class="panel-heading">My  <small>Account</small></div>
    <div class="panel-body">
        <ul class="nav nav-pills nav-stacked">
            <li class="presentation"> <a href="{{ trans_url('client') }}"><i class="fa fa-tachometer fa-fw"></i> Dashboard </a></li>
            <li class="presentation"><a href="{{ trans_url('client/profile') }}"><i class="fa fa-user  fa-fw"></i> Profile </a></li>
            <li class="presentation"><a href="{{ trans_url('client/password') }}"><i class="fa fa-key  fa-fw"></i> Password </a></li>

            <li class="presentation"><a href="{{ trans_url('/logout?role=client.web') }}"><i class="fa fa-sign-out  fa-fw"></i> Logout </a></li>
        </ul>
    </div>
</div>
