@extends('backend.master.master')
@section('content')

<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>View Data</h2>
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
                                <div class="row">
                                    <table class="table table-responsive">

                                        <tr>
                                            <th>S.N</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>
                                            <th>
                                        </tr>


                                        @foreach($slides as $key=>$slide)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$slide->title}}</td>
                                            <td> <img src="{{url('images')}}/{{$slide->image}}" height="50"
                                                    width="100" />
                                            </td>
                                            <td>{{$slide->description}}</td>
                                            <td>Edit/Delete</td>
                                        </tr>
                                        }
                                        @endforeach

                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    @stop