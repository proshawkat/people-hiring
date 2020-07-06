@extends('layouts.master')

@section('content')

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
                            <a href="#" class="button_text">Learn more</a>
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