    <div class="head">
        <div class="overlay force-height-full">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <a class="navbar-brand" href="/"><img src="img/lavalite.png" alt="Lavalite" class="img-responsive"></a>
                    <ul class="nav navbar-nav  pull-right">
                    @if(Auth::check())
                        <li><a href="{{ URL::to('/home') }}" class="login">{{ get_users('name') }}</a></li>
                        <li><a href="{{ URL::to('/logout') }}" class="login">LOGOUT</a></li>
                    @else
                        <li><a href="{{ URL::to('/login') }}" class="login">LOGIN</a></li>
                    @endif
                    </ul>
                 </div>
            </nav>
            <div class="container">
                <div class="intro-well">
                    <div class="col-md-12">
                        <h1> <small> Bootstrapper for Laravel</small> </h1>
                        <h2>Content Management System.</h2>
                        <a class="btn btn-primary" href="http://www.lavalite.org/package" target="_blabk"><li class="fa fa-cubes fa-lg"></li>&nbsp;&nbsp;Packages</a>
                        <a class="btn btn-primary" href="http://www.lavalite.org/package"><li class="fa fa-book fa-lg"></li>&nbsp;&nbsp;Documentation</a>
                        <a class="btn btn-primary" href="https://github.com/LavaLite/cms/archive/master.zip"><li class="fa fa-download fa-lg"></li>&nbsp;&nbsp;Download</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <img src="{{ URL::to('img/ui-screen.jpg') }}" alt="" class="img-responsive" style=" margin: 0 auto;margin-top: 100px;" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="features">
        <div class="container">
            <div class="features-header">
                <h2>Packed with features you can't live without.</h2>
                <p> Visit our <a href="#">documentation</a> for more information. </p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature">
                        <i class="ion ion-social-github-outline"></i>
                        <h6>GitHub Status Updates</h6>
                        <p>Push your code to GitHub and we'll automatically analyze it. If something is amiss we'll immediately notify you with our GitHub Status integration.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature">
                        <i class="ion ion-ios-gear-outline"></i>
                        <h6>Configure to your standards</h6>
                        <p>Configure StyleCI to use one of our several presets, or use your own code standards. Configuring StyleCI is really easy with our in-browser config editor.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature">
                        <i class="ion ion-ios-checkmark-outline"></i>
                        <h6>Automatically fix your code</h6>
                        <p>If you want it to, StyleCI can automatically create a pull request with fixes applied and even go as far as to automatically merge the same pull request.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>