<?php

namespace App\Http\Controllers\Web;

use Share;
use App\Phrase;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function category($category)
    {
        $categories = Category::all();
        $categoryFind = Category::where('category',$category)->first();

        $phrases = Phrase::where('category_id', $categoryFind->id)
            ->orderBy('id','DESC')
            ->get();

        return view('front.category', compact('categoryFind', 'categories', 'phrases'));
    }

}
