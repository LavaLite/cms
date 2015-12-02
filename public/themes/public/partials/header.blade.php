<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#page-top">Lavalite</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="/#about">About</a>
                </li>
                <li class="page-scroll">
                    <a href="/#portfolio">Resources</a>
                </li>
                <li class="page-scroll">
                    <a href="/#contact">Contact</a>
                </li>
                @if(User::check())
                <li class="page-scroll">
                    <a href="/user/home">My Account</a>
                </li>
                <li class="page-scroll">
                    <a href="/auth/user/logout">Logout</a>
                </li>
                @else
                <li class="page-scroll">
                    <a href="/auth/user/login">Login</a>
                </li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>