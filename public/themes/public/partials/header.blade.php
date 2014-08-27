<!-- Start partials /themes/public-lavalite/partials/header.blade.php -->
        <!-- Top Bar -->
        <header id="topHead">
            <div class="container">

                <!-- PHONE/EMAIL -->
                <span class="quick-contact pull-left">
                    <i class="fa fa-phone"></i> 1800-555-1234 &bull;
                    <a class="hidden-xs" href="mailto:mail@yourdomain.com">mail@domain.com</a>
                </span>
                <!-- /PHONE/EMAIL -->

                <!-- LANGUAGE -->
                <div class="btn-group pull-right hidden-xs">
                    <div class="row">
                        <div class="col-md-5">
                            <button class="dropdown-toggle language" type="button" data-toggle="dropdown">
                                <img src="{{Theme::asset()->url('images/flags/us.png')}}" width="16" height="11" alt="EN Language" /> English <span class="caret"></span>
                            </button>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">
                                        <img src="{{Theme::asset()->url('images/flags/us.png')}}" width="16" height="11" alt="EN Language" /> [US] English
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{Theme::asset()->url('images/flags/de.png')}}" width="16" height="11" alt="DE Language" /> [DE] German
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{Theme::asset()->url('images/flags/fr.png')}}" width="16" height="11" alt="FR Language" /> [FR] French
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{Theme::asset()->url('images/flags/ru.png')}}" width="16" height="11" alt="RU Language" /> [RU] Russian
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-7">
                            {{ SocialIcon::socialIcon('3','headerIcon') }}
                        </div>
                    </div>
                </div>
                <!-- /LANGUAGE -->


                <!-- SIGN IN -->
                <div class="pull-right nav signin-dd">
                    <a id="quick_sign_in" href="page-signin.html" data-toggle="dropdown"><i class="fa fa-users"></i><span class="hidden-xs"> Sign In</span></a>
                    <div class="dropdown-menu" role="menu" aria-labelledby="quick_sign_in">

                        <h4>Sign In</h4>
                         @include('user::partials.notifications')
                    {{ Former::vertical_open()
                    ->id('contact')
                    ->method('POST')
                    ->action('login')}}

                            <div class="form-group"><!-- email -->
                               {{ Former::email('email')
                    -> label('')
                    -> placeholder(trans('user::user.placeholder.email'))}}
                            </div>

                            <div class="input-group">

                                <!-- password -->
                                {{ Former::password('password')
                    -> label('')
                    -> placeholder(trans('user::user.placeholder.password'))}}

                                <!-- submit button -->
                                <span class="input-group-btn">
                                    <button class="btn btn-primary">Sign In</button>
                                </span>

                            </div>

                            <div class="checkbox"><!-- remmember -->
                                <label>
                                                                   {{ Form::checkbox('rememberMe', 'rememberMe') }} {{trans('user::user.remember')}} &bull; <a href="page-signin.html">Forgot password?</a>
                                </label>
                            </div>

                 {{ Former::close() }}

                        <hr />

                        <a href="#" class="btn-facebook fullwidth radius3"><i class="fa fa-facebook"></i> Connect With Facebook</a>
                        <a href="#" class="btn-twitter fullwidth radius3"><i class="fa fa-twitter"></i> Connect With Twitter</a>
                        <!--<a href="#" class="btn-google-plus fullwidth radius3"><i class="fa fa-google-plus"></i> Connect With Google</a>-->

                        <p class="bottom-create-account">
                            <a href="{{ URL::to('/register') }}">Manual create account</a>
                        </p>
                    </div>
                </div>
                <!-- /SIGN IN -->

                <!-- CART MOBILE BUTTON -->
                <a class="pull-right" id="btn-mobile-quick-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
                <!-- CART MOBILE BUTTON -->

                <!-- LINKS -->
                <div class="pull-right nav hidden-xs">
                    <a href="{{ URL::to('about-us.html') }}"><i class="fa fa-angle-right"></i> About</a>
                    <a href="{{ URL::to('/contact.htm') }}"><i class="fa fa-angle-right"></i> Contact</a>

                </div>
                <!-- /LINKS -->
            </div>
        </header>
        <!-- /Top Bar -->

        <!-- TOP NAV -->
        <header id="topNav" class="topHead"><!-- remove class="topHead" if no topHead used! -->
            <div class="container">

                <!-- Mobile Menu Button -->
                <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Logo text or image -->
                <a class="logo" href="{{ URL::to('/') }}">
                    <img src="{{Theme::asset()->url('images/logo.png')}}" alt="Atropos" />
                </a>

                <!-- Top Nav -->
                <div class="navbar-collapse nav-main-collapse collapse pull-right">
                    <nav class="nav-main mega-menu">
                        <ul class="nav nav-pills nav-main scroll-menu" id="topMain">
                            <li class="dropdown active">
                                <a class="dropdown-toggle" href="#">
                                    Home <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu"><a href="#">Revolution Slider</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="revolution-half-slider.html">Half Slider</a></li>
                                            <li><a href="revolution-full-slider.html">Full Slider</a></li>
                                            <li><a href="revolution-video.html">Full Video</a></li>
                                            <li><a href="revolution-ken-burns.html">Ken Burns</a></li>
                                            <li><a href="revolution-official-1.html">More Examples</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a href="#">Superslides Slider</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="superslides-slider-half.html">Half Slider</a></li>
                                            <li><a href="superslides-slider-full.html">Full Slider</a></li>
                                            <li><a href="superslides-video.html">Half Video</a></li>
                                            <li><a href="superslides-video-full.html">Full Video</a></li>
                                        </ul>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="index-extended.html">Extended</a></li>
                                    <li><a href="portfolio-home.html">Portfolio</a></li>
                                    <li><a href="{{URL::to('/shop')}}">Shop</a></li>
                                    <li class="divider"></li>
                                    <li><a href="onepage-superslides.html" target="_blank">Onepage - Superslides</a></li>
                                    <li><a href="onepage-revolution.html" target="_blank">Onepage - Revolution</a></li>
                                    <li><a href="index-more.html">More...</a></li>
                                </ul>
                            </li>
                            <li class="dropdown mega-menu-item mega-menu-two-columns">
                                <a class="dropdown-toggle" href="#">Pages
                                <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="mega-menu-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <ul class="sub-menu">

                                                                <li><a href="shortcodes-rows.html"><i class="fa fa-star-o"></i> Shortcodes</a></li>
                                                                <li><a href="{{ URL::to('/about-us.html') }}"><i class="fa fa-check-square-o"></i> About Us</a></li>
                                                                <li><a href="page-about-me.html"><i class="fa fa-check-square-o"></i> About Me</a></li>
                                                                <li><a href="page-team.html"><i class="fa fa-check-square-o"></i> Team</a></li>
                                                                <li><a href="page-services.html"><i class="fa fa-check-square-o"></i> Services</a></li>
                                                                <li><a href="{{ URL::to('/f_aq') }}"><i class="fa fa-check-square-o"></i> FAQ</a></li>
                                                                <li><a href="page-support.html"><i class="fa fa-check-square-o"></i> Support</a></li>
                                                                <li><a href="page-privacy-policy.html"><i class="fa fa-check-square-o"></i> Privacy Policy</a></li>
                                                                <li><a href="page-terms-and-conditions.html"><i class="fa fa-check-square-o"></i> Terms Page</a></li>
                                                                <li><a href="page-invoice.html"><i class="fa fa-check-square-o"></i> Invoice</a></li>
                                                                <li class="dropdown-submenu">
                                                                    <a href="#"><i class="fa fa-check-square-o"></i> Contact</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="{{ URL::to('/contact.htm') }}">Version 1</a></li>
                                                                        <li><a href="contact-us-2.html">Version 2</a></li>
                                                                        <li><a href="contact-us-3.html">Version 3</a></li>
                                                                        <li><a href="contact-us-4.html">Version 4</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a href="{{ URL::to('/sitemap.html') }}"><i class="fa fa-sitemap"></i> Sitemap</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <ul class="sub-menu">
                                                                <li><a href="/testimonial"><i class="fa fa-check-square-o"></i> Testimonials</a></li>
                                                                <li><a href="page-pricing.html"><i class="fa fa-check-square-o"></i> Pricing</a></li>
                                                                <li><a href="page-signin.html"><i class="fa fa-check-square-o"></i> Login</a></li>
                                                                <li><a href="page-signup.html"><i class="fa fa-check-square-o"></i> Register</a></li>
                                                                <li><a href="page-404.html"><i class="fa fa-check-square"></i> 404 Error</a></li>
                                                                <li><a href="page-maintenance.html"><i class="fa fa-check-square"></i> Maintenance</a></li>
                                                                <li class="dropdown-submenu">
                                                                    <a href="#"><i class="fa fa-check-square"></i> Coming Soon</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="page-coming-soon-image.html">Coming Soon - Image</a></li>
                                                                        <li><a href="page-coming-soon-video.html">Coming Soon - Video</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-submenu">
                                                                    <a href="#"><i class="fa fa-check-square"></i> Custom Header</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="page-header-basic.html">Basic</a></li>
                                                                        <li><a href="page-header-image.html">Image</a></li>
                                                                        <li><a href="page-header-overlay1.html">Overlay 1</a></li>
                                                                        <li><a href="page-header-overlay2.html">Overlay 2</a></li>
                                                                        <li><a href="page-header-overlay3.html">Overlay 3</a></li>
                                                                        <li><a href="page-header-delayed-parallax.html">Delayed Parallax</a></li>
                                                                        <li><a href="page-header-standard-parallax.html">Standard Parallax</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a href="page-full-width.html"><i class="fa fa-check-square-o"></i> Full width</a></li>
                                                                <li><a href="page-left-sidebar.html"><i class="fa fa-check-square-o"></i> Left Sidebar</a></li>
                                                                <li><a href="page-right-sidebar.html"><i class="fa fa-check-square-o"></i> Right Sidebar</a></li>
                                                                <li><a href="email-template.html"><i class="fa fa-envelope"></i>Email Template</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown mega-menu-item mega-menu-fullwidth">
                                <a class="dropdown-toggle" href="#">
                                    Features <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="mega-menu-content">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <span class="mega-menu-sub-title">General Features</span>
                                                            <ul class="sub-menu">
                                                                <li><a href="feature-grid-system.html">Grid System</a></li>
                                                                <li><a href="feature-icons.html">Icons</a></li>
                                                                <li><a href="{{ URL::to('/pricelist') }}"><em>Pricing Tables</em></a></li>
                                                                <li><a href="{{ URL::to('/testimonial.html') }}"><em>Testimonials</em></a></li>
                                                                <li><a href="email-template.html"><em>Email Template</em></a></li>
                                                                <li><a href="shortcodes-rows.html"><em>Shortcodes</em></a></li>
                                                                <li><a href="feature-animations.html">Animations</a></li>
                                                                <li><a href="feature-typograpy.html">Typograpy</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <span class="mega-menu-sub-title">Sliders</span>
                                                            <ul class="sub-menu">
                                                                <li><a href="feature-content-carousel.html">Content Carousel</a></li>
                                                                <li><a href="revolution-official-1.html">(17) Premium Revolution Slider</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <span class="mega-menu-sub-title">Headers</span>
                                                            <ul class="sub-menu">
                                                                <li><a href="header-1.html">Header Version 1</a></li>
                                                                <li><a href="header-2.html">Header Version 2</a></li>
                                                                <li><a href="header-3.html">Header Version 3</a></li>
                                                                <li><a href="header-4.html">Header Version 4</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <span class="mega-menu-sub-title">Unique Bonuses</span>
                                                            <ul class="sub-menu">
                                                                <li><a href="{{ URL::to('slider/Superslider/super') }}" target="_blank">Onepage - Superslides</a></li>
                                                                <li><a href="onepage-revolution.html" target="_blank">Onepage - Revolution</a></li>
                                                                <li><a href="email-template.html">Email Template</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#">
                                    <b>Special</b> <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="magazine-home.html">Magazine - Home</a></li>
                                    <li><a href="magazine-category.html">Magazine - Category</a></li>
                                    <li><a href="magazine-single.html">Magazine - Single</a></li>
                                    <li class="divider"></li>
                                    <li><a href="realestate-home.html">Real Estate - Home</a></li>
                                    <li><a href="realestate-list.html">Real Estate - List</a></li>
                                    <li><a href="realestate-single.html">Real Estate - Single</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#">
                                    Shop <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ URL::to('/shop') }}">Shop - Home</a></li>
                                    <li class="divider"></li>
                                  <li class="dropdown-submenu">
                                                                    <a href="#"><i class="fa fa-check-square"></i> Categories</a>
                                                                    <ul class="dropdown-menu">
                                                                    @foreach(Shop::tree() as $value)
                                                                    @if($value['category']->parent_id == 0)
                                                                        <li class="{{ (count(Shop::getSubcatlist($value['category']->id)) <> 0) ? 'dropdown-submenu' : ''}}"><a href="{{ $value['category']->slug }}">{{ $value['category']->name }}</a>

                                                                                @if(count(Shop::getSubcatlist($value['category']->id)) <> 0)
                                                                                 <ul class="dropdown-menu">
                                                                                        @foreach(Shop::getSubcatlist($value['category']->id) as $subcategory)
                                                                                        <li><a href="{{ URL::to('shop/'.$subcategory['category']->slug) }}">{{ $subcategory['category']->name }}</a></li>
                                                                                        @endforeach
                                                                                 </ul>
                                                                               @endif

                                                                        </li>
                                                                    @endif
                                                                    @endforeach

                                                                    </ul>
                                </li>

                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#">
                                    Blog <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ URL::to('blog/blog-full-width') }}">Blog Without Sidebar</a></li>
                                    <li><a href="{{ URL::to('blog/blog-left-sidebar') }}">Blog With Sidebar Left</a></li>
                                    <li><a href="{{ URL::to('/blog') }}">Blog With Sidebar Right</a></li>
                                    <li><a href="blog-timeline.html">Blog Timeline</a></li>
                                    <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                    <li><a href="blog-masonry-full-width.html">Blog Masonry - Full Width</a></li>
                                    <li><a href="blog-masonry-sidebar.html">Blog Masonry - Sidebar</a></li>
                                    <li class="divider"></li>
                                    <li><a href="blog-post.html">Single Post</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#">
                                    Portfolio <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="portfolio-2-columns.html">2 Columns</a></li>
                                    <li><a href="portfolio-3-columns.html">3 Columns</a></li>
                                    <li><a href="{{ URL::to('/portfolio') }}">4 Columns</a></li>
                                    <li><a href="portfolio-lightbox.html">Portfolio - Gallery</a></li>
                                    <li><a href="portfolio-full-width.html">Portfolio Full Width</a></li>
                                    <li><a href="portfolio-full-center.html">Portfolio Full Center</a></li>
                                    <li class="divider"></li>
                                    <li><a href="portfolio-single.html">Single - Basic</a></li>
                                    <li><a href="portfolio-single-extended.html">Single - Extended</a></li>
                                    <li><a href="portfolio-single-full-slider.html">Single - Full Slider</a></li>
                                </ul>
                            </li>

                            <!-- GLOBAL SEARCH -->
                            <li class="search">
                                <!-- search form -->
                                <form method="get" action="#" class="input-group pull-right">
                                    <input type="text" class="form-control" name="k" id="k" value="" placeholder="Search">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary notransition"><i class="fa fa-search"></i></button>
                                    </span>
                                </form>
                                <!-- /search form -->
                            </li>
                            <!-- /GLOBAL SEARCH -->

                            <!-- QUICK SHOP CART -->
                            <li class="quick-cart">
                                <span class="badge pull-right">{{ Cart::count() }} </span>

                                <div class="quick-cart-content">

                                    <p><i class="fa fa-warning"></i> You have {{ Cart::count() }}  products on your cart</p>

                                    @foreach(Shop::cartContents() as $value)
                                    <a class="item" href="{{ URL::to('shop/'.$value['product']['category']['slug'].'/'.$value->product->slug.'.html') }}"><!-- item 1 -->
                                        <img class="pull-left" src="{{ isset($value->product->file[0]) ? URL::to('image/shop/product/'.$value->product['id'].'/images/'.'xs'.'_'.$value->product->file[0]->file) : URL::to('packages/lavalite/shop/default/product/'.$image['cart'].'.png')}}" width="40" alt="quick cart" />
                                        <div class="inline-block">
                                            <span class="title">{{ $value['product']['name'] }}</span>
                                            <span class="price">{{ $value['qty'] }}&times; ${{ $value['price'] }}</span>
                                        </div>
                                    </a>
                                    @endforeach
                                    <!-- /item 1 -->



                                    <!-- QUICK CART BUTTONS -->
                                    <div class="row cart-footer">
                                        <div class="col-md-6 nopadding-right">
                                            <a href="{{ URL::to('shop/cart') }}" class="btn btn-primary btn-xs fullwidth">VIEW CART</a>
                                        </div>
                                        <div class="col-md-6 nopadding-left">
                                            <a href="{{ URL::to('shop/checkout') }}" class="btn btn-info btn-xs fullwidth">CHECKOUT</a>
                                        </div>
                                    </div>
                                    <!-- /QUICK CART BUTTONS -->

                                </div>

                            </li>
                            <!-- /QUICK SHOP CART -->


                        </ul>

                    </nav>
                </div>
                <!-- /Top Nav -->

            </div>
        </header>
<!-- End partials /themes/public-lavalite/partials/header.blade.php -->