@include('Admin.layouts.head')
@include('Admin.layouts.header')
@include('Admin.layouts.index')
@include('Admin.layouts.sidebar')
@include('Admin.layouts.footer')


@yield('head')
@yield('header')
@yield('content')
@yield('sidebar')
@yield('footer')
