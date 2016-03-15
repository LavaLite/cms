    <div class="head">
        <div class="overlay force-height-full">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <a class="navbar-brand" href="{{trans_url('/')}}"><img src="{{asset('img/logo/inverse.png')}}" alt="Lavalite" class="img-responsive"></a>
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
                        <a class="btn btn-primary" href="https://github.com/LavaLite/cms/wiki" target="_blabk"><li class="fa fa-book fa-lg"></li>&nbsp;&nbsp;Documentation</a>
                        <a class="btn btn-primary" href="https://github.com/LavaLite/cms/archive/master.zip" target="_blabk"><li class="fa fa-download fa-lg"></li>&nbsp;&nbsp;Download</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <img src="{{ URL::to('img/ui-screen.png') }}" alt="" class="img-responsive" style=" margin: 0 auto;margin-top: 100px;" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="features">
        <div class="container">
            <div class="features-header">
                <h2>Packed with features you can't live without.</h2>
                <p> Visit our <a href="https://github.com/LavaLite/cms/wiki">documentation</a> for more information. </p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature">
                        <i class="ion ion-social-github-outline"></i>
                        <h6>Powered by Laravel 5.2</h6>
                        <p>We have tried to make use of all features of Laravel 5.2 which help you to develop the website with all resources available online.​ ​ </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature">
                        <i class="ion ion-ios-gear-outline"></i>
                        <h6>Configure to your project</h6>
                        <p>Lavalite helps you to configure your Laravel projects easily. It acts as a bootstrapper for your Laravel Content Management System.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature">
                        <i class="ion ion-ios-checkmark-outline"></i>
                        <h6>Online package builder</h6>
                        <p>The online package builder helps you to build Lavalite packages easily, The downloaded package with basic required files help you to finish your projects quickly.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>