 <div id="wrap">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div id="navbar">
                    <ul class="nav navbar-links pull-right" id="js-buttons">
                        @if(Auth::check())
                            <li><a href="{{ URL::to('/home') }}" class="login">{{ get_users('name') }}</a></li>
                            <li><a href="{{ URL::to('/logout') }}" class="logout">LOGOUT</a></li>
                        @else
                            <li><a href="{{ URL::to('/login') }}" class="login">LOGIN</a></li>
                        @endif
                    </ul>
                </div>
                <div class="navbar-header">
                 <a class="navbar-brand" href="{{ URL::to('/') }}"> <img src="{{ asset('img/logo/inverse.png') }}" height="36" alt="Lavalite"> </a>
                </div>
            </div>
        </nav>
</div>