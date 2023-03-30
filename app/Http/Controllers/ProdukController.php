<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;
use App\Models\Kategori;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        //
        return view(
            'user/produk/product',
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
        return view(
            'admin/create_produk',
            [
                "title" => "Create Produk",
                "produk" => Produk::all(),
                "kategori" => Kategori::all()
            ]
        );
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
                "produk" => $produk
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
