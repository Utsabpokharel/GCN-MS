@include('Admin.Layouts.head')
@include('Admin.Layouts.header')
@include('Admin.Layouts.sidebar')
@include('Admin.Layouts.index')
@include('Admin.Layouts.footer')


@yield('head')
@yield('header')
@yield('sidebar')
@yield('content')
@yield('footer')
