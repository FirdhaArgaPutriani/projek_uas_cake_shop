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
                    <li class="breadcrumb-item"><a href="{{ url('users') }}">User Data</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
        </div>

        <form action="/user/{{$user->id}}" method="post"> 
            {{csrf_field()}} 
            @method('PUT') 
            <input type="hidden" name="id" value="{{$user->id}}"></br> 
            <div class="form-group"> 
                <label for="username">Username</label> 
                <input type="text" class="form-control" required="required" name="username" value="{{ $user->username }}"></br> 
            </div> 
    
            <div class="form-group"> 
                <label for="name">Name</label> 
                <input type="text" class="form-control" required="required" name="name" value="{{ $user->name }}"></br> 
            </div> 
    
            <div class="form-group"> 
                <label for="email">E-mail</label> 
                <input type="text" class="form-control" required="required" name="email" value="{{ $user->email }}"></br> 
            </div> 

            <div class="form-group"> 
                <label for="alamat">Alamat</label> 
                <input type="text" class="form-control" required="required" name="alamat" value="{{ $user->alamat }}"></br>
            </div> 

            <div class="form-group"> 
                <label for="phone">Phone</label> 
                <input type="text" class="form-control" required="required" name="phone" value="{{ $user->phone }}"></br>
            </div> 
                        
            <div class="form-group"> 
                <label for="password">Password</label> 
                <input type="text" class="form-control" required="required" name="password" value="{{ $user->password }}"></br>
            </div> 

            <button type="submit" name="edit" class="btn btn-primary float-right">Save Changes</button> 
        </form>
    </div> 
</div> 
@endsection 