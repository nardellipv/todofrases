<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Phrase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PhraseController extends Controller
{
    public function index()
    {
        $phrases = Phrase::all();
        $categories = Category::all();

        return view('admin.phrase.phrase', compact('phrases', 'categories'));
    }

    public function listPhrase()
    {
        $phrases = Phrase::paginate(10);

        $categories = Category::all();

        return view('admin.phrase.list', compact('phrases', 'categories'));
    }

    public function store(Request $request)
    {
        $phrase = new Phrase();
        $phrase->user_id = Auth::user()->id;
        $phrase->fill($request->all())->save();

        Session::flash('message', 'Frase guardada');
        return back();
    }

    public function show($id)
    {
        $categories = Category::get();

        $phrase = Phrase::find($id);

        return view('admin.phrase.edit', compact('categories', 'phrase'));
    }

    public function update(Request $request, $id)
    {
        $phrase = Phrase::find($id);
        $phrase->fill($request->all())->save();

        Session::flash('message', 'Frase editada correctamente');
        return back();
    }
}
