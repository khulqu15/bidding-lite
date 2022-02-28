@extends('layouts.general')

@section('title', 'Beranda')

@section('content')

<div class="container py-5">
    <div class="row pt-5 pb-4 mt-4">
        <div class="col-md-6 pt-5 mt-5">
            <h1 class="viga">Trusted auction only on Bidding Lite</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis ornare dui, quis molestie </p>
            <button class="btn btnm-primary" onclick="window.location = '{{ route('login') }}'">Login</button>
            <button class="btn btnm-light mx-2" onclick="window.location = '{{ route('products') }}'">Products</button>
        </div>
        <div class="col-md-6 py-md-3 py-4 text-center">
            <img src="{{ asset('img/illust/home.png') }}" class="w-75" alt="">
        </div>
    </div>
</div>

@endsection
