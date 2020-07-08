@extends('layouts.master')

@section('content')
<!-- banner area-->
<section class="our_work_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="our_work_cntn">
                    <h3>Our Recuitement Process</h3>
                    <p>First of all, we shortlist the candidates who meet our basic requirement to be the Designoble experts. <br> We only review the application who have passed these basic criteria. </p>
                    <a class="banner_btn work_banner">Recruitment process</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="design_limite_area">
    <div class="container">
        <div class="recruitment_box">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="design_limite_cntn">
                        <h3>CV Shortening</h3>
                        <div class="design_limite_box_cntn">
                            <p>Lorem Ipsum is simply dummy text of the printing and typese
                                tting industry. Lorem Ipsum has been industry's sit  standard
                                took a galley of type and scrambled it <br><br>

                                dummy text ever since the 1500s, when an unknown printe
                                took a galley of type and scrambled it
                            </p>
                            <a href="{{ route('recruitment') }}">
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
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="design_limite_cntn">
                        <img class="recruit_img" src="{{ asset('front_assets/images/inner_images/interview.png') }}" class="img-fluid" alt="skill people logo">
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
                    <img src="{{ asset('front_assets/images/inner_images/r_img01.png') }}" class="img-fluid" alt="skill people logo">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="design_limite_cntn">
                    <h3>Personal interview</h3>
                    <div class="design_limite_box_cntn">
                        <p>Lorem Ipsum is simply dummy text of the printing and typese
                            tting industry. Lorem Ipsum has been industry's sit standard
                            dummy text ever since the 1500s, when an unknown printer
                            took a galley of type and scrambled it
                        </p>
                    </div>
                    <div class="design_limite_box_cntn">
                        <h4>Lorem ipsum dolar</h4>
                        <p>Ting industry. Lorem Ipsum has been industry's sit  standard
                            dummy text ever since the 1500s, when an unknown
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
<section class="design_limite_area">
    <div class="container">
        <div class="recruitment_box">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="design_limite_cntn">
                        <h3>Observation</h3>
                        <div class="design_limite_box_cntn">
                            <p>Lorem Ipsum is simply dummy text of the printing and typese
                                tting industry. Lorem Ipsum has been industry's sit  standard
                                took a galley of type and scrambled it <br><br>

                                dummy text ever since the 1500s, when an unknown printe
                                took a galley of type and scrambled it
                            </p>
                            <a href="#">
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
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="design_limite_cntn">
                        <img class="recruit_img" src="{{ asset('front_assets/images/inner_images/observation.png') }}" class="img-fluid" alt="skill people logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
