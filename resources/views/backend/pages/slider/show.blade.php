@extends('backend.master.master')
@section('content')

<div class="col-md-2"></div>
<div class="col-md-6">
<table class="table table-striped">
        
        <tr>
            <th>S.N</th>
            <th>Title</th>
            <th>Image</th>
            <th>Description</th>
            <th>Action</th>
            
        </tr>


        @foreach($slides as $key=>$slide)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$slide->title}}</td>

            <td> <img src="{{url('images')}}/{{$slide->image}}" height="50" width="100" /> </td>

            <!-- <td> <video src="{{url('images')}}/{{$slide->image}}" height="50" width="100"></video> </td> -->

            <td>{{$slide->description}}</td>

            <td> 
            <a href="{{route('delete-show',$slide->id)}}" onclick="return confirm('Confirm Delete?')"
         class="btn btn-sm btn btn-danger"><i class="fa fa-trash"></i>
        </a>
       
        <a href="{{route('edit_slider',$slide->id)}}" class="btn btn-sm btn btn-primary"><i
        class="fa fa-edit"></i> </a>
            </td>
        </tr>
      
       
  

        @endforeach

    </table>
</div>
@stop
