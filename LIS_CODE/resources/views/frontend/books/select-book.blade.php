@extends('frontend.format')

@section('home_content')
    @include('frontend.nav')
    @include('frontend.books.header')
    @include('frontend.books.book-view')
    @include('frontend.books.books')


    @include('frontend.footer')
    
    <script src="{{ asset('frontend/js/pop-up-login.js')  }}"></script>
@endsection