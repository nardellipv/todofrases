<?php

namespace App\Http\Controllers\Web;

use App\Category;
use App\Phrase;
use App\Vote;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        //ultima frase
        $lastPhrase = Phrase::orderBy('id', 'DESC')->first();

        //penultima frase
        $randPhrase1 = Phrase::inRandomOrder()->first();
        $randPhrase2 = Phrase::inRandomOrder()->first();

        //listado de frases izquierda
        $lastPhrasesLists1 = Phrase::inRandomOrder()->take(4)->get();

        return view('front.index', compact('categories', 'lastPhrase', 'randPhrase1', 'randPhrase2', 'lastPhrasesLists1'));
    }

    public function category($id)
    {
        $categories = Category::all();
        $category = Category::find($id);

        $phrases = Phrase::where('category_id', $id)
            ->get();

        return view('front.category', compact('category', 'categories', 'phrases'));
    }

    public function like($id)
    {

        Cookie::queue('Phrase', $id, 60);
        $vote = Vote::find($id);

        if(Cookie::get('Phrase') != $id) {
            if ($vote == NULL) {
                $vote = new Vote;
                $vote->vote = 1;
                $vote->phrase_id = $id;
                $vote->save();
            } else {
                $vote->vote += 1;
                $vote->phrase_id = $id;
                $vote->save();
            }
        }else{
            Session::flash('message', 'Ya has votado esta frase');
            return back();
        }

        Session::flash('message', 'Gracias por votar');
        return back();
    }
}
