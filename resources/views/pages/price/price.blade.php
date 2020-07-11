@extends('layouts.master')

@section('content')
<!-- BUSSINESS PLAN-->
<section class="bussines_plan_area">
    <div class="container">
        <dov class="bussines_plan">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="bussines_plan_hader_cntn">
                        <h3>Plans made for your business</h3>
                        <p>Lorem Ipsum is simply dummy text of <br> the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
            <div class="bussines_plan_container">
                <div class="row">
                    @foreach($services as $servcie)
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="bussines_plan_cntn">
                                <h4>{{ $servcie->title }}</h4>
                                <div class="bussines_plan_rate">
                                    <p>$</p>
                                    <h1>{{ $servcie->price }}</h1>
                                    <p class="bussines_plan_month_text">/month</p>
                                </div>
                                <div class="bussines_plan_text">
                                    <p>- 1 dedicated Mid-Level designer/developer</p>
                                    <p>- 8 Hours Day 5 Days week</p>
                                    <p>- No project Limitation</p>
                                    <p>- Unlimited revisions</p>
                                    <p>- Free stock photos</p>
                                    <p>- Native source files included</p>
                                    <p>- no extra fees</p>
                                    <p>- Dedicated project Manager</p>
                                    <p>- No hourly bills </p>
                                    <p>- Emergency support (in off day)</p>
                                    <p>- Unlimited File storage</p>
                                    <p>-Integrated Project Management tools</p>
                                </div>
                                <div class="bussines_plan_btn">
                                    @if(Auth::guard('clients')->user())
                                        <a class="p_banner_btn checkoutModal" data-toggle="modal" data-price="{{ $servcie->price }}" data-id="{{ $servcie->id }}" data-stitle="{{ $servcie->title }}" href="#checkoutModal">Get Started!</a>
                                    @else
                                        <a class="p_banner_btn checkoutModal" href="{{ route('client.login') }}">Get Started!</a>
                                    @endif
                                </div>
                                <img class="p_banner_lft" src="{{ asset('front_assets/images/inner_images/p_details_01.png') }}">
                            </div>
                        </div>
                    @endforeach

                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="bussines_plan_footer_text">
                            <p>Need 5+ Designer Or Web Developer? Or looking for Annual contract?</p>
                            <h5>Please contact or chat for</h5>
                            <p><span>special discount and features.</span> </p>
                        </div>
                    </div>
                </div>
            </div>

        </dov>
    </div>
</section>
<!-- ACTIVE CLIEND -->
<section class="active_cliend_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <div class="active_cliend_box">
                    <img src="{{ asset('front_assets/images/inner_images/conversation.png') }}" class="img-fluid" alt="conversation icon">
                    <div class="active_cliend_text">
                        <h6>Happy Clients</h6>
                        <h2 ><span class="counter" data-count="500"></span>+</h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <div class="active_cliend_box">
                    <img src="{{ asset('front_assets/images/inner_images/success.png') }}" class="img-fluid" alt="success icon">
                    <div class="active_cliend_text">
                        <h6>Approved Project</h6>
                        <h2><span class="counter" data-count="10"></span>k</h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <div class="active_cliend_box">
                    <img src="{{ asset('front_assets/images/inner_images/planning.png') }}" class="img-fluid" alt="conversation icon">
                    <div class="active_cliend_text">
                        <h6>By Customers</h6>
                        <h2><span class="counter" data-count="4.9"></span>/5</h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <div class="active_cliend_box active_cliend_box_alimen">
                    <img src="{{ asset('front_assets/images/inner_images/medal.png') }}" class="img-fluid" alt="conversation icon">
                    <div class="active_cliend_text">
                        <h6>Awards</h6>
                        <h2><span class="counter" data-count="40"></span>+</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Option AREA -->
<section class="option_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="option_contn_header">
                    <h3>Who is this service for?</h3>
                    <p>Seamlessly integrate with your business. <br> Everything you need to craft an exceptional talent experience</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="option_contn_box">
                    <h4>For startups</h4>
                    <h6>Just launching or have launched your startup? Strap for time or lack design skills? Let us design so that you can concentrate on scaling instead of learning Photoshop yourself. Grow your business fast without the stress. </h6>

                    <a href="{{ url('get_started') }}">
                        <button class="learn-more">
                            <div class="circle">
                                <span class="icon arrow"></span>
                            </div>
                            <p class="button_text">Apply Us</p>
                            <div></div>
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="option_contn_box">
                    <h4>For agencies</h4>
                    <h6>Running an agency is not easy. Paying a local designer will put a huge dent in your cash flow.  Typically you’ll save approximately 75% of the salary that you would otherwise pay for a locally sourced employee. </h6>
                    <a href="{{ url('get_started') }}">
                        <button class="learn-more">
                            <div class="circle">
                                <span class="icon arrow"></span>
                            </div>
                            <p class="button_text">Apply Us</p>
                            <div></div>
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="option_contn_box">
                    <h4>For Businesses</h4>
                    <h6>Grow your production capacity within weeks without employing extra heads. Grow and add value to your business quickly and efficiently, without the horrendous ongoing employment expenses and initial recruitment costs.</h6>
                    <a href="{{ url('get_started') }}">
                        <button class="learn-more">
                            <div class="circle">
                                <span class="icon arrow"></span>
                            </div>
                            <p class="button_text">Apply Us</p>
                            <div></div>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- How it Work -->
