@extends('layouts.front')

@section('content-title')
    <div class="title m-b-md">
        TheBookMark <span class="color">Home</span>
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
@section('content')
    <form class="search">
        <input type="text" placeholder="Enter your city" />
        <input type="submit" value="Search"/>
    </form>
    <div class="search">
        <button onclick="getLocation()">Geolocate Me</button>
        <h1 id="city"></h1>
    </div>
@endsection