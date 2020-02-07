@extends('frontend.master.master')
@section('content')

<section id="mu-slider">
    @foreach ($slides as $slide)
        <a href="#"><img src="frontend/images/poon.png" style="height: 200px;">

    <!-- Start single slider item -->
    <div class="mu-slider-single">
        <div class="mu-slider-img">
            <figure>
                <img src="frontend/images/poon.png" alt="img" style="height: 200px;">
            </figure>
        </div>
        <div class="mu-slider-content">
            <h4>Welcome To </h4>
            <span></span>
            <h2>We Will Help You To Learn</h2>
            <a href="#" class="mu-read-more-btn">Read More</a>
        </div>
    

    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
        <div class="mu-slider-img">
            <figure>
                <img src="frontend/images/poon.png" alt="img">
            </figure>
        </div>
        <div class="mu-slider-content">
        </div>
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
        <div class="mu-slider-img">
            <figure>
                <img src="frontend/images/poon.png" alt="img">
            </figure>
        </div>
        <div class="mu-slider-content">
        </div>
    </div>

    <!-- Start single slider item -->
</section>
<!-- End Slider -->
@endsection

{{--
<div class="col-lg-6 col-md-6">
    <div class="mu-about-us-right">
        <a id="mu-abtus-video" href="https://www.youtube.com/embed/R77_gkB_3ms"
           target="mutube-video">
            <img src="frontend/images/trust-4321822.jpg" alt="img">
        </a>
    </div>
</div>--}}