<section class="how_it_work_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="how_it_work_area_header">
                    <h3>How it Works</h3>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="how_it_work_contn">
                    <img src="{{ asset('front_assets/images/inner_images/how_it_work_01.png') }}" class="img-fluid" alt="skill people logo">
                </div>
                <div class="how_it_work_text">
                    <h5>Pick a Packege</h5>
                    <h6>Choose from one of our plans, <br> and you'll be matched to your dedicated graphic designer.</h6>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="how_it_work_contn">
                    <img src="{{ asset('front_assets/images/inner_images/how_it_work_02.png') }}" class="img-fluid" alt="skill people logo">
                </div>
                <div class="how_it_work_text">
                    <h5>Assign task</h5>
                    <h6>Create tasks & manage <br> your projects easily from <br> our dashboard.</h6>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="how_it_work_contn">
                    <img src="{{ asset('front_assets/images/inner_images/how_it_work_03.png') }}" class="img-fluid" alt="skill people logo">
                </div>
                <div class="how_it_work_text">
                    <h5>Work together</h5>
                    <h6>Use our dashboard or <br> your own tool, it’s easy to collaborate <br> with experts.</h6>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- DESIGNING LIMITE -->
<section class="design_limite_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="design_limite_cntn">
                    <img src="{{ asset('front_assets/images/inner_images/about_03.png') }}" class="img-fluid" alt="skill people logo">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="design_limite_cntn">
                    <h3>Creative Talents <br> At Your Fingertips.</h3>
                    <p>Work with your own personal account manager and access our whole team of experienced designers, developers.</p>
                    <div class="design_limite_box_cntn">
                        <h4>Unlimited Service</h4>
                        <p>Make as many requests as you need. We’ll work through them, and the revisions.You name it, we can design it. We design for a wide range of startups and SMEs.</p>
                    </div>
                    <div class="design_limite_box_cntn">
                        <h4>Fast turnaround</h4>
                        <p>Assign your design requests quickly and easily. Receive designs for feedback promptly.</p>
                    </div>
                    <div class="design_limite_box_cntn">
                        <h4>No Hidden Costs</h4>
                        <p>No contracts, no hourly billing, and no additional fees for source files. Just a flat monthly rate.</p>
                    </div>
                    <div class="design_limite_box_cntn">
                        <a href="{{ url('designlimit') }}">
                            <button class="learn-more">
                                <div class="circle">
                                    <span class="icon arrow"></span>
                                </div>
                                <p class="button_text">Learn more</p>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--End pagewrapper-->
