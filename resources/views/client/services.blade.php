@extends('client.home')

@section('client_dashboard_content')
    <style>
        .capabilites_area{
            padding-top: 0px;
        }
        .capabilities_box_cntn{
            margin-top: 0px;
            box-shadow: hsl(0, 0%, 80%) 0 0 16px;
            border-radius: 10px;
        }
        .rating {
            float:left;
            border:none;
        }
        .rating:not(:checked) > input {
            position:absolute;
            top:-9999px;
            clip:rect(0, 0, 0, 0);
        }
        .rating:not(:checked) > label {
            float:right;
            width:1em;
            padding:0 .1em;
            overflow:hidden;
            white-space:nowrap;
            cursor:pointer;
            font-size:200%;
            line-height:1.2;
            color:#ddd;
        }
        .rating:not(:checked) > label:before {
            content:'★ ';
        }
        .rating > input:checked ~ label {
            color: #f70;
        }
        .rating:not(:checked) > label:hover, .rating:not(:checked) > label:hover ~ label {
            color: gold;
        }
        .rating > input:checked + label:hover, .rating > input:checked + label:hover ~ label, .rating > input:checked ~ label:hover, .rating > input:checked ~ label:hover ~ label, .rating > label:hover ~ input:checked ~ label {
            color: #ea0;
        }
        .rating > label:active {
            position:relative;
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
                                <p>If you want see our all services and order<a href="{{ url('price') }}"> click here</a></p>
                            </div>
                        </div>
                    @else
                        @foreach($services as $service)
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="capabilities_box_cntn">
                                    <a href="#">
                                        <figure>
                                            <img src="{{ asset('uploads/service/'.$service->service->image) }}" class="img-fluid" alt="Capabilities Images">
                                        </figure>
                                        <div class="capabilities_cntn">
                                            <h4>{{ $service->service->title }}</h4>
                                            <div class="text-center">
                                                @php
                                                    $rating = \App\ServiceRating::where('service_id', $service->service->id);
                                                    $ratingAvg = $rating->avg('value')
                                                @endphp
                                                @for ($i = 0; $i < 5; ++$i)
                                                    <i style="color: #ea0;" class="fa fa-star{{ $ratingAvg <= $i ? '-o':'' }}" aria-hidden="true"></i>
                                                @endfor
                                            </div>
                                            <div  class="text-center">
                                                <span style="font-size: 20px; color: #13171A;">${{ $service->service->price }}</span>
                                            </div>
                                            <p>{{ $service->service->short_details }}</p>
                                        </div>
                                    </a>
                                    @if($rating->where('client_id', Auth::guard('clients')->user()->id)->value('client_id') != Auth::guard('clients')->user()->id)
                                        <div>
                                            <form action="{{ route('client.rating.insert') }}" method="post" >
                                                @csrf
                                                <input hidden type="text" name="service_id" value="{{ $service->service->id }}">
                                                <div style="overflow:hidden;" class="w-100">
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star5" name="rating" value="5" />
                                                        <label for="star5">5 stars</label>
                                                        <input type="radio" id="star4" name="rating" value="4" />
                                                        <label for="star4">4 stars</label>
                                                        <input type="radio" id="star3" name="rating" value="3" />
                                                        <label for="star3">3 stars</label>
                                                        <input type="radio" id="star2" name="rating" value="2" />
                                                        <label for="star2">2 stars</label>
                                                        <input type="radio" id="star1" name="rating" value="1" />
                                                        <label for="star1">1 star</label>
                                                    </fieldset>
                                                </div>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </form>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
