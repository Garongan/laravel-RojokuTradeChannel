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
        if (request('kategori') == 0) {
            # code...
            $produk = Produk::latest()->filter(request(['search-produk']))->paginate(8);
        } else {
            $produk = Produk::latest()->filter(request(['search-produk', 'kategori']))->paginate(8);
        }
        return view('/admin/produk/index', 
        [
            "title" => "Produk",
            "produk" => $produk,
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
            'name' => 'required|max:64',
            'brand' => 'required|max:100',
            'harga' => 'required|max:9',
            'kategori_id' => 'required',
            'img_name1' => 'image|file|max:1024',
            'img_name2' => 'image|file|max:1024',
            'img_name3' => 'image|file|max:1024',
            'img_name4' => 'image|file|max:1024',
            'desc' => 'required',
            'spec' => 'required'
        ]);
        
        if ($request->hasFile('img_name1')) {
            # code...
            $validatedData['img_name1'] = $request->file('img_name1')->store('produk-images');
        }
        if ($request->hasFile('img_name2')) {
            # code...
            $validatedData['img_name2'] = $request->file('img_name2')->store('produk-images');
        }
        if ($request->hasFile('img_name3')) {
            # code...
            $validatedData['img_name3'] = $request->file('img_name3')->store('produk-images');
        }
        if ($request->hasFile('img_name4')) {
            # code...
            $validatedData['img_name4'] = $request->file('img_name4')->store('produk-images');
        }
        
        Produk::create($validatedData);
        
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
     */
    public function edit(Produk $produk)
    {
        //
        return view('/admin/produk/update_produk',
        [
            "title" => "Update Produk",
            "produk" => $produk,
            "kategori" => Kategori::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     */
    public function update(Request $request, Produk $produk)
    {
        //
        $rules = [
            'name' => 'required|max:64',
            'brand' => 'required|max:100',
            'harga' => 'required|max:9',
            'kategori_id' => 'required',
            'img_name1' => 'image|file|max:1024',
            'img_name2' => 'image|file|max:1024',
            'img_name3' => 'image|file|max:1024',
            'img_name4' => 'image|file|max:1024',
            'desc' => 'required',
            'spec' => 'required'
        ];

        $validatedData = $request->validate($rules);

        
        if ($request->file('img_name1')) {
            # code...
            if ($request->oldImage1) {
                # code...
                Storage::delete($request->oldImage1);
            }
            $validatedData['img_name1'] = $request->file('img_name1')->store('produk-images');
        }
        if ($request->hasFile('img_name2')) {
            # code...
            if ($request->oldImage2) {
                # code...
                Storage::delete($request->oldImage2);
            }
            $validatedData['img_name2'] = $request->file('img_name2')->store('produk-images');
        }
        if ($request->hasFile('img_name3')) {
            # code...
            if ($request->oldImage3) {
                # code...
                Storage::delete($request->oldImage3);
            }
            $validatedData['img_name3'] = $request->file('img_name3')->store('produk-images');
        }
        if ($request->hasFile('img_name4')) {
            # code...
            if ($request->oldImage4) {
                # code...
                Storage::delete($request->oldImage4);
            }
            $validatedData['img_name4'] = $request->file('img_name4')->store('produk-images');
        }

        
        Produk::where('id', $produk->id)
                ->update($validatedData);

        return redirect('/admin/produk')->with('success', "$produk->name has been updated!");
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
        if ($produk->img_name1) {
            # code...
            Storage::delete($produk->img_name1);
        }
        if ($produk->img_name2) {
            # code...
            Storage::delete($produk->img_name2);
        }
        if ($produk->img_name3) {
            # code...
            Storage::delete($produk->img_name3);
        }
        if ($produk->img_name4) {
            # code...
            Storage::delete($produk->img_name4);
        }
        Produk::destroy($produk->id);
        return redirect('/admin/produk')->with('success', "Product $produk->name has been deleted!");
    }
}
