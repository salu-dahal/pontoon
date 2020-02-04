@section('header')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title',$title)</title>
    <!-- Bootstrap -->
    <link href="{{url('backend/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{url('backend/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{url('backend/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="{{url('backend/vendors/google-code-prettify/bin/prettify.min.css')}}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{url('backend/ckeditor/contents.css')}}" rel="stylesheet">
    <link href="{{url('backend/build/css/custom.min.css')}}" rel="stylesheet">
    <link href="{{url('backend/custom/custom.css')}}" rel="stylesheet">
    <link rel="icons" href="{{url('backend/icons/admin.png')}}">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
@stop

