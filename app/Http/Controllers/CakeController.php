<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cake;

class CakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has("cari")){
            $cakes = Cake::where('nama','LIKE','%'.$request->cari.'%')->get();
        } else {
            $cakes = Cake::all(); 
        } 
        return view('cakes.index',['cake' => $cakes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cakes.create');
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
        Cake::create($request->all()); 
 
        // if true, redirect to index 
        return redirect()   ->route('cakes.index')
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
        $cakes = Cake::find($id); 
        return view('cakes.show', ['cake' => $cakes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cakes = Cake::find($id); 
        return view('cakes.edit', ['cake' => $cakes]);
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
        $cake = Cake::find($id); 
        $cake ->nama        = $request -> nama;
        $cake ->harga       = $request -> harga;
        $cake ->stok        = $request -> stok;
        $cake ->photo       = $request -> photo;
        $cake ->keteranga   = $request -> keteranga; 
        $cake ->save(); 
        return redirect()->route('cakes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cake = Cake::find($id); 
        $cake->delete(); 
        return redirect()->route('cakes.index'); 
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
