<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     
     */
    public function index()
    {
        //
        $news = News::latest()->filter(request(['search-news']))->paginate(8);
        return view('/admin/news/index', 
        [
            "title" => "News",
            "news" => $news,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        //
        return view('/admin/news/create_news', 
        [
            "title" => "Create News",
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
            'role' => 'required',
            'image' => 'image|file|max:1024',
            'desc' => 'required',
        ]);
        
        if ($request->hasFile('image')) {
            # code...
            $validatedData['image'] = $request->file('image')->store('news-images');
        }

        $title = request('title');

        $validatedData['slug'] =  Str::slug($title);
        
        News::create($validatedData);
        
        return redirect('/admin/news')->with('success', 'New news has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     */
    public function show(News $news)
    {
        //
        return view('/admin/news/show', [
            "title" => $news->role . " Detail",
            'news' => $news
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     
     */
    public function edit(News $news)
    {
        //
        return view('/admin/news/update_news',
        [
            "title" => "Update News",
            "news" => $news,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     
     */
    public function update(Request $request, News $news)
    {
        //
        $rules = [
            'title' => 'required|max:255',
            'role' => 'required',
            'image' => 'image|file|max:1024',
            'desc' => 'required',
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

        
        News::where('id', $news->id)
                ->update($validatedData);

        return redirect('/admin/news')->with('success', request('title') . " has been updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     
     */
    public function destroy(News $news)
    {
        //
        if ($news->image) {
            # code...
            Storage::delete($news->image);
        }

        News::destroy($news->id);
        return redirect('/admin/news')->with('success', $news->role . " $news->title has been deleted!");
    }
}
