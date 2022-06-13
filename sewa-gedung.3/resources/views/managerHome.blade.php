@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('New Hotel') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('manager.insert') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="capacity" class="col-md-4 col-form-label text-md-end">{{ __('Capacity') }}</label>

                            <div class="col-md-6">
                                <input id="capacity" type="number" class="form-control @error('email') is-invalid @enderror" name="capacity" value="{{ old('capacity') }}">

                                @error('capacity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="contact" class="col-md-4 col-form-label text-md-end">{{ __('Contact') }}</label>

                            <div class="col-md-6">
                                <input id="contact" type="" class="form-control @error('password') is-invalid @enderror" name="contact">

                                @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Image') }}</label>

                            <div class="col-md-6">
                                <input id="selectAvatar" type="file" class="form-control" name="image">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="number" min="1" step="any" class="form-control" name="price">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="city" class="col-md-4 col-form-label text-md-end">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="row">
            <div class="col">Nama</div>
            <div class="col">Alamat</div>
            <div class="col">Kapasitas</div>
            <div class="col">Kontak</div>
            <div class="col">Image</div>
            <div class="col">Price</div>
            <div class="col">City</div>
            <div class="col">Description</div>
        </div>
        @foreach($datas as $item)
            <div class="row">
                <div class="col"> {{ $item->name }} </div>
                <div class="col"> {{ $item->address }} </div>
                <div class="col"> {{ $item->capacity }} </div>
                <div class="col"> {{ $item->contact }} </div>
                <div class="col"> <img class="card-img-top" src="data:image/png;base64,{{ chunk_split(base64_encode($item->image)) }} " style="object-fit:cover; height:100%"> </div>
                <div class="col"> {{ $item->price }} </div>
                <div class="col"> {{ $item->city }} </div>
                <div class="col"> {{ $item->description }} </div>
            </div>
        @endforeach
    </div>

</div>
@endsection