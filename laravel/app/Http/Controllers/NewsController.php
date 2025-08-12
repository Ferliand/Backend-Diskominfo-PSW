<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateNewsRequest;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Daftar Berita';
        $news = News::all();
        return view('News.index', compact(['news', 'title']));
    }
    // public function index()
    // {
    //     $news = News::all();
    //     return response()->json($news);
    // }


    public function create()
    {
        $title = 'Buat Berita Baru';
        return view('News.create', compact(['title']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $title = 'Daftar Berita';
        $news = News::all();

        $request->validate([
            'title' => 'string|required|unique:news|max:255',
            'content' => 'string|required',
            'category' => 'string|required'
        ]);

        $news = News::create([
            'title' => $request->title,
            'content' => $request->content,
            'category' => $request->category,
        ]);

        return redirect()->route('News.index')
            ->with('success', 'Berita berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $title = 'Perbarui Baru';
        $newslist = News::find($id);
        return view('News.show', compact(['title', 'newslist']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'string|required|max:255',
            'content' => 'string|required',
            'category' => 'string|required'
        ]);

        $newslist = News::where('id', $id)->first();
        // dd($newslist);
        $newslist->fill($request->all());
        $newslist->save();

        return redirect()->route('News.index')
            ->with('success', 'Berita berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $newslist = News::find($id);
        $newslist->delete();

        return redirect()->route('News.index')
            ->with('success', 'Berita berhasil dihapus.');
    }
}
