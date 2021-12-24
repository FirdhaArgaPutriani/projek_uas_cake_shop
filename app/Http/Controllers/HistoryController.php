<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Cake;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Alert;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$transactions = Transaction::where('user_id', Auth::user()->id)->where('status', '!=',0)->get();

    	return view('history.index', compact('transactions'));
    }

    public function delete($id)
    {
        $transaction_detail = TransactionDetail::where('id', $id)->first();

        $transaction = Transaction::where('id', $transaction_detail->transaction_id)->first();
        $transaction->jumlah_harga = $transaction->jumlah_harga-$transaction_detail->jumlah_harga;
        $transaction->update();


        $transaction_detail->delete();

        return redirect('check-out');
    }

    public function detail($id)
    {
    	$transaction = Transaction::where('id', $id)->first();
    	$transaction_details = TransactionDetail::where('transaction_id', $transaction->id)->get();

     	return view('history.detail', compact('transaction','transaction_details'));
    }
}