<div class="modal fade single-price-page" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form role="form" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form" action="{{ url('/payment/action') }}" method="post">
            @csrf
            <input name="ser_price" id="ser_price" type="hidden" value="" />
            <input name="ser_id" id="ser_id" type="hidden" value="" />
            <input name="ser_title" id="ser_title" type="hidden" value="" />

            <input name="token" type="hidden" value="" />
            <div class="model_design">
                <div class="modal-body">
                    <div class="c8_modal_title">
                        <h2>Checkout Form</h2>
                    </div>
                    <div class="stepwizard checkout_form_popup_area">
                        <div class="stepwizard-row setup-panel">
                            <div class="stepwizard-step">
                                <a href="#step-1" type="button" class="btn btn-primary">
                                    <div class="icon">
                                        <i  class="fa fa-user"></i>
                                    </div>
                                    <span>Personal</span>
                                </a>
                                <p></p>
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-2" type="button" class="btn btn-light btn-circle" disabled="disabled">
                                    <div class="icon">
                                        <i  class="fa fa-credit-card"></i>
                                    </div>
                                    <span>Payment</span>
                                </a>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="row setup-content" id="step-1">
                        <div class="col-xs-12">
                            <div class="col-md-12">
                                <div class="step_title_count_wrp">
                                    <span class="step-heading">Personal Information: </span>
                                    <span class="checkout_price"></span>
                                    <span class="step-number">Step 1 / 2</span>
                                </div>
                                <h3></h3>
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="row">

                                            <div class="form-group col-md-6">
                                                <input required="required" type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <input required="required" type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <input required="required" type="email" class="form-control" name="email" id="email" placeholder="Email">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <input required="required" type="text" class="form-control" name="phone" placeholder="Phone">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="ssl-action-wrp">
                                    <div class="ssl-wrp">
                                        <div class="pay-img">
                                            <img class="img" src="{{ asset('/assets/img/payment.jpg')}}">
                                        </div>
                                        <div class="ssl-notice">
                                            <h6><span class="tm-text-color"><i class="flaticon-quality"></i> SSL</span> <span>SECURED PAYMENT</span></h6>
                                        </div>
                                    </div>
                                    <button class="p_banner_btn nextBtn" type="button" >Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row setup-content" id="step-2">
                        <div class="col-xs-12">
                            <div class="col-md-12">
                                <div class="step_title_count_wrp">
                                    <span class="step-heading">Payment Information: </span>
                                    <span class="checkout_price"></span>
                                    <span class="step-number">Step 2 / 2</span>
                                </div>
                                <h3></h3>
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <input required="required" type="text" class="form-control" value="" placeholder="Name on Card">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <input required="required" type="text" class="form-control card-number" value="" autocomplete='off' placeholder="Card Number">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input required="required" type="text" class="form-control card-expiry-month" placeholder="MM">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input required="required" type="text" class="form-control card-expiry-year" placeholder="YYYY">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <input required="required" type="text" class="form-control card-cvc" autocomplete='off' placeholder="CVC">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="ssl-action-wrp">
                                    <label class="container_terms_con">I have read and agree to the <span><a target="_blank" href="{{ url('terms_condition') }}">Terms and conditions</a></span>
                                            <input type="checkbox" id="terms_check" name="terms_check">
                                            <span class="checkmark"></span>
                                    </label>
                                    <div class="ssl-wrp">
                                        <div class="pay-img">
                                            <img class="img" src="{{ asset('/assets/img/payment.jpg')}}">
                                        </div>
                                        <div class="ssl-notice">
                                            <h6><span class="tm-text-color"><i class="flaticon-quality"></i> SSL</span> <span>SECURED PAYMENT</span></h6>
                                        </div>
                                    </div>
                                    <button type="submit" id="checkout_btn_submit" class="p_banner_btn notactive">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    $('#terms_check').click(function() {
        var check_val = $("#terms_check").is( ":checked" ) ? 1 : 0;
        if(check_val == 1){
            $('#checkout_btn_submit').removeClass("notactive");
        }else{
            $('#checkout_btn_submit').addClass("notactive");
        }
    });
    $('.checkoutModal').click(function() {
        var id = $(this).data('id');
        var price = $(this).data('price');
        var stitle = $(this).data('stitle');
        $('#ser_id').val(id);
        $('.checkout_price').text('[Total Amount $'+price+']');
        $('#ser_price').val(price);
        $('#ser_title').val(stitle);
    });
</script>
<script>
    $(function() {
        var $form = $(".require-validation");
      $('form.require-validation').bind('submit', function(e) {
        var $form  = $(".require-validation"),
            inputSelector = ['input[type=email]', 'input[type=password]',
                             'input[type=text]', 'input[type=file]',
                             'textarea'].join(', '),
            $inputs       = $form.find('.required').find(inputSelector),
            $errorMessage = $form.find('div.error'),
            valid         = true;
            $errorMessage.addClass('hide');

            $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
            var $input = $(el);
            if ($input.val() === '') {
                $input.parent().addClass('has-error');
                $errorMessage.removeClass('hide');
                e.preventDefault();
            }
        });

        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }

      });

      function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                var token = response['id'];
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }

    });
</script>
<script type="text/javascript">
    $(document).ready(function () {

        var navListItems = $('div.setup-panel div a'),
                allWells = $('.setup-content'),
                allNextBtn = $('.nextBtn');

        allWells.hide();

        navListItems.click(function (e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                    $item = $(this);

            if (!$item.hasClass('disabled')) {
                navListItems.removeClass('btn-primary').addClass('btn-light');
                $item.addClass('btn-primary');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });

        allNextBtn.click(function(){
            var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                curInputs = curStep.find("input[type='text'],input[type='url']"),
                isValid = true;

            $(".form-control").removeClass("has-error");
            for(var i=0; i<curInputs.length; i++){
                if (!curInputs[i].validity.valid){
                    isValid = false;
                    $(curInputs[i]).closest(".form-control").addClass("has-error");
                }
            }

            if (isValid)
                nextStepWizard.removeAttr('disabled').trigger('click');
        });

        $('div.setup-panel div a.btn-primary').trigger('click');
    });
</script>
@endsection
