<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();

        return view('category.index', compact('category'));
    }

    public function store(Request $request)
    {
        //dd($request->all());

        $category = new category;
        $category->kode = $request->kode;
        $category->nama = $request->nama;

        $category->save();

        return redirect('category')->with('sukses','Data berhasil disimpa');
    }
    
    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit ', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->kode = $request->kode;
        $category->nama = $request->nama;
        $category->update();

        
        return redirect('category');

    }

    public function destroy($id)
    {
    
    $category = Category::find($id);
    $category->delete();

    return redirect('category')->with('sukses','Data berhasil dihapus');


    }



}
