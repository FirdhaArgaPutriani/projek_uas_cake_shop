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
                    <li class="breadcrumb-item"><a href="{{ url('users') }}">User Data</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </nav>
        </div>

        <form action="/user" method="post"> 
            @csrf 
            <div class="form-group"> 
                <label for="username">Username</label> 
                <input type="text" class="form-control" required="required" name="username"></br> 
            </div> 

            <div class="form-group"> 
                <label for="name">Name</label> 
                <input type="text" class="form-control" required="required" name="name"></br> 
            </div> 

            <div class="form-group"> 
                <label for="email">E-mail</label> 
                <input type="text" class="form-control" required="required" name="email"></br> 
            </div>

            <div class="form-group"> 
                <label for="alamat">Alamat</label> 
                <input type="text" class="form-control" required="required" name="alamat"></br> 
            </div>

            <div class="form-group"> 
                <label for="phone">Phone</label> 
                <input type="text" class="form-control" required="required" name="phone"></br> 
            </div>

            <div class="form-group">
                <label for="password">Password</label> 
                <input password_hash(type=(text)) class="form-control" required="required" name="password"></br> 
            </div>

            <button type="submit" name="add" class="btn btn-primary float-right">Add Data</button> 
        </form> 
    </div> 
</div> 
@endsection 