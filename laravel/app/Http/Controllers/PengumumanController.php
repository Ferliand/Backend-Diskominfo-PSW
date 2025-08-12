<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\StorePengumumanRequest;
use App\Http\Requests\UpdatePengumumanRequest;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Pengumuman';
        $Pengumuman = Pengumuman::all();
        return view('Pengumuman.index', compact(['Pengumuman', 'title']));
    }
    // public function index()
    // {
    //     $Pengumuman = Pengumuman::all();
    //     return response()->json($Pengumuman);
    // }


    public function create()
    {
        $title = 'Pengumuman';
        return view('Pengumuman.create', compact(['title']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'string|required|max:255',
            'content' => 'string|required',
            'category' => 'string|required',
            'posisi' => 'string|required',
            'jumlah' => 'numeric|required',
        ]);

        $Pengumuman = Pengumuman::create([
            'title' => $request->title,
            'content' => $request->content,
            'posisi' => $request->posisi,
            'jumlah' => $request->jumlah,
            'category' => $request->category,
        ]);

        return redirect()->route('Pengumuman.index')
            ->with('success', 'Pengumuman berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $title = 'Perbarui Baru';
        $Pengumumanlist = Pengumuman::find($id);
        return view('Pengumuman.show', compact(['title', 'Pengumumanlist']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengumuman $Pengumuman)
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

        $Pengumumanlist = Pengumuman::where('id', $id)->first();
        // dd($Pengumumanlist);
        $Pengumumanlist->fill($request->all());
        $Pengumumanlist->save();

        return redirect()->route('Pengumuman.index')
            ->with('success', 'Berita berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Pengumumanlist = Pengumuman::find($id);
        $Pengumumanlist->delete();

        return redirect()->route('Pengumuman.index')
            ->with('success', 'Berita berhasil dihapus.');
    }
}
