@extends('client.home')

@section('client_dashboard_content')
    <style>
        .capabilites_area{
            padding-top: 0px;
        }
        .capabilities_box_cntn{
            margin-top: 0px;
        }
    </style>
    <section class="capabilites_area">
        <div class="container">
            <div class="capabilites_full_area">
                <div class="row">
                    @if(count($services)==0)
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="capabilities_box_hdr">
                                <h3>Empty Order</h3>
                                <p>You can see our all services and order now<a href="{{ url('price') }}"> Our services</a></p>
                            </div>
                        </div>
                    @else
                        @foreach($services as $service)
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="capabilities_box_cntn">
                                    <a href="#">
                                        <figure>
                                            <img src="{{ asset('front_assets/images/body/capabilities_01.png') }}" class="img-fluid" alt="Capabilities Images">
                                        </figure>
                                        <div class="capabilities_cntn">
                                            <h4>{{ $service->service->title }}</h4>
                                            <p>{{ $service->service->short_details }}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
