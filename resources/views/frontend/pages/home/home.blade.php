@php $title ="Pontoon|Home" @endphp
@extends('frontend.master.master')
@section('content')


<section id="mu-slider">
    <!-- Start single slider item -->
    <div class="mu-slider-single">
        <figure>
            <img src="frontend/images/Digital_Marketing&Advertising-02.jpg" alt="img" width="100%" height="600">
        </figure>
    </div>

    <div class="mu-slider-single">
        <video autoplay muted loop style="height: 100%; width: 100%;">
            <source src="frontend/images/video.mp4" type="video/mp4">
        </video>
    </div>


    <!-- Start single slider item -->
</section>
<!-- End Slider -->

<div class="container">
    <div class="col-md-12">
        <div class="col-md-6">
            <img src="frontend/images/Digital_Marketing&Advertising-02.jpg" alt="img" width="100%" height="400">
        </div>
        <div class="col-md-6">
            <h3><span style="color: green">Go green</span> <span style="color: purple">Go digital</span> </h3>
            <h4>Enhance Your Business With Us<h4>
                    <p>Graphic design is the process of visual communication and problem-solving through the use of typography,
                        photography, and illustration. The field is considered a subset of visual communication and
                        communication design, but sometimes the term "graphic design" is used synonymously.
                        Graphic designers create and combine symbols, images and text to form visual representations
                        of ideas and messages. They use typography, visual arts, and page layout techniques to create
                        visual compositions. .</p>
                    <div class="row">
                        <a href="{{route('Services')}}" button type="button" class="display btn btn-success">More About Services</button></a>
                    </div>
        </div>

    </div>

</div>



<div class="container">
    <div class="col-md-12">
        <div class="col-md-6">
            <h3>Enhance your business with Us</h3>
            <p>Graphic design is the process of visual communication and problem-solving
                through the use of typography, photography, and illustration. The field is
                considered a subset of visual communication and communication design, but sometimes
                the term "graphic design" is used synonymously. Graphic designers create and combine symbols,
                images and text to form visual representations of ideas and messages. They use typography,
                visual arts, and page layout techniques to create visual compositions. Common uses of graphic
                design include corporate design.</p>
            <div class="row">
                <a href="{{route('Services')}}" button type="button" class="display btn btn-success">More About Services</button></a>

            </div>
        </div>
        <div class="col-md-6">
            <img src="frontend/images/Digital_Marketing&Advertising-02.jpg" alt="img" width="100%" height="400">


        </div>
    </div>
</div>




<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2><br>
  <h4>What we have created</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="frontend/images/Digital_Marketing&Advertising-02.jpg" alt="Paris" width="400" height="300">
        <p><strong>Paris</strong></p>
        <p>Yes, we built Paris</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="frontend/images/Digital_Marketing&Advertising-02.jpg" alt="New York" width="400" height="300">
        <p><strong>New York</strong></p>
        <p>We built New York</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="frontend/images/Digital_Marketing&Advertising-02.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>San Francisco</strong></p>
        <p>Yes, San Fran is ours</p>
      </div>
    </div>
  </div><br>
</div>
<!-- End latest course section -->
<div class="mu-title">
    <h2>Our Team</h2>
</div>
<div class="bg-1">
    <div class="container">
        <div class="col-md-12">
            <div class="col-md-3">
                <h3>Aaditya Shah</h3>
                <img src="frontend/images/go.jpg" class="img-circle" alt="Bird" width="200" height="150">
            </div>

            <div class="col-md-3">
                <h3>Amit Shah</h3>
                <img src="frontend/images/go.jpg" class="img-circle" alt="Bird" width="200" height="150">
            </div>

            <div class="col-md-3">
                <h3>Sanish Maharjan</h3>
                <img src="frontend/images/go.jpg" class="img-circle" alt="Bird" width="200" height="150">
            </div>

            <div class="col-md-3">
                <h3>Sushil Malla</h3>
                <img src="frontend/images/go.jpg" class="img-circle" alt="Bird" width="200" height="150">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <a href="{{route('AboutUs')}}" button type="button" class="display btn btn-success">About the team</button></a>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>Clients We Engaged To:</h2>
 
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>KhaiPasal</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>LOVE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>JOB DONE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>GREEN</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFIED</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">HARD WORK</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
</div>
<!-- cookies -->
<div id="cookie_directive_container" class="container"  >
    <nav class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
            <div class="navbar-inner navbar-content-center" id="cookie_accept">
                <p class="text-muted credit">
                    Use cookies for better knowledge <a href="#">cookie policy</a>.
                    &nbsp;&nbsp;&nbsp;<button class="btn btn-sm btn-success remove_cookie_alert">I Agree</button>

                </p>


            </div>
        </div>

    </nav>
</div>

<script>
    $(document).on('click', '.remove_cookie_alert', function() {
        $('#cookie_directive_container').remove()
    });
</script>


@endsection