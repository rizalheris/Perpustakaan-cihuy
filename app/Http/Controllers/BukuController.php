<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Category;
use App\Models\Penerbit;
use App\Models\Anggota;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    
    public function index()
    {
        $buku = Buku::all();

        return view('buku.index', compact('buku'));
    }


    public function create()
    {
        
        $category = Category::all();
        $penerbit = Penerbit::all();
        return view('buku.create',  compact('category','penerbit'));
        
    }

   
    public function store(Request $request)
    {
        $image = $request->file('gambar');
        $image->storeAs('public/buku', $image->hashName());
        Buku::create([
        'kode' => $request->kode,
        'judul' => $request->judul,
        'category_id' => $request->category_id,
        'penerbit_id' => $request->penerbit_id,
        'isbn' => $request->isbn,
        'pengarang' => $request->pengarang,
        'jumlah_halaman' => $request->jumlah_halaman,
        'stok' => $request->stok,
        'tahun_terbit' => $request->tahun_terbit,
        'sinopsis' => $request->sinopsis,
        'gambar' => $image->hashName(),
       ]);
       
       return redirect('buku')->with('sukses', 'Data berhasil disimpan');
    }

   
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $buku = buku::find($id);
        $category = Category::all();
        $penerbit = Penerbit::all();
      

        return view('buku.edit', compact('buku','penerbit','category'));
    }

    
    public function update(Request $request, Buku $buku)
    {
        //
    }

    public function destroy($id)
    {
        $buku = Buku::find($id);
        $buku->delete();
    
        return redirect('buku')->with('sukses','Data berhasil dihapus');
    
    }
    
}