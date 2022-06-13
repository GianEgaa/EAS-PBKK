<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boeken</title>
    <link rel="icon" href="/building.png" alt="logo">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center py-5">
        {{-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div> --}}
        <h1 style="font-size:64px; font-weight:bold">Fulfill what you need</h1>
        <h4 style="font-size:32px; font-weight:bold">make a reservation and get make it happen</h4>
    </div>
    {{-- <form class="py-5">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form> --}}

    <form class="input-group pt-5" method="POST" action="{{ route('search')}}">
        @csrf
        <div class="form-outline" style="width: 90%">
          <input type="text" id="search" class="form-control" name="namagedung" />
        </div>
        <button type="submit" class="btn btn-primary" style="width: 10%">
          <i class="fas fa-search"></i>
        </button>
    </form>


    <div class="row mt-5 text-center" id="list_kota">
        <div class="col pr-4">
            <a class="mb-5" href="#"><img src="/Jakarta.png" style="width: 100%;" alt=""></a>
            <a class="link_kota" href="#">Jakarta</a>
        </div>
        <div class="col px-4">
            <a href="#"><img src="/Surabaya.png" style="width: 100%;" alt=""></a>
            <a class="link_kota" href="#">Surabaya</a>
        </div>
        <div class="col px-4">
            <a href="#"><img src="/Semarang.png" style="width: 100%;" alt=""></a>
            <a class="link_kota" href="#">Semarang</a>
        </div>
        <div class="col px-4">
            <a href="#"><img src="/Bandung.png" style="width: 100%;" alt=""></a>
            <a class="link_kota" href="#">Bandung</a>
        </div>
        <div class="col pl-4">
            <a href="#"><img src="/Yogyakarta.png" style="width: 100%;" alt=""></a>
            <a class="link_kota" href="#">Yogyakarta</a>
        </div>
    </div>
</div>
@endsection
</body>
</html>

<style>
    .link_kota{
        text-decoration: none; 
        line-height: 4; 
        color:black; 
        font-weight:bold;
        font-size: 20px;
    }
</style>