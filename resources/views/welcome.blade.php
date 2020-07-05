@extends('layouts.master')

@section('content')
<!-- banner area-->
<section class="banner_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-7 col-lg-7 col-xl-7">
                <div class="banner_cntn">
                    <h1 class="description"> 
                        <span class="selective">Unlimited</span> graphic designs <br>
                        & web development <br>
                       <span class="selective selective2">Flat</span> Monthly Fee. </h1>
                    <h5>No pain of selecting, instructing or managing them. <br> No equipment, software, office space or overhead costs. Just having a team of experts at your fingertips</h5>
                    <a class="banner_btn" href="{{ url('price') }}">See pricing</a>
                    <div class="client_text">
                         
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                        <p><b>Henry Warner, CEO, Howler</b></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">
                <div class="banner_cntn">
                    <figure>
                        <img src="{{ asset('front_assets/images/banner/banner01.png') }}" class="img-fluid" alt="skill people banner">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Cliend box area -->
<section class="cliend_box_area">
    <h2 class="h2_exta">Skill<span>people</span></h2>
    <div class="container">
        <div class="row">
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
<!-- our capabilites area-->
<section class="capabilites_area">
    <div class="container">
        <div class="capabilites_full_area">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="capabilities_box_hdr">
                        <h3>Our capabilities</h3>
                        <p>We can help you with almost everything you might need in the graphic design department</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="capabilities_box_cntn">
                        <a href="#">
                            <figure>
                                <img src="{{ asset('front_assets/images/body/capabilities_01.png') }}" class="img-fluid" alt="Capabilities Images">
                            </figure>
                            <div class="capabilities_cntn">
                                <h4>Web Development</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> 
                            </div> 
                        </a> 
                    </div> 
                </div> 
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="capabilities_box_cntn capabilities_border">
                        <a href="#">
                            <figure>
                                <img src="{{ asset('front_assets/images/body/capabilities_02.png') }}" class="img-fluid" alt="Capabilities Images">
                            </figure>
                            <div class="capabilities_cntn">
                                <h4>UI/UX Design</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="capabilities_box_cntn">
                        <a href="#">
                            <figure>
                                <img src="{{ asset('front_assets/images/body/capabilities_03.png') }}" class="img-fluid" alt="Capabilities Images">
                            </figure>
                            <div class="capabilities_cntn">
                                <h4>3D & Motion</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </a> 
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9">
                    <div class="capabilities_footer_cntn">
                        <p>
                            We offer a large range of design services and have 100+ of in-house experienced and professional graphic, motion and UI designers. <b> Let's grow together!</b>
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="capabilities_footer_cntn">
                        <a href="{{ url('how_we_work') }}">Check our how we work</a>
                    </div>
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
                            <a href="{{ url('recruitment') }}">
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
    </div>
</section>
<!-- DESIGNING LIMITE -->
<section class="design_limite_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="design_limite_cntn">
                    <h3>Break Your Limits</h3>
                    <div class="design_limite_box_cntn">
                        <h4>Our Unique Way of Doing Things</h4>
                        <p>Whenever you need, it’s easy to hire and manage project with a few clicks. There’s no recruiting, HR, onboarding, or admin. Our software makes it easy to collaborate with your team and share design files.
                        </p>
                    </div>
                    <div class="design_limite_box_cntn">
                        <h4>Skilled designers recruited exclusively for you</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </div>
                    <div class="design_limite_box_cntn">
                        <h4>Web development exclusively for you</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </div>
                    <div class="design_limite_box_cntn">
                        <h4>No Hidden Costs</h4>
                        <p>You don’t have to invest in hiring, retaining in-house employees and paying high local salaries. We set everything up, scale the team up or down according to your requirements and goals. No hourly billing, and no additional fees. Just a flat monthly rate. Contact us and we will get things done on time.
                        </p>
                    </div>
                    <div class="design_limite_box_cntn">
                        <button class="learn-more">
                            <div class="circle">
                                <span class="icon arrow"></span>
                            </div>
                            <a href="{{ url('designlimit') }}" class="button_text">Learn more</a>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="design_limite_cntn">
                    <img src="{{ asset('front_assets/images/body/design_limite.png') }}" class="img-fluid" alt="skill people logo">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection