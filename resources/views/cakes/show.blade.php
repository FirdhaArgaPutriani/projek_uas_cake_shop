@extends('layouts.app') 
   
@section('content') 
<img src="{{ url('images/logo.png') }}" width="250" class="rounded mx-auto d-block"><br>
<h2 align="center">Show Data Ossena Cake's</h2><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('cakes') }}">Cake Data</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $cake->name }}</li>
                </ol>
            </nav>
        </div>

        <form action="/cakes/{{$cake->id}}" method="post"> 
            {{csrf_field()}} 
            @method('PUT') 
            <h2>Show Cake {{ $cake->nama }}</h2>
            <br>
                        
            <img width="150px" src="{{asset('storage/'.$cake->photo)}}">

            <table>
                <tr><th>Nama</th><th>:</th><td>{{ $cake->nama }}</td></tr>
                <tr><th>Harga</th><th>:</th><td>{{ $cake->harga }}</td></tr>
                <tr><th>Stok</th><th>:</th><td>{{ $cake->stok }}</td></tr>
                <tr><th>Keterangan</th><th>:</th><td>{{ $cake->keterangan }}</td></tr>
                <tr><th>Created At</th><th>:</th><td>{{ $cake->created_at }}</td></tr>
            </table>
        </form>
    </div>
</div>
@endsection