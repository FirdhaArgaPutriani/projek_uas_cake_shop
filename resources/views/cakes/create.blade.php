@extends('layouts.app') 
   
@section('content') 
<img src="{{ url('images/logo.png') }}" width="250" class="rounded mx-auto d-block"><br>
<h2 align="center">Create Data Ossena Cake's</h2><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('cakes') }}">Cake Data</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </nav>
        </div>

        <form action="/cakes" method="post" enctype="multipart/form-data"> 
            @csrf 
            <div class="form-group"> 
                <label for="nama">Nama</label> 
                <input type="text" class="form-control" required="required" name="nama"></br> 
            </div> 
    
            <div class="form-group"> 
                <label for="harga">Harga</label> 
                <input type="text" class="form-control" required="required" name="harga"></br> 
            </div> 
                        
            <div class="form-group"> 
                <label for="stok">Stok</label> 
                <input type="text" class="form-control" required="required" name="stok"></br> 
            </div> 

            <div class="form-group"> 
                <label for="photo">Photo</label> 
                <input type="file" class="form-control" required="required" name="photo"></br> 
            <div>

            <div class="form-group"> 
                <label for="keterangan">Keterangan</label> 
                <input type="text" class="form-control" required="required" name="keterangan"></br> 
            </div>

            <button type="submit" name="add" class="btn btn-primary float-right">Add Data</button> 
        </form>
    </div> 
</div> 
@endsection 