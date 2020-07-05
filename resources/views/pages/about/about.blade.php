@extends('layouts.master')

@section('content')
<section class="our_work_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="our_work_cntn">
                    <h3>We Help Purpose-Driven <br> Entrepreneurs to Change the World</h3>
                    <p>We are on a mission to support sustainable brands by giving them access to the skills they need to grow.
                        <br> We don’t see ourselves as a design company but as a group of passionate problem solvers who help you design your life around the work that matters to you.</p>
                    <a class="banner_btn work_banner" href="{{ url('price') }}">See Pricing</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- DESIGN SUPPORT -->
<section class="design_support_area recruitment_process_margin">
    <div class="container">
        <div class="recruitment_process_bg recruitment_process_bg_about">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="design_support_cntn recruitment_process_images">
                        <img src="{{ asset('front_assets/images/inner_images/about_01.png') }}" class="img-fluid" alt="skill people logo">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="design_support_cntn">
                        <h3>Tired of unreliable freelancers or expensive agencies? Plug our experts in your team!</h3>
                        <p class="defult_txt">Peopele Hiring is the largest graphic design platform that provides unlimited, high-quality design work for thousands of businesses for a flat rate. People Hiring has been helping businesses of all sorts, from start up to fortune 500 enterprises, grow their businesses by expanding their services, growing their web presence, and iconizing their brand. From finding a designer, to communicating your needs and revisions, to payments, the whole process can be frustrating. We recognized that and created a safe, fast and quality experience to submit your creative design tasks and communicate with your designer effortlessly.</p>
                        <div class="design_limite_box_cntn">
                            <a href="{{ url('price') }}">
                                <button class="learn-more learn_more_about">
                                    <div class="circle">
                                        <span class="icon arrow"></span>
                                    </div>
                                    <p class="button_text">Check our pricing</p>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about_full_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="about_box">
                    <img src="{{ asset('front_assets/images/inner_images/team-01.png') }}" alt="our team">
                    <h4>Md Shawkat Ali</h4>
                    <h6>Team Leader</h6>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="about_box">
                    <img src="{{ asset('front_assets/images/inner_images/team-04.png') }}" alt="our team">
                    <h4>SHAHRIAR SHAWON</h4>
                    <h6>Developer</h6>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="about_box">
                    <img src="{{ asset('front_assets/images/inner_images/team-03.png') }}" alt="our team">
                    <h4>ABIDUR RAHMAN (LEMON)</h4>
                    <h6>Developer</h6>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="about_box">
                    <img src="{{ asset('front_assets/images/inner_images/team-02.png') }}" alt="our team">
                    <h4>ABDULLAH AL MAHMUD</h4>
                    <h6>Developer</h6>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="about_box">
                    <img src="{{ asset('front_assets/images/inner_images/team-05.png') }}" alt="our team">
                    <h4>SHAMS NAHIYAN</h4>
                    <h6>Developer</h6>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="about_box">
                    <img src="{{ asset('front_assets/images/inner_images/team-06.png') }}" alt="our team">
                    <h4>MD ABU RAYHAN</h4>
                    <h6>Developer</h6>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="design_limite_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="design_limite_cntn">
                    <img src="{{ asset('front_assets/images/inner_images/about_02.png') }}" class="img-fluid" alt="skill people logo">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="design_limite_cntn">
                    <h3>Giving the best <br> possible customer care</h3>
                    <div class="design_limite_box_cntn">
                        <h4>One Team & One Dream</h4>
                        <p>Great talent makes all the difference. We help young companies scale, and established companies move faster than ever. We treat each other and our clients with warmth and authenticity.
                        </p>
                    </div>
                    <div class="design_limite_box_cntn">
                        <h4>Growth Mindset</h4>
                        <p>We are self-starters and seek out the best solution for every circumstance. It’s not about perfection, it’s about continuous improvement! We don’t just want to take over your workload, we want to make sure that it helps you grow.
                        </p>
                    </div>
                    <div class="design_limite_box_cntn">
                        <h4>True to oneself</h4>
                        <p>Our actions, conversations and decisions are guided by reality and doing what’s right. Every steps of the way, from onboarding and getting to know you, to helping you on how to best formulate requests and to always follow-up after a design has been delivered. We always make sure Designoble offers a great return on investment.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection