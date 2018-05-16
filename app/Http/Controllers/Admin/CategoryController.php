<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.category.category', compact('categories'));
    }

    public function store(Request $request)
    {
        $category = new Category;
        $category->fill($request->all())->save();

        Session::flash('message', 'Categoría guardada');
        return back();
    }

    public function show($id)
    {
        $categories = Category::all();

        $categoryEdit = Category::find($id);

        return view('admin.category.edit', compact('categories', 'categoryEdit'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        $category->fill($request->all())->save();

        Session::flash('message', 'Categoría editada correctamente');
        return back();
    }

    public function listCategory()
    {
        $categories = Category::paginate(10);

        return view('admin.category.list', compact('categories'));
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        Session::flash('message', 'Categoría ' . $category->category . ' eliminada correctamente');
        return back();
    }
}
