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
                            <h2>Show Admins</h2>
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
                                    @include('backend.layouts.messages')
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>User Type</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($adminData as $key=>$admin)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$admin->name}}</td>
                                                <td>{{$admin->username}}</td>
                                                <td>{{$admin->email}}</td>
                                                <td>
                                                    <form action="{{route('update-admin-type')}}" methd="post">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="criteria" value="{{$admin->id}}">

                                                        @if($admin->admin_type=='super-admin')
                                                            <button name="super_user"class="btn btn-success btn-xs">Super Admin</button>
                                                        @else
                                                            <button name="admin"class="btn btn-warning btn-xs">Admin</button>
                                                        @endif
                                                    </form>
                                                </td>
                                                <td>
                                                    <img src="{{url('backend/uploads/images/admin/'. $admin->image)}}" alt="no image"
                                                         width="30">
                                                </td>
                                                <td>
                                                    <a href="{{route('edit-admin-user').'/'.$admin->id}}"
                                                       class="btn btn-success btn-xs" title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="{{route('delete-admin-user'). '/'. $admin->id}}" onclick="return
                                                 confirm('are you sure to delete?') "class="btn btn-danger btn-xs" title="Delete">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>

                                            </tr>
                                        @empty
                                        @endforelse
                                        </tbody>
                                    </table>
                                    {{$adminData->links()}}
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


