@extends('layouts.master')
@section('content')
<!-- Our_work_banner -->
<section class="our_work_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="our_work_cntn">
                    <h3>Lorem Ipsum dummy <br>
                        make a specimen</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has <br>
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer </p>
                    <a class="banner_btn work_banner" href="{{ url('price') }}">See pricing</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our_work_images -->
<section class="our_work_images">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="work_hdr" align="center">
                    <button class="btn filter-button" data-filter="all">All</button>
                    <button class="btn filter-button" data-filter="print">Print</button>
                    <button class="btn filter-button" data-filter="ui_ux">UI/UX</button>
                    <button class="btn filter-button" data-filter="motion">3D & Motion</button>
                </div>
            </div>
            <div class=" col-sm-12 col-md-3 col-lg-3 col-xl-3 filter print">
                <div class="gallery_product print_height">
                    <img src="{{ asset('front_assets/images/inner_images/work_01.png') }}" class="img-responsive" alt="work images">
                </div>
                <div class="gallery_product gallery_product_height">
                    <img src="{{ asset('front_assets/images/inner_images/work_02.png') }}" class="img-responsive" alt="work images">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 filter ui_ux">
                <div class="gallery_product ui_ux_height">
                    <img src="{{ asset('front_assets/images/inner_images/work_03.png') }}" class="img-responsive" alt="work images">
                </div>
                <div class="gallery_product">
                    <img src="{{ asset('front_assets/images/inner_images/work_04.png') }}" class="img-responsive" alt="work images">
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 filter motion">
                <div class="gallery_product Motion_01">
                    <img src="{{ asset('front_assets/images/inner_images/work_05.png') }}" class="img-responsive" alt="work images">
                </div>
                <div class="gallery_product Motion_02">
                    <img src="{{ asset('front_assets/images/inner_images/work_06.png') }}" class="img-responsive" alt="work images">
                </div>
                <div class="gallery_product Motion_02">
                    <img src="{{ asset('front_assets/images/inner_images/work_07.png') }}" class="img-responsive" alt="work images">
                </div>
            </div>
            <div class="col-md-12">
                <div class="pagination">
                    <a href="#">&laquo;</a>
                    <a href="#">Prev</a>
                    <a href="#">1</a>
                    <a class="active" href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">Next</a>
                    <a href="#">&raquo;</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Subscribe Area -->
<section class="subscribe_area">
    <div class="container">
        <div class="subscribe_cntn">
            <div class="row">
                <div class="col-sm-12 col-md-7 col-lg-7 col-xl-7">
                    <div class="subscribe_text">
                        <h3>How can we help you?</h3>
                        <p>Contact us for a <b>free consultation</b>. Learn how you can <br>
                            spend less time on marketing and scale your business faster.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">
                    <div class="subscribe_text">
                        <form class="form_newsletter" action="#" method="post">
                            <input type="email" value="" placeholder="Enter your emaill adress" name="EMAIL" id="mail" class="newsletter-input form-control">
                            <button id="subscribe" class="button_mini btn btn-gradient" type="submit">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Footer Area -->
<section class="footer_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <div class="footer_cntn">
                    <h5>Quick Link</h5>
                    <a href="#">About Us</a>
                    <a href="#">Services</a>
                    <a href="#">See pricing</a>
                    <a href="#">Contact us</a>
                    <a href="#">Our work</a>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <div class="footer_cntn">
                    <h5>Company</h5>
                    <a href="#">Culture</a>
                    <a href="#">Recruitment process</a>
                    <a href="#">Road map</a>
                    <a href="#">Blog</a>
                    <a href="#">Our Features</a>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <div class="footer_cntn">
                    <h5>Useful Link</h5>
                    <a href="#">Watch Video</a>
                    <a href="#">Testimonials</a>
                    <a href="#">Help center</a>
                    <a href="#">Suggest a feature</a>
                    <a href="#">Jobs</a>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <div class="footer_cntn">
                    <h5>Support</h5>
                    <a href="#">Getting started</a>
                    <a href="#">Help center</a>
                    <a href="#">Suggest a feature</a>
                    <a href="#">Report a bug</a>
                    <a href="#">Subscribe</a>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="footer_bootm">
                    <div class="social_icon">
                        <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                    </div>
                    <div class="social_icon social_icon_text">
                        <a href="#">Terms of Service</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Sitemap</a>
                    </div>
                    <div class="social_icon footer_bootm_right_txt">
                        <a href="#">Copyright © 2019 Skillpeoples. All rights reserved.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- JS files -->
@endsection