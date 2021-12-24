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
                    <li class="breadcrumb-item"><a href="{{ url('transactions') }}">Transaksi Data</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $transaction->name }}</li>
                </ol>
            </nav>
        </div>

        <form action="/transaction/{{$transaction->id}}" method="post"> 
            {{csrf_field()}} 
            @method('PUT') 
            <table>
                <tr><th>User ID</th><th>:</th><td>{{ $transaction->user_id }}</td></tr>
                <tr><th>Tanggal</th><th>:</th><td>{{ $transaction->tanggal }}</td></tr>
                <tr><th>Status</th><th>:</th><td>{{ $transaction->status }}</td></tr>
                <tr><th>Kode</th><th>:</th><td>{{ $transaction->kode }}</td></tr>
                <tr><th>Jumlah Harga</th><th>:</th><td>{{ $transaction->jumlah_harga }}</td></tr>
                <tr><th>Created At</th><th>:</th><td>{{ $transaction->created_at }}</td></tr>
            </table>
        </form>
    </div>
</div>
@endsection 