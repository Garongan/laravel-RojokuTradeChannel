<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     
     */
    public function index()
    {
        //
        $kategori = Kategori::latest()->filter(request(['search-kategori']))->get();
        return view('/admin/kategori/index', 
        [
            "title" => "Kategori",
            "kategori" => $kategori,
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|max:64',
            'image' => 'image|file|max:1024',
        ]);
        
        if ($request->hasFile('image')) {
            # code...
            $validatedData['image'] = $request->file('image')->store('kategori-images');
        }

        $title = request('name');

        $validatedData['slug'] =  Str::slug($title);
        
        Kategori::create($validatedData);
        
        return redirect('/admin/kategori')->with('success', 'New katgori has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     
     */
    public function edit(Kategori $kategori)
    {
        //
        return view('/admin/kategori/update_kategori',
        [
            "title" => "Update Kategori",
            "kategori" => $kategori,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     
     */
    public function update(Request $request, Kategori $kategori)
    {
        //
        $rules = [
            'name' => 'required|max:64',
            'image' => 'image|file|max:1024',
        ];

        $validatedData = $request->validate($rules);

        
        if ($request->file('image')) {
            # code...
            if ($request->oldImage1) {
                # code...
                Storage::delete($request->oldImage1);
            }
            $validatedData['image'] = $request->file('image')->store('news-images');
        }

        
        Kategori::where('id', $kategori->id)
                ->update($validatedData);

        return redirect('/admin/kategori')->with('success', request('name') . " has been updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     
     */
    public function destroy(Kategori $kategori)
    {
        //
        if ($kategori->image) {
            # code...
            Storage::delete($kategori->image);
        }

        Kategori::destroy($kategori->id);
        return redirect('/admin/kategori')->with('success', " $kategori->name has been deleted!");
    }
}
