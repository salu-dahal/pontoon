@section('footer')
    <!-- Start footer -->
    <footer id="mu-footer">
        <!-- start footer top -->
        <div class="mu-footer-top">
            <div class="container">
                <div class="mu-footer-top-area">
                    <div class="row">
                        <div class="col-md-4" style="text-align: center;">
                            <div class="mu-footer-widget">
                                <h4>Information</h4>
                                <ul>
                                    <li><a href="{{route('AboutUs')}}">AboutUs</a></li>
                                    <li><a href="{{route('Services')}}">Services</a></li>
                                    <li><a href="{{route('Contact')}}">Contact</a></li>
                                    <li><a href="">Term Of Use</a></li>
                                </ul>
                            </div>
                        </div>
                     
                        <div class="col-md-4" style="text-align: center;">
                            <div class="mu-footer-widget">
                                <h4>Contact</h4>
                                <address>
                                    <p>P.O. Putalisadak</p>
                                    <p>Phone:+91 98841675</p>
                                    <p>Website: www.pontoon.com</p>
                                    <p>Email: pontoon@info.io</p>
                                </address>
                            </div>
                        </div>
                        <div class="col-md-4" style="text-align: center;">
                            <div class="mu-footer-widget">
                                <h4>In Partnership With:</h4>
                                
                                        
                                    <span>
                                        <img src="frontend/images/GGC_LoGo2020_Light.png" height="30" width="100"/>
                                        <a href="https://www.facebook.com/globalguidelines/"><i class="fa fa-facebook-official fa-2x" style="color: blue;"></i></a>
                                        <a href="https://www.instagram.com/globalguidelines/"><i class="fa fa-instagram fa-2x" style="color: red;"></i></a>
                                    </span>

                                        
             
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end footer top -->
        <!-- start footer bottom -->
        <div class="mu-footer-bottom">
            <div class="container">
                <div class="mu-footer-bottom-area">
                    <p>&copy; All Right Reserved. Designed by <a href="http://www.markups.io/" rel="nofollow">Pontoon.io</a></p>
                </div>
            </div>
        </div>
        <!-- end footer bottom -->
    </footer>
    <!-- End footer -->


    <!-- jQuery library -->
    <script src="{{url('frontend/assets/js/jquery.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{url('frontend/assets/js/bootstrap.js')}}"></script>
    <!-- Slick slider -->
    <script type="text/javascript" src="{{url('frontend/assets/js/slick.js')}}"></script>
    <!-- Counter -->
    <script type="text/javascript" src="{{url('frontend/assets/js/waypoints.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/assets/js/jquery.counterup.js')}}"></script>
    <!-- Mixit slider -->
    <script type="text/javascript" src="{{url('frontend/assets/js/jquery.mixitup.js')}}"></script>
    <!-- Add fancyBox -->
    <script type="text/javascript" src="{{url('frontend/assets/js/jquery.fancybox.pack.js')}}"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


    <!-- Custom js -->
    <script src="{{url('frontend/assets/js/custom.js')}}"></script>
    <script type="text/javascript" src="src{{url('frontend/assets/js/Readmore.js')}}"></script>


    </body>
    </html>
@stop
