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
                        <h2>Add slider</h2>
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
                                    <form action="{{route('add_slider')}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}

                                        <div class="form-group form-group-sm">
                                            <label for="profile">image</label>
                                            <input type="file" name="image" id="image" class="btn btn-default btn-sm">
                                            <a href="" style="color:red;">{{$errors->first('image')}}</a>
                                        </div>

                                        <div class="form-group form-group-sm">
                                            <label for="title">title</label>
                                            <input type="text" name="title" id="title" value="{{old('title')}}"
                                                placeholder="Enter your title" class="form-control">
                                            <a href="" style="color:red;">{{$errors->first('title')}}</a>
                                        </div>
                                        <div class="form-group form-group-sm">
                                            <label for="order">description</label>
                                            <input type="text" name="description" id="description"
                                                placeholder="Enter your description" class="form-control">
                                            <a href="" style="color:red;">{{$errors->first('description')}}</a>
                                        </div>

                                        <div class="form-group form-group-sm">
                                            <button class="btn btn-success btn-sm">Add slider</button>
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

    //page content


    @stop