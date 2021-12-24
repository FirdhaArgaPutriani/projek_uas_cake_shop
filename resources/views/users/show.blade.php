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
                    <li class="breadcrumb-item"><a href="{{ url('users') }}">User Data</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $user->name }}</li>
                </ol>
            </nav>
        </div>

        <form action="/user/{{$user->id}}" method="post"> 
            {{csrf_field()}} 
            @method('PUT') 
            <table>
                <tr><th>Username</th><th>:</th><td>{{ $user->username }}</td></tr>
                <tr><th>Name</th><th>:</th><td>{{ $user->name }}</td></tr>
                <tr><th>E-mail</th><th>:</th><td>{{ $user->email }}</td></tr>
                <tr><th>Alamat</th><th>:</th><td>{{ $user->alamat }}</td></tr>
                <tr><th>Phone</th><th>:</th><td>{{ $user->phone }}</td></tr>
                <tr><th>Created At</th><th>:</th><td>{{ $user->created_at }}</td></tr>
            </table>
        </form>
    </div>
</div>
@endsection 