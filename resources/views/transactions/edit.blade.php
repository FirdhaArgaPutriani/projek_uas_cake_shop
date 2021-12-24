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
                    <li class="breadcrumb-item"><a href="{{ url('transactions') }}">Transaksi Data</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
        </div>

        <form action="/transaction/{{$transaction->id}}" method="post"> 
            {{csrf_field()}} 
            @method('PUT') 
            <input type="hidden" name="id" value="{{$transaction->id}}"></br> 
            <div class="form-group"> 
                <label for="user_id">User ID</label> 
                <input type="text" class="form-control" required="required" name="user_id" value="{{ $transaction->user_id }}"></br> 
            </div> 
    
            <div class="form-group"> 
                <label for="tanggal">Tanggal</label> 
                <input type="text" class="form-control" required="required" name="tanggal" value="{{ $transaction->tanggal }}"></br> 
            </div> 
    
            <div class="form-group"> 
                <label for="status">Status</label> 
                <input type="text" class="form-control" required="required" name="statu" value="{{ $transaction->status }}"></br> 
            </div> 

            <div class="form-group"> 
                <label for="alamat">Alamat</label> 
                <input type="text" class="form-control" required="required" name="alamat" value="{{ $transaction->alamat }}"></br>
            </div> 

            <div class="form-group"> 
                <label for="kode">Kode</label> 
                <input type="text" class="form-control" required="required" name="kode" value="{{ $transaction->kode }}"></br>
            </div> 
                        
            <div class="form-group"> 
                <label for="jumlah_harga">Jumlah_harga</label> 
                <input type="text" class="form-control" required="required" name="jumlah_harga" value="{{ $transaction->jumlah_harga }}"></br>
            </div> 

            <button type="submit" name="edit" class="btn btn-primary float-right">Save Changes</button> 
        </form>
    </div> 
</div> 
@endsection 