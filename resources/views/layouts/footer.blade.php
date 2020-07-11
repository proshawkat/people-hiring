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
                        <form class="form_newsletter" action="{{ route('subStore') }}" method="post">
                            @csrf
                            <input type="email" value="" placeholder="Enter your emaill adress" name="email" id="mail" class="newsletter-input form-control">
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
<section class="footer_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <div class="footer_cntn">
                    <h5>Company</h5>
                    <a href="{{ asset('about') }}">About Us</a>
                    <a href="{{ asset('') }}">Culture</a>
                    <a href="{{ asset('recruitment') }}">Recruitment</a>
                    <a href="{{ asset('recruitment') }}">Process</a>
                    <a href="{{ asset('about') }}">Team</a>
                    <a href="{{ asset('price') }}">Pricing</a>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <div class="footer_cntn">
                    <h5>Quick Link</h5>
                    <a href="{{ asset('price') }}">See pricing</a>
                    <a href="{{ asset('service') }}">Our work</a>
                    <a href="#">Testimonial</a>
                    <a href="#">Feature</a>
                    <a href="#">Single project request</a>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <div class="footer_cntn">
                    <h5>Help</h5>
                    <a href="{{ asset('contact') }}">Support</a>
                    <a href="#">FAQ</a>
                    <a href="{{ asset('service') }}">How it works</a>
                    <a href="#">Login</a>
                    <a href="{{ asset('contact') }}">Contact us</a>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <div class="footer_cntn">
                    <h5>Support</h5>
                    <a href="{{ asset('get_started') }}">Getting started</a>
                    <a href="#">Help center</a>
                    <a href="#">Suggest a feature</a>
                    <a href="#">Report a bug</a>
                    <a href="#">Subscribe</a>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="footer_bootm">
                    <div class="social_icon">
                        <a target="_blank" href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                    </div>
                    <div class="social_icon social_icon_text">
                        <a href="{{ url('terms_condition') }}">Terms of Service</a>
                        <a href="#">Privacy Policy</a>
                        <a href="{{ url('sitemap') }}">Sitemap</a>
                    </div>
                    <div class="social_icon footer_bootm_right_txt">
                        <a href="#">Copyright © 2020 IT Solution. All rights reserved.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End pagewrapper-->
@if (Session::has('message'))
<div id="checkoutModal" class="subscriber_modal_wrp modal fade show" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: block;">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="subsciber_modal_message">
                    <div class="sucimg">
                        <img width="48" src="{{ asset('assets/img/in_icon.png') }}">
                    </div>
                    <div class="sub_msg">
                        <h3>{!! session('message') !!}</h3>
                        <p>We will send you text message promotions & Updates</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
