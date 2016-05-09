 <div id="wrap">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div id="navbar">
                <ul class="nav navbar-links pull-right" id="js-buttons">
                        <li>
                            <a href="{{ trans_url('client') }}">
                                <span class="hidden-xs">Client</span>
                                <span class="hidden-sm hidden-md hidden-lg"><i class="fa fa-user"></i></span>
                            </a>
                        </li>
                    @if(Auth::check())
                        <li>
                            <a href="{{ trans_url('home') }}">
                                <span class="hidden-xs">{{ get_users('name') }}</span>
                                <span class="hidden-sm hidden-md hidden-lg"><i class="fa fa-user"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ trans_url('logout') }}">
                                <span class="hidden-xs">Logout</span>
                                <span class="hidden-sm hidden-md hidden-lg"><i class="fa fa-sign-out"></i></span>
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="{{ trans_url('register') }}">
                                <span class="hidden-xs">Register</span>
                                <span class="hidden-sm hidden-md hidden-lg"><i class="fa fa-user"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ trans_url('login') }}">
                                <span class="hidden-xs">Login</span>
                                <span class="hidden-sm hidden-md hidden-lg"><i class="fa fa-sign-in"></i></span>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
            <div class="navbar-header">
             <a class="navbar-brand" href="{{ trans_url('/') }}"> <img src="{{ asset('img/logo/default.png') }}" alt="Lavalite"> </a>
            </div>
        </div>
    </nav>
</div>
