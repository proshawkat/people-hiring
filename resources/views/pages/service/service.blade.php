@extends('layouts.master')
@section('content')
<!-- Our_work_banner -->
<section class="our_work_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="our_work_cntn">
                    <h3>Lorem Ipsum dummy <br>
                        make a specimen</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has <br>
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer </p>
                    <a class="banner_btn work_banner" href="{{ url('price') }}">See pricing</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our_work_images">
    <main class="gallery_box test_cnt">
        @php
            $i=1;
        @endphp
        @foreach($gallery as $val)
            @if($i%2==0)
            <div class="vertical">
            @elseif($i%3==0)
            <div class="horizontal">
            @else
            <div class="">
            @endif
                <img src="{{ asset('uploads/gallery/'. $val->image) }}" alt="">
            </div>
            @php
                $i++
            @endphp
        @endforeach
    </main>
</section>
<script>
    const divs = document.querySelectorAll('div');
    const body = document.body;
    const prev = document.querySelector('.prev');
    const next = document.querySelector('.next');
    
    checkPrev = () => document.querySelector('div:first-child').classList.contains('show') ? prev.style.display = 'none' : prev.style.display = 'flex';
    
    checkNext = () => document.querySelector('div:last-child').classList.contains('show') ? next.style.display = 'none' : next.style.display = 'flex';
    			
    Array.prototype.slice.call(divs).forEach(function (el) {
    			el.addEventListener('click', function () {
    				this.classList.toggle('show');
    				body.classList.toggle('active');
    				checkNext();
    				checkPrev();
    			});
    });
    
    prev.addEventListener('click', function() {
    			const show = document.querySelector('.show');
    			const event = document.createEvent('HTMLEvents');
    			event.initEvent('click', true, false);
    
    			show.previousElementSibling.dispatchEvent(event);
    			show.classList.remove('show');
    			body.classList.toggle('active');
    			checkNext();
    });
    
    next.addEventListener('click', function() {
    			const show = document.querySelector('.show');
    			const event = document.createEvent('HTMLEvents');
    			event.initEvent('click', true, false);
    
    			show.nextElementSibling.dispatchEvent(event);
    			show.classList.remove('show');
    			body.classList.toggle('active');
    			checkPrev();
    })
</script>
<!-- JS files -->
@endsection