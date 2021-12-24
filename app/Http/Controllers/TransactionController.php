<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has("cari")){
            $transactions = Transaction::where('user_id','LIKE','%'.$request->cari.'%')->get();
        } else {
            $transactions = Transaction::all(); 
        } 
        return view('transactions.index',['transaction' => $transactions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transactions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //add data 
        Transaction::create($request->all()); 
 
        // if true, redirect to index 
        return redirect()   ->route('transactions.index')
                            ->with('success', 'Add data success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transactions = Transaction::find($id); 
        return view('transactions.show', ['transaction' => $transactions]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transactions = Transaction::find($id); 
        return view('transactions.edit', ['transaction' => $transactions]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $transaction = Transaction::find($id); 
        $transaction ->user_id      = $request->user_id;
        $transaction ->tanggal      = $request->tanggal;
        $transaction ->status       = $request->email;
        $transaction ->kode         = $request->password;
        $transaction ->jumlah_harga = $request->jumlah_harga; 
        $transaction ->save(); 
        return redirect()->route('transactions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaction = Transaction::find($id); 
        $transaction->delete(); 
        return redirect()->route('transactions.index'); 
    }

    public function detail($id){
        $transaction = Transaction::find($id);
        return view('transactions.detail', ['transaction' => $transaction]);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
