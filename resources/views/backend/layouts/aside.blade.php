@section('aside')
<div class="main_container">
    <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
                <a href="{{route('admin')}}" class="site_title"><i class="fa fa-home"></i> <span>Pontoon</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
                <div class="profile_pic">
                    <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                </div>
                <div class="profile_info">
                    <span>Welcome,</span>
                    <h2>Pontoon Advertising</h2>
                </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">

                    <ul class="nav side-menu">
                        <li><a href="{{route('admin')}}"><i class="fa fa-home"></i> Dashboard</a>

                        </li>


                        <li><a><i class="fa fa-bar-chart-o"></i> slider <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{route('add_slider')}}"> Add slider</a></li>
                                <li><a href="{{route('show')}}"> View data</a></li>


                            </ul>

                        </li>
                        <li><a><i class="fa fa-clone"></i>kjh <span class="fa fa-chevron-down"></span></a>

                        </li>
                    </ul>
                </div>


            </div>
            <!-- /sidebar menu -->
        </div>
    </div>
    @endsection