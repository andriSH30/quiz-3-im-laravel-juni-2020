<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Artikel;
use \App\Tag;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $artikel = Artikel::orderBy('id','desc')->get();
        return view('artikel',compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buatArtikel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slug = strtolower(str_replace(" ","-",$request->judul));
        //
        $artikel = new Artikel;
        $artikel->judul = $request->judul;
        $artikel->isi = $request->isi;
        $artikel->slug = $slug;
        $artikel->save();

        return redirect('/artikel')->with('pesan','Berhasil Menambahkan Artikel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $artikel = Artikel::find($id);
        return view('detailArtikel',compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $artikel = Artikel::find($id);
        return view('editArtikel',compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $artikel = Artikel::find($id);
        $artikel->judul = $request->judul;
        $artikel->isi = $request->isi;
        $artikel->save();

        // echo $request->tag;

        return redirect('/artikel')->with('pesanUpdate','Berhasil Memperbarui Artikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $artikel = Artikel::find($id);
        $artikel->delete();

        return redirect('/artikel')->with('pesanHapus','Berhasil Menghapus Artikel');
    }

}
