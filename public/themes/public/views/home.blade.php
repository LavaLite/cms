<div class="full-height landing">
            <header class="main-header">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" onclick="toggleNav()" id="nav_btn" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <a class="navbar-brand" href="{{trans_url('/')}}"><img src="{{theme_asset('img/logo/logo.svg')}}" alt=""></a>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                {!!Menu::menu('main')!!}
                            </ul>
                            <ul class="nav navbar-nav navbar-right hidden-sm hidden-xs">
                                <li><a href="https://twitter.com/lavalitecms" target="_new" class="social-icons"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.facebook.com/lavalite" target="_new" class="social-icons"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="https://github.com/lavalite" target="_new" class="social-icons"><i class="fa fa-github"></i></a></li>
                                <li><a href="#" data-toggle="modal" data-target="#loginModal" class="btn">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <a href="login.html" class="login_btn btn hidden-md hidden-lg">Login</a>
                <a href="https://github.com/lavalite" target="_new" class="github_btn hidden-md hidden-lg"><i class="fa fa-github"></i></a>
            </header>

            <div class="route-landing">
                <div id="wrap" class="no-overflow">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="intro-well">
                                    <h1>Bootstrapper for Laravel</h1>
                                    <h3>Content Management System.</h3>
                                    <a class="btn btn-default btn-round" href="http://www.lavalite.org/packages" target="_blank">
                                        <i class="ti-package"></i>Packages
                                    </a>
                                    <a class="btn btn-default btn-round" href="http://lavalite.org/docs" target="_blank">
                                        <i class="ti-notepad"></i>Documentation
                                    </a>
                                    <a class="btn btn-default btn-round" href="https://github.com/LavaLite/cms/archive/master.zip" target="_blank">
                                        <i class="ti-import"></i>Download
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <img src="{{theme_asset('img/ui-screen.png')}}" alt="" class="img-responsive center-block" style="margin-top: 95px;" />
                    </div>
                </div>
            </div>
            <div class="stripes-wraper">
                <div class="stripes">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>

        <div class="inner-pages">
            <section class="features">
                <div class="container">
                    {!!Block::display('features')!!}
                </div>
            </section>
        </div>

