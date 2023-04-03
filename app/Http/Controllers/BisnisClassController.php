<?php

namespace App\Http\Controllers;

use App\Models\BisnisClass;
use Illuminate\Support\Str;
use App\Http\Requests\StoreBisnisClassRequest;
use App\Http\Requests\UpdateBisnisClassRequest;

class BisnisClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     
     */
    public function index()
    {
        //
        return view('/user/bisnis-class/bisnis-class', 
        [
            "title" => "Informasi Bisnis Kelas",
            "bisnisClass" => BisnisClass::latest()->filter(request(['search-bisnis-class']))->paginate(9),
            "detail" => "List All ",
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBisnisClassRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBisnisClassRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BisnisClass  $bisnisClass
     */
    public function show(BisnisClass $bisnisClass)
    {
        //
        return view(
            'user/bisnis-class/single_bisnis_class',
            [
                "title" => "Detail",
                "bisnisClass" => $bisnisClass,
                "detail" => "Informasi Bisnis Kelas ",
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BisnisClass  $bisnisClass
     * @return \Illuminate\Http\Response
     */
    public function edit(BisnisClass $bisnisClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBisnisClassRequest  $request
     * @param  \App\Models\BisnisClass  $bisnisClass
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBisnisClassRequest $request, BisnisClass $bisnisClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BisnisClass  $bisnisClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(BisnisClass $bisnisClass)
    {
        //
    }
}
