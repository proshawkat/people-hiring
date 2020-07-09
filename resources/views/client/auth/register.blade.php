@extends('layouts.master')

@section('content')
    <!-- Contact US area -->
    <section class="our_work_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="our_work_cntn">
                        <h3>Client Sign up</h3>
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

                        <form class="contact-form" action="{{ route('client.register') }}" method="post">
                            @csrf

                            <div class="contact_bootm">
                                <div class="form-field col x-50">
                                    <input id="company_name" class="input-text js-input" value="{{ old('company_name') }}" type="text" name="company_name">
                                    <label class="label" for="company_name">Company name</label>
                                </div>
                                <span class="text-danger">{{ $errors->first('company_name') }}</span>
                            </div>
                            <div class="contact_bootm">
                                <div class="form-field col x-50">
                                    <input id="name" class="input-text js-input" value="{{ old('name') }}" required type="text" name="name">
                                    <label class="label" for="name">Your Name*</label>
                                </div>
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                            <div class="contact_bootm">
                                <div class="form-field col x-50">
                                    <input id="phone" class="input-text js-input" value="{{ old('phone') }}" required type="text" name="phone">
                                    <label class="label" for="phone">Phone*</label>
                                </div>
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            </div>
                            <div class="contact_bootm">
                                <div class="form-field col x-50">
                                    <input id="email" class="input-text js-input" value="{{ old('email') }}" required type="text" name="email">
                                    <label class="label" for="email">Email*</label>
                                </div>
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>
                            <div class="contact_bootm">
                                <div class="form-field col x-50">
                                    <input id="password" class="input-text js-input" type="password" name="password" required autocomplete="new-password">
                                    <label class="label" for="password">Password*</label>
                                </div>
                                <span class="text-danger">{{ $errors->first('message') }}</span>
                            </div>
                            <div class="contact_bootm">
                                <div class="form-field col x-50">
                                    <input id="password-confirm" type="password" class="input-text js-input"
                                           name="password_confirmation" required autocomplete="new-password">
                                    <label class="label" for="password-confirm">Confirm password*</label>
                                </div>
                            </div>
                            <button type="submit" class="banner_btn contact_box_btn">Create account</button>
                        </form>
                        <img class="contact_top_images" src="{{ asset('front_assets/images/inner_images/contact_01.png') }}" alt="contact images">
                        <img class="contact_bottom_images" src="{{ asset('front_assets/images/inner_images/contact_02.png') }}" alt="contact images">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center mt-5 mb-5">
                        <p>Have an account? <a href="{{ route('client.login') }}">Sign in</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
