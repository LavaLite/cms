<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 platform-links">
                    <ul class="footer-links">
                        <li><a href="#" target="_blank">About</a></li>
                        @if(Auth::check())
                            <li><a href="{{ URL::to('logout') }}" class="logout">Logout</a></li>
                        @else
                            <li><a href="{{ URL::to('login') }}" class="login"  target="_blank">Login</a></li>
                        @endif

                    </ul>
                </div>
                <div class="col-sm-2 logo">
                    <a href="http://www.lavalite.org/"><img src="{{ asset('favicon.png') }}" height="28" alt="Lavalite"></a>
                </div>
                <div class="col-sm-5 social">
                    <ul class="footer-links">
                        <li><a href="#" target="_blank">Twitter</a></li>
                        <li><a href="#" target="_blank">GitHub</a></li>
                        <li><a href="#" target="_blank">Facebook</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 copyright"> © 2016 Lavalite </div>
            </div>
        </div>
    </div>
</footer>
