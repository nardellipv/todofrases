<?php

namespace App\Http\Controllers\Web;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function category($id)
    {
        $category = Category::find($id);

        return view('front.category', compact('category'));
    }
}
