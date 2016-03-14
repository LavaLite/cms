 <div id="wrap">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div id="navbar">
                    <ul class="nav navbar-links pull-right" id="js-buttons">
                        @if(Auth::check())
                            <li><a href="{{ trans_url('home') }}" class="login">{{ get_users('name') }}</a></li>
                            <li><a href="{{ trans_url('logout') }}" class="logout">LOGOUT</a></li>
                        @else
                            <li><a href="{{ trans_url('login') }}" class="login">LOGIN</a></li>
                        @endif
                    </ul>
                </div>
                <div class="navbar-header">
                 <a class="navbar-brand" href="{{ trans_url('/') }}"> <img src="{{ asset('img/logo/default.png') }}" alt="Lavalite"> </a>
                </div>
            </div>
        </nav>
</div>