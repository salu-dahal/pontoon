@section('menu')
    <!-- Start menu -->
    <section id="mu-menu">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- LOGO -->
                    <!-- TEXT BASED LOGO -->
                   <!-- <a class="navbar-brand"><i class="fa fa-university"></i><span>Pontoon</span></a> -->
                    <a href="{{route('Home')}}"><img src="frontend/images/poon.png" height="70" width="150"/></a>
                    <!-- IMG BASED LOGO  -->
                    <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                        <li><a href="{{route('Home')}}">Home</a></li>
                        <li><a href="{{route('AboutUs')}}">AboutUs</a></li>
                        <li><a href="{{route('Contact')}}">Contact</a></li>
                        <li><a href="{{route('Services')}}">Services</a></li>
                        <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </section>
    <!-- End menu -->
    <!-- Start search box -->
    <div id="mu-search">
        <div class="mu-search-area">
            <button class="mu-search-close"><span class="fa fa-close"></span></button>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form class="mu-search-form">
                            <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End search box -->
@stop
