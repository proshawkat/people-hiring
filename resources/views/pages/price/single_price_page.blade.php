@extends('layouts.master')

@section('content')
<!-- banner area-->
    <section class="price_details_banner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="price_details_container">
                        <div class="price_details_cntn">
                            <h3>Single project Request. <br> Pay as you go</h3>
                            <p>We guarantee a dedicated designer and consistent quality for every request you put in. <br> All our designers are in-house, we don’t outsource your work to a third party.</p>
                            <img class="p_banner_lft" src="{{ asset('front_assets/images/inner_images/p_details_01.png') }}" class="img-fluid" alt="icon">
                            <img class="p_banner_right" src="{{ asset('front_assets/images/inner_images/p_details_02.png') }}" class="img-fluid" alt="icon">
                        </div>
                        <div class="p_banner_btn_area">
                            <a class="p_banner_btn" data-toggle="modal" href="#checkoutModal">Get Started!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- DESIGN SUPPORT -->
    <section class="design_support_area design_support_cntn_p_exta">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="design_support_cntn">
                        <h3>Whether you’re an entrepreneur, or an established business, we’ll help you save time and money.</h3>
                        <div class="design_box_accordion">
                            <div class="accordion js-accordion">
                                <div class="accordion__item js-accordion-item active">
                                    <div class="accordion-header js-accordion-header">
                                        <img src="{{ asset('front_assets/images/body/icon.png') }}" class="img-fluid" alt="icon">
                                        A Win-Win Solution
                                    </div>
                                    <div class="accordion-body js-accordion-body">
                                        <div class="accordion-body__contents">
                                            We hire, train and manage great talent. <br>
                                            We provide expert developers and designers <br>
                                            and help clear a path to build a great product. <br>
                                        </div>
                                    </div> <!-- end of accordion body -->
                                </div>
                                <div class="accordion__item js-accordion-item">
                                    <div class="accordion-header js-accordion-header">
                                        <img src="{{ asset('front_assets/images/body/icon_01.png') }}" class="img-fluid" alt="icon">
                                        Painless Communication</div>
                                    <div class="accordion-body js-accordion-body">
                                        <div class="accordion-body__contents">
                                            Skill people are well-versed in a variety of project management and collaboration tools.
                                        </div>
                                    </div> <!-- end of accordion body -->
                                </div>
                                <div class="accordion__item js-accordion-item">
                                    <div class="accordion-header js-accordion-header">
                                        <img src="{{ asset('front_assets/images/body/icon_02.png') }}" class="img-fluid" alt="icon">
                                        Quick scaling
                                    </div>
                                    <div class="accordion-body js-accordion-body">
                                        <div class="accordion-body__contents">
                                            Whatever your needs. Long or short term, we have a solution that works for you.
                                        </div>
                                    </div> <!-- end of accordion body -->
                                </div>
                                <div class="accordion__item js-accordion-item">
                                    <div class="accordion-header js-accordion-header">
                                        <img src="{{ asset('front_assets/images/body/icon_03.png') }}" class="img-fluid" alt="icon">
                                        Cost efficiency
                                    </div>
                                    <div class="accordion-body js-accordion-body">
                                        <div class="accordion-body__contents">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sequi placeat distinctio dolor, amet magnam voluptatibus eos ex vero, sunt veritatis esse. Nostrum voluptatum et repudiandae vel sed, explicabo in?
                                        </div>
                                    </div> <!-- end of accordion body -->
                                </div>
                                <div class="accordion__item js-accordion-item">
                                    <div class="accordion-header js-accordion-header">
                                        <img src="{{ asset('front_assets/images/body/icon_04.png') }}" class="img-fluid" alt="icon">
                                        Systems
                                    </div>
                                    <div class="accordion-body js-accordion-body">
                                        <div class="accordion-body__contents">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sequi placeat distinctio dolor, amet magnam voluptatibus eos ex vero, sunt veritatis esse. Nostrum voluptatum et repudiandae vel sed, explicabo in?
                                        </div>
                                    </div> <!-- end of accordion body -->
                                </div>
                                <div class="accordion__item js-accordion-item">
                                    <div class="accordion-header js-accordion-header">
                                        <img src="{{ asset('front_assets/images/body/icon_05.png') }}" class="img-fluid" alt="icon">
                                        Security
                                    </div>
                                    <div class="accordion-body js-accordion-body">
                                        <div class="accordion-body__contents">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sequi placeat distinctio dolor, amet magnam voluptatibus eos ex vero, sunt veritatis esse. Nostrum voluptatum et repudiandae vel sed, explicabo in?
                                        </div>
                                    </div> <!-- end of accordion body -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="design_support_cntn">
                        <img src="{{ asset('front_assets/images/body/design_support.png') }}" class="img-fluid" alt="skill people logo">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- DESIGN SUPPORT -->
    <section class="design_support_area recruitment_process_margin">
        <div class="container">
            <div class="recruitment_process_bg">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="design_support_cntn recruitment_process_images">
                            <img src="{{ asset('front_assets/images/body/recruitment_process.png') }}" class="img-fluid recruitment_images" alt="skill people logo">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="design_support_cntn">
                            <h3>Recruitment process</h3>
                            <p class="defult_txt">No recruitment hassles. We have a deep and immediate talent <br>
                                pool ready to get to know you, your business, and you <br>
                                growth goals. Let’s grow together..</p>
                            <div class="recruitment">
                                <button class="learn-more">
                                <div class="circle">
                                    <span class="icon arrow"></span>
                                </div>
                                <p class="button_text">Learn more</p>
                            </button>
                            </div>
                        </div>
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
                        <img src="{{ asset('front_assets/images/body/design_limite.png') }}" class="img-fluid" alt="skill people logo">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="design_limite_cntn">
                        <h3>Brack your <br> graphics designing limit</h3>
                        <div class="design_limite_box_cntn">
                            <h4>REAL PEOPLE, REAL DESIGNS.</h4>
                            <p>Our designers are regular good ol’ human beings who love
                                creating amazing work for you. We love our team and cherish
                                everyone that is part of The Futures. All of us work full-time at
                                The Futures and benefit from the camaraderie of working
                                in an environment where everyone is there for each other.
                            </p>
                        </div>
                        <div class="design_limite_box_cntn">
                            <h4>No Contracts or Set-up Fees</h4>
                            <p>We won’t force you to stay if you don’t require our services
                                any longer. Zero set-up or cancellation fees.
                            </p>
                        </div>
                        <div class="design_limite_box_cntn">
                            <h4>Low Flat Monthly Fee</h4>
                            <p>Unlimited projects and revisions are included in your monthly
                                fee. There won’t be any hidden costs around the corner.
                            </p>
                        </div>
                        <div class="design_limite_box_cntn">
                            <button class="learn-more">
                                <div class="circle">
                                    <span class="icon arrow"></span>
                                </div>
                                <p class="button_text">Learn more</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<div class="modal fade single-price-page" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	    <div class="modal-dialog modal-dialog-centered" role="document">
	        <div class="modal-content">
                <form role="form" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form" action="{{ url('/payment/action') }}" method="post">
                @csrf
                <input name="ser_price" id="ser_price" type="hidden" value="{{ $service['total'] }}" />
                <input name="ser_id" id="ser_id" type="hidden" value="{{ $service['id'] }}" />
                <input name="ser_title" id="ser_title" type="hidden" value="{{ $service['title'] }}" />

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
                                        <span class="checkout_price">[Total Amount ${{ $service['total'] }}]</span>
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
                                        <span class="checkout_price">[Total Amount ${{ $service['total'] }}]</span>
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
        console.log(check_val);
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
        $('#ser_price').val(price);
        $('.checkout_price').text('(Total Amount $'+price+')');
        $('#ser_title').val(stitle);
        console.log(id);
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
