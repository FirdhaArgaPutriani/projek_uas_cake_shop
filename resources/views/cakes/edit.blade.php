@extends('layouts.app') 
   
@section('content') 
<img src="{{ url('images/logo.png') }}" width="250" class="rounded mx-auto d-block"><br>
<h2 align="center">Edit Data Ossena Cake's</h2><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('cakes') }}">Cake Data</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
        </div>

        <form action="/cakes/{{$cake->id}}" method="post" enctype="multipart/form-data"> 
            {{csrf_field()}} 
            @method('PUT') 
            <input type="hidden" name="id" value="{{$cake->id}}"></br> 
            <div class="form-group"> 
                <label for="nama">Nama</label> 
                <input type="text" class="form-control" required="required" name="nama" value="{{ $cake->nama }}"></br> 
            </div> 
    
            <div class="form-group"> 
                <label for="harga">Harga</label> 
                <input type="text" class="form-control" required="required" name="harga" value="{{ $cake->harga }}"></br> 
            </div> 
                        
            <div class="form-group"> 
                <label for="stok">Stok</label> 
                <input type="text" class="form-control" required="required" name="stok" value="{{ $cake->stok }}"></br> 
            </div> 
    
            <div class="form-group"> 
                <label for="photo">Photo</label> 
                <input type="file" class="form-control" required="required" name="photo" value="{{$cake->photo}}"></br> 
                <img width="150px" src="{{asset('storage/'.$cake->photo)}}"> 
            </div> 

            <div class="form-group"> 
                <label for="keterangan">Keterangan</label> 
                <input type="text" class="form-control" required="required" name="keterangan" value="{{ $cake->keterangan }}"></br> 
            </div>  

            <button type="submit" name="edit" class="btn btn-primary float-right">Save Changes</button> 
        </form>
    </div> 
</div> 
@endsection 