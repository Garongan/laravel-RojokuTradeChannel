<?php

namespace App\Http\Controllers;

use App\Models\BisnisClass;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminBisnisClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     
     */
    public function index()
    {
        //
        $bisnisClass = BisnisClass::latest()->filter(request(['search-bisnis-class']))->paginate(8);
        return view('/admin/bisnis-class/index', 
        [
            "title" => "Bussines Class",
            "bisnisClass" => $bisnisClass,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     
     */
    public function create()
    {
        //
        return view('/admin/bisnis-class/create_bisnis_class', 
        [
            "title" => "Create Bussines Class",
        ]);
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
            'title' => 'required|max:255',
            'author' => 'required',
            'image' => 'image|file|max:1024',
            'desc' => 'required',
            'status' => 'required',
            'modelKelas' => 'required',
            'tglPelaksanaan' => 'required',
            'pemateri' => 'required',
        ]);
        
        if ($request->hasFile('image')) {
            # code...
            $validatedData['image'] = $request->file('image')->store('bisnis-class-images');
        }

        $title = request('title');

        $validatedData['slug'] =  Str::slug($title);
        
        BisnisClass::create($validatedData);
        
        return redirect('/admin/bisnis-class')->with('success', 'New bisnis class has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BisnisClass  $bisnisClass
     
     */
    public function show(BisnisClass $bisnisClass)
    {
        //
        return view('/admin/bisnis-class/show', [
            "title" => "Bisnis Kelas " . $bisnisClass->author . " Detail",
            'bisnisClass' => $bisnisClass
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BisnisClass  $bisnisClass
     
     */
    public function edit(BisnisClass $bisnisClass)
    {
        //
        return view('/admin/bisnis-class/update_bisnis_class',
        [
            "title" => "Update Bisnis Class",
            "bisnisClass" => $bisnisClass,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BisnisClass  $bisnisClass
     
     */
    public function update(Request $request, BisnisClass $bisnisClass)
    {
        //
        $rules = [
            'title' => 'required|max:255',
            'author' => 'required',
            'image' => 'image|file|max:1024',
            'desc' => 'required',
            'status' => 'required',
            'modelKelas' => 'required',
            'tglPelaksanaan' => 'required',
            'pemateri' => 'required',
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

        
        BisnisClass::where('id', $bisnisClass->id)
                ->update($validatedData);

        return redirect('/admin/bisnis-class')->with('success', request('title') . " has been updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BisnisClass  $bisnisClass
     
     */
    public function destroy(BisnisClass $bisnisClass)
    {
        //
        if ($bisnisClass->image) {
            # code...
            Storage::delete($bisnisClass->image);
        }

        BisnisClass::destroy($bisnisClass->id);
        return redirect('/admin/bisnis-class')->with('success', " $bisnisClass->title has been deleted!");
    }
}
