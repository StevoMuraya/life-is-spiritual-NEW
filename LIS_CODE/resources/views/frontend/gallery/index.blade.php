@extends('frontend.format')

@section('home_content')
    @include('frontend.nav')
    @include('frontend.gallery.header')
    @include('frontend.gallery.gallery')
    @include('frontend.footer')

@endsection