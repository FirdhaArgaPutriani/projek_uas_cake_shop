@extends('layouts.app')

@section('content')
    <img src="{{ url('images/logo.png') }}" width="250" class="rounded mx-auto d-block"><br>
    <h2 align="center">Contact Us Ossena Cake's</h2>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>
            </div>
        
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table align="center">
                            <tr>
                                <td><img src="{{ url('images/lc.png') }}" width="50"></td>
                                <td>&nbsp; : &nbsp;</td>
                                <td>&nbsp;&nbsp;Borobudur 17, Malang</td>
                            </tr>
                            <tr>
                                <td><img src="{{ url('images/phone.png') }}" width="50"></td>
                                <td>&nbsp; : &nbsp;</td>
                                <td>&nbsp;&nbsp;085806259859</td>
                            </tr>
                            <tr>
                                <td><img src="{{ url('images/ig.png') }}" width="50"></td>
                                <td>&nbsp; : &nbsp;</td>
                                <td>&nbsp;&nbsp;@ossena_cakes</td>
                            </tr>
                            <tr>
                                <td><img src="{{ url('images/fb.png') }}" width="50"></td>
                                <td>&nbsp; : &nbsp;</td>
                                <td>&nbsp;&nbsp;ossena_cakes</td>
                            </tr>
                            <tr>
                                <td><img src="{{ url('images/tw.png') }}" width="50"></td>
                                <td>&nbsp; : &nbsp;</td>
                                <td>&nbsp;&nbsp;@ossena_cakes</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection