@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('home') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Check Out</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3><i class="fa fa-shopping-cart"></i> Check Out</h3>
                    @if(!empty($transaction))
                    <p align="right">Tanggal Pesan : {{ $transaction -> tanggal }}</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama Kue</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($transaction_details as $transaction_detail)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <img src="{{ url('uploads') }}/{{ $transaction_detail->cake->photo }}" width="100" alt="...">
                                </td>
                                <td>{{ $transaction_detail-> cake -> nama }}</td>
                                <td>{{ $transaction_detail-> jumlah }} buah</td>
                                <td align="right">Rp. {{ number_format($transaction_detail -> cake -> harga) }}</td>
                                <td align="right">Rp. {{ number_format($transaction_detail -> jumlah_harga) }}</td>
                                <td>
                                    <form action="{{ url('check-out') }}/{{ $transaction_detail->id }}" method="post">
                                        @csrf 
                                        @method('DELETE') 
                                        <button type="submit" name="delete" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');">
                                            <i class="fa fa-trash"></i>
                                            Delete
                                        </button> 
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="5" align="right"><strong>Total Harga :</strong></td>
                                <td align="right"><strong>Rp. {{ number_format($transaction->jumlah_harga) }}</strong></td>
                                <td>
                                    <a href="{{ url('konfirmasi-check-out') }}" class="btn btn-success" onclick="return confirm('Anda yakin akan Check Out ?');">
                                        <i class="fa fa-shopping-cart"></i> Check Out
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection