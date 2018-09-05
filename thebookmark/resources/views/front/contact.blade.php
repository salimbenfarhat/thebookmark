@extends('layouts.front')

@section('content-title')
    <div class="title m-b-md">
        TheBookMark <span class="color">Contact</span>
    </div>
@endsection
@section('content-nav')
    <div class="links">
        <a href="{{ route('index') }}">Home</a>
        <a href="{{ route('aboutus') }}">About Us</a>
        <a href="{{ route('bookmarks') }}">Bookmarks</a>
        <a href="{{ route('offers') }}">Offers</a>
        <a href="{{ route('api') }}">API</a>
        <a href="{{ route('contact') }}">Contact</a>
    </div>
@endsection