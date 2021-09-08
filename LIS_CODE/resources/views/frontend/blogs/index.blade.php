@extends('frontend.format')

@section('home_content')
    @include('frontend.nav')
    @include('frontend.blogs.header')
    @include('frontend.blogs.blogs')
    @include('frontend.footer')

@endsection