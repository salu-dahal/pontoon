@include('frontend.layouts.header')
<!-- @include('frontend.layouts.top-header') -->
@include('frontend.layouts.menu')
@include('frontend.layouts.footer')



@yield('header')
@yield('menu')
@yield('content')
@yield('footer')


