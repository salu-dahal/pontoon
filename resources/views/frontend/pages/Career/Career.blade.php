@php $title ="Pontoon|Career" @endphp
@extends('frontend.master.master')
@section('content')
<div class="com-lg-12" style="position: relative; text-align: center; margin-top:-80px">
    <img src="frontend/images/Printing-01.jpg" height="400" width="100%">
    <div class="Contact" style="position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); color:White; font-family:times; font-size:40px  ">
      
    </div>
</div>
<!-- started information -->
<div class="container">
    <div class="col-md-12">
        <div class="col-md-6">
            <h3>Why Pontoon</h3>
        </div>
    
   
        <div class="col-md-6">
            <h3>We will get In Touch with you!!!</h3>
        </div>
    </div>
</div>
<!-- end of information -->


<!-- start model -->
<!-- get start button -->
<div class="container">
    <div class="col-lg-12">
        <div class="card-body" style="text-align: center;">
            <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#firstModal">
                Join Us
            </button>
        </div>
    </div>
</div>


<!-- First Modal -->

<form method="post" action="{{route('Career')}}">
@csrf

    <div class="modal fade" id="firstModal">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <h6 class="modal-title" id="myModalLabel"></h6>
                </div>

                <div class="modal-body">
                    <div class="form-group form-group-sm">
                   
                        <label for="Name">Name</label>
                        <input type="text" name="Name" placeholder="enter your Name" class="form-control">
                        <a href="" style="color:red;">{{$errors->first('Name')}}</a>
                    </div>
                </div>

                <div class="modal-body">
                    <div class="form-group form-group-sm">
                        <label for="Email">Email</label>
                        <input type="text" name="Email" placeholder="enter your email address" class="form-control">
                        <a href="" style="color:red;">{{$errors->first('Email')}}</a>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group form-group-sm">
                        <label for="Address">Address</label>
                        <input type="text" name="Address" placeholder="enter your  address" class="form-control">
                        <a href="" style="color:red;">{{$errors->first('Address')}}</a>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group form-group-sm">
                        <label for="Phone">Phone</label>
                        <input type="text" name="Phone" placeholder="enter your  Phone" class="form-control">
                        <a href="" style="color:red;">{{$errors->first('Phone')}}</a>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group form-group-sm">
                        <label for="cv">CV upload</label>
                        <input type="file" name="cv" id="cv" class="btn btn-default btn-sm">
                        <a href="" style="color:red;">{{$errors->first('cv')}}</a>
                    </div>
                </div>


                <div class="modal-footer">
                    <button name="btnsubmit" type="submit" class="btn btn-success" id="submit">Submit</button>


                </div>

            </div>
        </div>
    </div>

</form>

@endsection