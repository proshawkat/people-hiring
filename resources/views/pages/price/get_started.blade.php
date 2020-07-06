@extends('layouts.master')

@section('content')    
    <section class="our_work_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="our_work_cntn">
                        <h3>Get Started!</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has <br>
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer </p>
                        <div class="get_start_dropdown_box">
                            <select class="form_select" id="select-color" name="carlist" onchange="getval(this);">
                                <option class="select_text" value="">Select Your Plan</option>
                                @foreach($services as $servcie)
                                    <option class="select_text" value="{{ $servcie->id }}">{{ $servcie->title }}</option>
                                @endforeach
                            </select>
                            <button class="banner_btn get_start_btn" id="checkoutModal_button">Get Started!</button>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Get_start_sectioon -->
    <section class="design_limite_area design_limite_area_get_start">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="design_limite_cntn">
                        <h3>Unlimited Graphic Design. <br>
                            Unlimited Web Development.
                        <br> One Flat Monthly Fee.</h3>
                        <div class="design_limite_box_cntn">
                            <p>
                                No recruitment hassles. We have a deep and immediatec <br> talent pool ready to get to know you, your business, and <br> your growth goals. Let’s grow together. <br>
                                <b>learn more</b>
                            </p>
                        </div>
                        <div class="design_limite_box_cntn">
                            <p>
                                No recruitment hassles. We have a deep and immediatec <br> talent pool ready to get to know you, your business, and <br> your growth goals. Let’s grow together. <br>
                                <b>Kamal Hossain (Founder, Prograssive Link)</b>
                            </p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="design_limite_cntn">
                        <img src="{{ asset('front_assets/images/inner_images/project.png') }}" class="img-fluid" alt="skill people logo">
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
        function getval(sel){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'get',
                url:'price/service-wise-price/'+sel.value,
                data:{_token: "{{ csrf_token() }}"
                },
                success: function( msg ) {
                    $('#ser_id').val(msg.id);
                    $('#ser_price').val(msg.price);
                    $('.checkout_price').text('[Total Amount $'+msg.price+']');
                    $('#ser_title').val(msg.title);
                }
            });
            // if(sel.value=='pro'){
            //     var id = 2;
            //     var price = 1200;
            //     var stitle = 'Pro Plan';
            //     $('#ser_id').val(id);
            //     $('#ser_price').val(price);
            //     $('.checkout_price').text('[Total Amount $'+price+']');
            //     $('#ser_title').val(stitle); 
            // }else if(sel.value=='standard'){
            //     var id = 1;
            //     var price = 529;
            //     var stitle = 'Standard Plan';
            //     $('#ser_id').val(id);
            //     $('#ser_price').val(price);
            //     $('.checkout_price').text('[Total Amount $'+price+']');
            //     $('#ser_title').val(stitle); 
            // }
        }

        $('#checkoutModal_button').on( "click", function() {
            var select_val = $('#select-color').val();
            // if(select_val == 'pro' || select_val == 'standard'){
                $("#checkoutModal").modal('show');
            // }
        });

        $('#terms_check').click(function() {
            var check_val = $("#terms_check").is( ":checked" ) ? 1 : 0;
            console.log(check_val);
            if(check_val == 1){
                $('#checkout_btn_submit').removeClass("notactive");
            }else{
                $('#checkout_btn_submit').addClass("notactive");
            }
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