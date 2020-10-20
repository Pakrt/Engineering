<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('category.index', compact('category'));
    }
    public function create(Request $request)
    {
        $this->validate($request, [
            'kode' => 'unique:categories'
        ]);
        Category::create($request->all());
        return redirect('/category')->with('status', 'Data berhasil ditambahkan');
    }
    public function store(Request $request)
    {
        //
    }
    public function show(Category $category)
    {
        //
    }
    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit', compact('category'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'kode' => 'unique:categories'
        ]);
        $category = Category::find($id);
        $category->update($request->all());
        return redirect('/category')->with('status', 'Data berhasil di update !!');
    }
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/category');
    }
}
