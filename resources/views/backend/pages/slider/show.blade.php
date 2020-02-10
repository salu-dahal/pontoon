@extends('backend.master.master')
@section('content')

<div class="col-md-2"></div>
<div class="col-md-10">
<table class="table table-responsive">

    <tr>
        <th>S.N</th>
        <th>Title</th>
        <th>Image</th>
        <th>Description</th>
    </tr>


    @foreach($slides as $key=>$slide)
    <tr>
        <td>{{$key+1}}</td>
        <td>{{$slide->title}}</td>
        <td> <img src="{{url('images')}}/{{$slide->image}}" height="50" width="100" /> </td>
        <td>{{$slide->description}}</td>
    </tr>
    }
    @endforeach

</table>
</div>
@stop