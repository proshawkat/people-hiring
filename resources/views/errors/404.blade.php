@extends('layouts.master')

@section('content')
<section class="four_0_four_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="four_0_four_contant">
                    <div class="four_0_four_images text-center">
                        <img src="{{ asset('images/inner_images/404.png') }}" alt="four zero pages">
                    </div>
                    <div class="four_0_four_images text-center">
                        <div class="four_0_four_text">
                            <h2>UH-OH <br>We’ve lost you.</h2>
                            <p> We are very sorry for the inconvenience.  <br>
                                It looks like you are trying to access a page that doesn't exist.</p>
                           

                            <a href="{{ url('/') }}">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
