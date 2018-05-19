<?php

namespace App\Http\Controllers\Web;

use App\Category;
use App\Phrase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function category($id)
    {
        $categories = Category::all();
        $category = Category::find($id);

        $phrases = Phrase::where('category_id', $id)
            ->orderBy('id','DESC')
            ->get();

        return view('front.category', compact('category', 'categories', 'phrases'));
    }

}
