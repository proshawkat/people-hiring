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
                    <p>Lorem Ipsum is <span class="contact_chat"> <i class="fa fa-comment" aria-hidden="true"></i> Chat With Us </span> </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact US area -->
<section class="contact_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="get-in-touch">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif  
                    <h3>Get in touch</h3>
                    <form class="contact-form" action="{{ url('contact/save') }}" method="post">
                        @csrf
                        <div class="contact_bootm">
                            <div class="form-field col x-50">
                                <input id="name" class="input-text js-input" type="text" name="name">
                                <label class="label" for="name">Your Name</label>
                            </div>
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                        <div class="contact_bootm">
                            <div class="form-field col x-50">
                                <input id="email" class="input-text js-input" type="text" name="email">
                                <label class="label" for="email">Work email</label>
                            </div>
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                        <div class="contact_bootm">
                            <div class="form-field col x-50">
                                <input id="companys" class="input-text js-input" type="text" name="type">
                                <label class="label" for="companys">Company type</label>
                            </div>
                            <span class="text-danger">{{ $errors->first('type') }}</span>
                        </div>
                        <div class="contact_bootm">
                            <div class="form-field col x-50">
                                <input id="job" class="input-text js-input" type="text" name="title">
                                <label class="label" for="job">Job title</label>
                            </div>
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        </div>
                        <div class="contact_bootm">
                            <div class="form-field col x-50">
                                <input id="message" class="input-text js-input" type="text" name="message">
                                <label class="label" for="message">Message</label>
                            </div>
                            <span class="text-danger">{{ $errors->first('message') }}</span>
                        </div>
                        <button type="submit" class="banner_btn contact_box_btn">Submit your message</button>
                    </form>
                    <img class="contact_top_images" src="{{ asset('front_assets/images/inner_images/contact_01.png') }}" alt="contact images">
                    <img class="contact_bottom_images" src="{{ asset('front_assets/images/inner_images/contact_02.png') }}" alt="contact images">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Cliend box area -->
<section class="cliend_box_area">
    <h2 class="h2_exta">Designoble</h2>
    <div class="container">
        <div class="row contact_cliend_box">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="cliend_box client_img_effict">
                        <a href="#">
                            <figure>
                                <img src="{{ asset('front_assets/images/body/client_01.png') }}" class="img-fluid" alt="client images">
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="cliend_box client_img_effict">
                        <a href="#">
                            <figure>
                                <img src="{{ asset('front_assets/images/body/client_02.png') }}" class="img-fluid" alt="client images">
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="cliend_box client_img_effict">
                        <a href="#">
                            <figure>
                                <img src="{{ asset('front_assets/images/body/client_03.png') }}" class="img-fluid" alt="client images">
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="cliend_box client_img_effict">
                        <a href="#">
                            <figure>
                                <img src="{{ asset('front_assets/images/body/client_04.png') }}"  class="img-fluid" alt="client images">
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="cliend_box client_img_effict">
                        <a href="#">
                            <figure>
                                <img src="{{ asset('front_assets/images/body/client_05.png') }}" class="img-fluid" alt="client images">
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="cliend_box client_img_effict">
                        <a href="#">
                            <figure>
                                <img src="{{ asset('front_assets/images/body/client_06.png') }}"  class="img-fluid" alt="client images">
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="cliend_box client_img_effict">
                        <a href="#">
                            <figure>
                                <img src="{{ asset('front_assets/images/body/client_07.png') }}" class="img-fluid" alt="client images">
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="cliend_box client_img_effict">
                        <a href="#">
                            <figure>
                                <img src="{{ asset('front_assets/images/body/client_08.png') }}" class="img-fluid" alt="client images">
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
