    <div class="head">
        <div class="overlay force-height-full">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <a class="navbar-brand" href="{{trans_url('/')}}"><img src="{{theme_asset('img/logo/white.svg')}}" alt="Lavalite" class="img-responsive"></a>
                    <ul class="nav navbar-nav  pull-right navbar-right">
                        <li class="dropdown pages">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <span class="hidden-xs">Pages <i class="ion ion-ios-arrow-down"></i></span>
                                    <span class="hidden-sm hidden-md hidden-lg"><i class="fa fa-bars"></i></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="">
                                        <a href="blocks">
                                            Blocks
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="blogs">
                                            Blog
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="careers/job">
                                            Jobs
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="contacts">
                                            Contacts
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="faq">
                                            Faqs
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="forums">
                                            Forum
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="galleries">
                                            Gallery
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="news">
                                            News
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="portfolio">
                                            Portfolios
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="pricelists">
                                            PriceLists
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="teams">
                                            Team
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="testimonials">
                                            Testimonial
                                        </a>
                                    </li>
                                </ul>
                            </li>
                    @if(user_check())
                        <li>
                            <a href="{{ trans_url('home') }}" class="login">
                                <span class="hidden-xs">{{ users('name') }}</span>
                                <span class="hidden-sm hidden-md hidden-lg"><i class="fa fa-user"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ trans_url('logout') }}" class="login">
                                <span class="hidden-xs">Logout</span>
                                <span class="hidden-sm hidden-md hidden-lg"><i class="fa fa-sign-out"></i></span>
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="{{ trans_url('register') }}" class="login">
                                <span class="hidden-xs">Register</span>
                                <span class="hidden-sm hidden-md hidden-lg"><i class="fa fa-user"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ trans_url('login') }}" class="login">
                                <span class="hidden-xs">Login</span>
                                <span class="hidden-sm hidden-md hidden-lg"><i class="fa fa-sign-in"></i></span>
                            </a>
                        </li>
                    @endif
                      </ul>
                 </div>
            </nav>
            <div class="container">
                <div class="intro-well">
                    <div class="col-md-12">
                        <h1> <small> Bootstrapper for Laravel</small> </h1>
                        <h2>Content Management System.</h2>
                        <a class="btn btn-purple btn-sm text-uppercase" href="http://www.lavalite.org/package" target="_blabk"><li class="fa fa-cubes fa-lg"></li>&nbsp;&nbsp;Packages</a>
                        <a class="btn btn-purple btn-sm text-uppercase" href="https://github.com/LavaLite/cms/wiki" target="_blabk"><li class="fa fa-book fa-lg"></li>&nbsp;&nbsp;Documentation</a>
                        <a class="btn btn-purple btn-sm text-uppercase" href="https://github.com/LavaLite/cms/archive/master.zip" target="_blabk"><li class="fa fa-download fa-lg"></li>&nbsp;&nbsp;Download</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <img src="{{ theme_asset('img/ui-screen.png') }}" alt="" class="img-responsive center-block" style="margin-top: 100px;" />
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
