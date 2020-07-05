@extends('layouts.master')

@section('content')
	<script>
         setTimeout(function(){
            window.location.href = '{{ url("/") }}';
         }, 10000);
    </script>
    <section class="thank_you_box">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="thankyou_cntn">
                        <i class="fa fa-check icon_thank" aria-hidden="true"></i>
                        <h3>Thank You</h3>
                        <p class="thankyou_text">No recruitment hassles. We have a deep and immediate talent <br>
                            pool ready to get to know you, your business, and you <br>
                            growth goals. Let’s grow together..</p>
                        
                        <img class="thank_you_images" src="{{ asset('front_assets/images/inner_images/thankyou.png') }}" alt="thank you">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection