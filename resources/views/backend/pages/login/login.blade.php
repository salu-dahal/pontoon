<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login page</title>
    <link  href="{{url('backend/vendors/bootstrap/dist/css/bootstrap.min.css')}}"rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" style="margin-top:  100px;">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">Admin Login</div>
                    <div class="panel-body">
                        @include('backend.layouts.messages')
                        <form action="{{route('admin-login')}}" method="post">
                            {{csrf_field()}}
                             <div class="form-group form-group-sm">
                                 <label for=""username>Email or Username</label>
                                 <input type="text" name="username"placeholder="Email or Username" id="username" class="form-control">
                            <a href="" style=""color="color:red;";>{{$errors -> first('username')}}</a>
                        </div>
                            <div class="form-group form-group-sm">
                                <label for=""password>Password</label>
                                <input type="password" name="password"placeholder="password" id="password" class="form-control">
                                <a href="" style="color:red";>{{$errors -> first('password')}}</a>
                            </div>
                            <div class="form-group form-group-sm">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>

                                <button class="btn btn-danger btn-sm pull-right">Login</button>
                            </div>

                        </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
