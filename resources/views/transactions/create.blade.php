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
                    <li class="breadcrumb-item"><a href="{{ url('transactions') }}">User Data</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </nav>
        </div>

        <form action="/transactions" method="post"> 
            @csrf 
            <div class="form-group"> 
                <label for="user_id">User ID</label> 
                <input type="text" class="form-control" required="required" name="user_id"></br> 
            </div> 

            <div class="form-group"> 
                <label for="tanggal">Tanggal</label> 
                <input type="text" class="form-control" required="required" name="tanggal"></br> 
            </div> 

            <div class="form-group"> 
                <label for="status">Status</label> 
                <input type="text" class="form-control" required="required" name="status"></br> 
            </div>

            <div class="form-group"> 
                <label for="kode">Kode</label> 
                <input type="text" class="form-control" required="required" name="kode"></br> 
            </div>

            <div class="form-group"> 
                <label for="jumlah_harga">Jumlah Harga</label> 
                <input type="text" class="form-control" required="required" name="jumlah_harga"></br> 
            </div>

            <button type="submit" name="add" class="btn btn-primary float-right">Add Data</button> 
        </form> 
    </div> 
</div> 
@endsection 