@extends('backend.master.master')
@section('content')

<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <h2>Edit slider</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>

                    <li><a class="close-link">
                            <i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
                @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                @endif
                @if(session('error'))
                <div class="alert alert-danger">
                    {{session('error')}}
                </div>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="col-md-12">

                    <!-- /.card-header -->

                    <form method="POST" action="{{route('edit_slider')}}" accept-charset="UTF-8" class=""
                        enctype="multipart/form-data">
                        <input type="hidden" name="id" value="{{$slide->id}}">
                        @csrf

                        <div class="box-body">
                            <div class="row">
                               
                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group ">
                                                        <label for="name" class="control-label"> Title
                                                            *</label>
                                                        <textarea id="title"
                                                                  name="title"
                                                                  class="form-control">{{$slide->title}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                <div class="col-sm-4">

                                    <div class="form-group ">
                                        <label for="caption" class="control-label">Current Image</label>
                                        <img src="{{url('images/'.$slide->image)}}" width="60px" id="caption">
                                        <label for="caption" class="control-label">Image</label>
                                        <input class="form-control" name="image" type="file" id="caption">
                                    </div>
                                </div>

             
                                                <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group ">
                                                        <label for="name" class="control-label"> Description
                                                            *</label>
                                                        <textarea id="desc"
                                                                  name="description"
                                                                  class="form-control">{{$slide->description}}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            </div>
                                          
                                        </div>

                                        <button type="submit" class="btn btn-primary">Update Slider</button>


                        <!-- /.box-body -->
                        <!-- /.box -->
                    </form>


                    <!-- ./card-body -->

                    <!-- /.card-footer -->
                </div>
            </div>
        </div>
    </div>
</div>


@stop