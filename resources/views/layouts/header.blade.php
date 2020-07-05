<section class="header_area header sticky">
    <div class="container">
        <div class="row">
            <!-- Logo arae -->
            <div class="col-sm-9 col-md-3 col-lg-3 col-xl-3">
                <h2>People<span>Hire</span></h2>
                <div class="header_cntn">
                    <figure>
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('front_assets/images/logo/logo.png') }}" class="img-fluid" alt="skillpeople logo">
                        </a>
                    </figure>
                </div>
            </div>
            <!-- Logo End -->
            <div class="col-sm-3 col-md-9 col-lg-9 col-xl-9">
                <div class="header_cntn">
                    <div class="nav-container">
                        <nav class="sina-nav mobile-sidebar navbar-transparent navbar-fixed" data-top="40" data-md-top="40" data-xl-top="40">
                            <div class="container-fluid">
                                <!-- RasponSive_icon-->
                                <div class="extension-nav">
                                    <ul>
                                        <li class="widget-bar-btn"><a href="#"><i class="fa fa-bars"></i></a></li>
                                    </ul>
                                </div>
                                <!-- End-->

                                <div class="collapse navbar-collapse" id="navbar-menu">
                                    <div class="links">
                                        <ul class="sina-menu link-effect-14">
                                            <li class="{{  request()->path() == '/' || request()->path() == 'recruitment' ? 'active' : '' }}"><a href="{{ url('/') }}"><span>Home </span></a></li>
                                            <li class="{{  request()->path() == 'about' ? 'active' : '' }}"><a href="{{ url('/about') }}"><span>About </span></a></li>
                                            <li class="{{  request()->path() == 'price' || (request()->path() == 'price/single_price/pro' || request()->path() == 'price/single_price/standard') ? 'active' : '' }}"><a href="{{ url('price') }}"><span>Price </span></a></li>
                                            <li class="{{  request()->path() == 'service' ? 'active' : '' }}"><a href="{{ url('service') }}"><span>Our Work </span></a></li>
                                            <li class="{{  request()->path() == 'contact' ? 'active' : '' }}"><a href="{{ url('contact') }}"><span>Contact </span></a></li>
                                            <li class="sina-nav-cta-btn"><a href="{{ url('get_started') }}">Get Started!</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Start widget-bar -->
                            <div class="sina-nav-overlay off"></div>
                            <div class="widget-bar">
                                <a href="#" class="close-widget-bar"><i class="fa fa-times"></i></a>
                                <div class="widget">
                                    <ul class="link">
                                        <li class="{{  request()->path() == '/' || request()->path() == 'recruitment' ? 'active' : '' }}"><a href="{{ url('/') }}"><span>Home </span></a></li>
                                            <li class="{{  request()->path() == 'about' ? 'active' : '' }}"><a href="{{ url('/about') }}"><span>About </span></a></li>
                                            <li class="{{  request()->path() == 'price' || (request()->path() == 'price/single_price/pro' || request()->path() == 'price/single_price/standard') ? 'active' : '' }}"><a href="{{ url('price') }}"><span>Price </span></a></li>
                                            <li class="{{  request()->path() == 'service' ? 'active' : '' }}"><a href="{{ url('service') }}"><span>Our Work </span></a></li>
                                            <li class="{{  request()->path() == 'contact' ? 'active' : '' }}"><a href="{{ url('contact') }}"><span>Contact </span></a></li>
                                            <li class="sina-nav-cta-btn"><a href="{{ url('get_started') }}">Get Started!</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <!-- End widget-bar -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>