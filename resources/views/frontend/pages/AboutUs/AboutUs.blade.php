@php $title ="Pontoon|AboutUs" @endphp
@extends('frontend.master.master')
@section('content')

<div class="com-lg-12" style="position: relative; text-align: center; margin-top:-80px">
    <img src="frontend/images/Know_about_us-02.jpg" height="300" width="100%">
    <div class="aboutus"
        style="position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); color:White; font-family:times; font-size:40px  ">
        About Pontoon
    </div>
</div>
<section id="mu-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-contact-area">
                    <!-- start title -->
                    <div class="col-md-4">
                        <img src="frontend/images/Branding&Creative_Design-04.jpg" height="210" width="300">
                    </div>
                    <div class="col-md-8">
                        <h3>What Pontoon Actually Is?</h3>

                        <p>Nulla sodales ut tellus blandit accumsan. Aliquam erat volutpat. Morbi quis vestibulum erat.
                            Nam malesuada lobortis tempus. Fusce fermentum libero fringilla odio pharetra malesuada.
                            Suspendisse potenti. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                            posuere cubilia Curae; Nullam ultrices lectus quis consequat fringilla. Mauris non ex et
                            purus sollicitudin tempus vitae quis nisi.
                            Nulla sodales ut tellus blandit accumsan. Aliquam erat volutpat. Morbi quis vestibulum erat.
                            Nam malesuada lobortis tempus. Fusce fermentum libero fringilla odio pharetra malesuada.
                            Suspendisse potenti. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                            posuere cubilia Curae; Nullam ultrices lectus quis consequat fringilla. Mauris non ex et
                            purus sollicitudin tempus vitae quis nisi.
                        </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <h3>Team Management</h3>
                    <div class="col-md-8">

                        <p>Suspendisse quis consectetur nisi, vitae consequat sem. In et quam id libero venenatis
                            venenatis. Morbi vitae justo vulputate, auctor augue eu, pulvinar augue. Vestibulum
                            placerat
                            sem eu posuere laoreet. Ut ac ex nec urna maximus tristique interdum eget ipsum. Duis at
                            pharetra neque, ut condimentum ex. Nunc tincidunt magna nec aliquam rhoncus. Morbi a
                            posuere
                            nunc.</p>
                    </div>

                    <div class="col-md-4">
                        <img src="frontend/images/Digital_Marketing&Advertising-02.jpg" height="200" width="300">
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="container">
        <div class="col-md-12" style="text-align:center;">
            {{-- <h2>Team Information</h2> --}}
            <div class="col-md-3">
                <img src="frontend/images/Branding&Creative_Design-04.jpg" height="200" width="200" />
                <div style=" border:groove; color:indigo; background-color:lightgreen; font-size:20px">
                    <h5>ADITYA SHAH</h5>
                    <h4>CEO</h4>
                    <p>"hello"</p>
                    <span>Follow:
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-instagram"></i>
                        <i class="fa fa-twitter"></i>
                    </span>
                </div>

            </div>

            <div class="col-md-3">
                <img src="frontend/images/Digital_Marketing&Advertising-02.jpg" height="200" width="200" />
                <div style="border:groove; color:lightgreen; background-color:plum; font-size:20px">
                    <h5>ADITYA SHAH</h5>
                    <h4>CEO</h4>
                    <p>"hello"</p>
                    <span>Follow:
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-instagram"></i>
                        <i class="fa fa-twitter"></i>
                    </span>
                </div>


            </div>

            <div class="col-md-3">
                <img src="frontend/images/Branding&Creative_Design-04.jpg" height="200" width="200" />
                <div style="border:groove;">
                    <h5>ADITYA SHAH</h5>
                    <h4>CEO</h4>
                    <p>"hello"</p>
                </div>

            </div>


            <div class="col-md-3">
                <img src="frontend/images/Digital_Marketing&Advertising-02.jpg" height="200" width="200" />
                <div style="border:groove;">
                    <h5>ADITYA SHAH</h5>
                    <h4>CEO</h4>
                    <p>"hello"</p>
                </div>

            </div>
        </div>
    </div>


</section>


@endsection