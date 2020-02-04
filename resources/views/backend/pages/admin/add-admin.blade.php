@extends('backend.master.master')
@section('content')



    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Add Admin</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link">
                                        <i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-9">
                                        <form action="{{route('add-admin')}}" method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="form-group form-group-sm">
                                                <label for="name">Full Name</label>
                                                <input type="text" name="name" id="name" value="{{old('name')}}"placeholder="Enter your name" class="form-control">
                                                <a href="" style="color:red;">{{$errors->first('name')}}</a>
                                            </div>

                                            <div class="form-group form-group-sm">
                                                <label for="email">email</label>
                                                <input type="text" name="email" id="email" value="{{old('email')}}"placeholder="Enter your email" class="form-control">
                                                <a href="" style="color:red;">{{$errors->first('email')}}</a>
                                            </div>
                                            <div class="form-group form-group-sm">
                                                <label for="password">password</label>
                                                <input type="password" name="password" id="password" placeholder="Enter your password" class="form-control">
                                                <a href="" style="color:red;">{{$errors->first('password')}}</a>
                                            </div>
                                            <div class="form-group form-group-sm">
                                                <label for="password_confirmation">password_confirmation</label>
                                                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Enter your password_confirmation" class="form-control">
                                                <a href="" style="color:red;">{{$errors->first('passsword_confirmation')}}</a>
                                            </div>
                                            <div class="form-group form-group-sm">
                                                <label for="profile">profile</label>
                                                <input type="file" name="upload" id="profile"  class="btn btn-default btn-sm">
                                                <a href="" style="color:red;">{{$errors->first('upload')}}</a>
                                            </div>

                                            <div class="form-group form-group-sm">
                                                <button class="btn btn-success btn-sm">Add Admin</button>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="col-md-3">
                                        <img src="{{url('backend/icons/not found image.png')}}" id="target-image" class="img-responsive
                                         thumbnail" style="margin-top: 23px;" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>

    <!-- /page content -->

@stop

