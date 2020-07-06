@extends('layouts.master')

@section('content')



<section class="siteMap_area">
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
        </div>
    </div>
</section>





@endsection