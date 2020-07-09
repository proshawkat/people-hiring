@extends('layouts.master')

@section('content')
    <!-- Contact US area -->
    <section class="our_work_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="our_work_cntn">
                        <h3>Client Sign in</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

                        <form class="contact-form" method="POST" action="{{ route('client.login') }}">
                            @csrf
                            <div class="contact_bootm">
                                <div class="form-field col x-50">
                                    <input id="email" class="input-text js-input" type="text" value="{{ old('email') }}" name="email">
                                    <label class="label" for="email">email</label>
                                </div>
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>
                            <div class="contact_bootm">
                                <div class="form-field col x-50">
                                    <input id="password" class="input-text js-input" type="password" name="password">
                                    <label class="label" for="password">Password</label>
                                </div>
                                <span class="text-danger">{{ $errors->first('type') }}</span>
                            </div>
                            <button type="submit" class="banner_btn contact_box_btn">Sign in</button>
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
                        <p>Don't have an account? <a href="{{ route('client.register') }}">Sign up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
