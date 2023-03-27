<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     
     */
    public function index()
    {
        //
        return view('/admin/produk/index', 
        [
            "title" => "Produk",
            "produk" => Produk::all(),
            "kategori" => Kategori::all()
        ]
    );

    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        //
        return view('/admin/produk/create_produk', 
        [
            "title" => "Create Produk",
            "kategori" => Kategori::all()
        ]
    );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'brand' => 'required|max:100',
            'harga' => 'required|max:255',
            'kategori_id' => 'required',
            'desc' => 'required',
            'spec' => 'required'
        ]);

        
        // $id = uniqid("ROJ-");
        // $validatedData['id'] = $id;
        // $extension = $request->fileInput1->extension();
        // if ($request->file('fileInput1')->isValid() && ($extension === '.jpg')) {
        //     // ...
        //     $path = $request->fileInput1->storeAs('images', $id.'-1.jpg', 's3');
        //     $validatedData['img_name'] = $path;
        // }
        $validatedData['img_name'] = 's1';
        
        Produk::create($validatedData);
        // Storage::disk('local')->put($path, 'images');

        return redirect('/admin/produk')->with('success', 'New product has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     */
    public function show(Produk $produk)
    {
        //
        return view('/admin/produk/show', [
            "title" => "Produk Detail",
            'produk' => $produk
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        //
    }
}
