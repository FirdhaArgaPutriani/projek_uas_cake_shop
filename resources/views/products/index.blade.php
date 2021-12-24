@extends('layouts.app')

@section('content')
<img src="{{ url('images/logo.png') }}" width="250" class="rounded mx-auto d-block"><br>
<h2 align="center">Product Ossena Cake's</h2>

<div class="container">
    <div class="row justify-content-center">
    
    <div class="col-md-12 mt-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product</li>
            </ol>
        </nav>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                @foreach($cakes as $cake)
                    <div class="col-md-3" floatval="left">
                        <div class="card">
                            <img src="{{url('uploads')}}/{{$cake->photo}}" class="card-img-top" alt="...">
                
                            <div class="card-body">
                                <h5 class="card-title">{{ $cake->nama }}</h5>
                        
                                <p class="card-text">
                                    <strong>Harga : </strong> Rp. {{ number_format ($cake->harga)}} <br>
                                    <Strong>Stok : </strong>{{ $cake->stok }} <br>
                                    <hr>
                                    <strong>Keterangan :</strong> <br>
                                    {{$cake->keterangan}}
                                </p>
                        
                                <a href="{{ url('pesan') }}/{{ $cake->id }}" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart"></i> Beli
                                </a>
                            </div>
                        </div>
                    </div>
                    &nbsp;&nbsp;
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection