<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Boeken') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
@extends('layouts.app')

@section('content')    
    <div class="main container d-flex mt-5">
        <div style="width: 18%">
            cek
        </div>
        
        <div style="width: 82%">
            @foreach ($datas as $item)
            <a class="card my-3 links" href="{{ route('booking', $item->id) }}">
                <div class="row g-0">
                    <div class="col-sm-5">
                        <img class="card-img-top" src="data:image/png;base64,{{ chunk_split(base64_encode($item->image)) }} " style="object-fit:cover; height:100%">
                    </div>
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title" style="font-weight: bold">{{$item->name}}</h5>
                            <div class="row">
                                <div class="details name col-3 my-1">Alamat    :</div>
                                <div class="details col">{{$item->address}}</div>
                            </div>
                            <div class="row">
                                <div class="details name col-3  my-1">Kota    :</div>
                                <div class="details col">{{$item->city}}</div>
                            </div>
                            <div class="row">
                                <div class="details name col-3  my-1">Kapasitas    :</div>
                                <div class="details col">{{$item->capacity}}</div>
                            </div>
                            <div class="row">
                                <div class="details name col-3  my-1">Kontak    :</div>
                                <div class="details col">{{$item->contact}}</div>
                            </div>
                            <div class="row">
                                <div class="details name col-3  my-1">Harga    :</div>
                                <div class="details col">{{$item->price}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach 
        </div>

    </div>
@endsection    
</body>
</html>

<style>
    .main{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .details{
        font-size: 16px;
    }

    .links{
        all:unset;
        color: black
        text-hover: none;
    }
</style>