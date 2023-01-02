## You can put Layouts to render content inside

you can create a blade.php layout, use @yield('name of section') to render in layout
and in page you can create 

@extends('PARENT LAYOUT')

@section('name of section') 

@endsection

@include('contancts._filter')

