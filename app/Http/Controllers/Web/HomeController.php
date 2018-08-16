<?php

namespace App\Http\Controllers\Web;

use App\Category;
use App\Photo;
use App\Phrase;
use App\Vote;
use Share;
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
        $lastPhrase = Phrase::where('status', 'APPROVED')
            ->orderBy('id', 'DESC')
            ->first();

        //penultima frase
        $randPhrase1 = Phrase::where('status', 'APPROVED')
            ->inRandomOrder()
            ->first();
        $randPhrase2 = Phrase::where('status', 'APPROVED')
            ->inRandomOrder()
            ->first();

        //listado de frases izquierda
        $lastPhrasesLists1 = Phrase::where('status', 'APPROVED')
            ->inRandomOrder()
            ->take(4)
            ->get();

        //ranking frases
        $rankings = Vote::orderBY('Vote', 'DESC')
            ->take(5)
            ->get();

        $photos = Photo::where('status', 'APPROVED')
            ->orderBy('id', 'DESC')
            ->get();

        return view('front.index', compact('categories', 'lastPhrase', 'randPhrase1', 'randPhrase2',
            'lastPhrasesLists1', 'rankings', 'photos'));
    }

    public function like($id)
    {

        Cookie::queue('Phrase', $id, 60);
        $vote = Vote::find($id);

        if (Cookie::get('Phrase') != $id) {
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
        } else {
            Session::flash('message', 'Ya has votado esta frase');
            return back();
        }

        Session::flash('message', 'Gracias por votar');
        return back();
    }
}
