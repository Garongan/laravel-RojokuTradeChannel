<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;
use App\Models\Kategori;
use Illuminate\Support\Str;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        //
        if (request('kategori') != 0) {
            # code...
            $produk = Produk::latest()->filter(request(['search-produk', 'kategori']))->paginate(9);
        }
        if (request('orderPrice') == 'lowToHigh') {
            # code...
            $produk = $produk = Produk::orderBy('harga', 'asc')->filter(request(['search-produk', 'kategori']))->paginate(9);
        } else {
            $produk = Produk::latest()->filter(request(['search-produk', 'kategori']))->paginate(9);
        }
        return view('/user/produk/product', 
        [
            "title" => "Produk",
            "produk" => $produk,
            "detail" => "List All ",
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProdukRequest  $request
     */
    public function store(StoreProdukRequest $request)
    {
        //
       
    }
    /**
     * Display the specified resource.
     *
     */
    public function show(Produk $produk)
    {
        //
        return view(
            'user/produk/single_product',
            [
                "title" => 'Detail',
                "detail" => Str::headline($produk->name)." ",
                "produk" => $produk,
                'related' => Produk::latest()->limit(4)->get(),
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     */
    public function edit(Produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProdukRequest  $request
     * @param  \App\Models\Produk  $produk
     */
    public function update(UpdateProdukRequest $request, Produk $produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     */
    public function destroy(Produk $produk)
    {
        //
    }

}
