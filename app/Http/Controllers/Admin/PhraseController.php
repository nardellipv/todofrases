<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Phrase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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
        $phrases = Phrase::orderBy('id', 'DESC')
            ->where('status', 'APPROVED')
            ->paginate(10);

        $categories = Category::all();

        return view('admin.phrase.list', compact('phrases', 'categories'));
    }

    public function store(Request $request)
    {

        if (Auth::user()->type == 'USER') {
            $phrase = new Phrase();
            $phrase->user_id = Auth::user()->id;
            $phrase->status = 'PENDING';
            $phrase->fill($request->all())->save();

            Mail::send('admin.email.pending', $request->all(), function ($msj) {
                $msj->from(Auth::user()->email, Auth::user()->name);
                $msj->subject('Frases Pendiente Agregada');
                $msj->to('info@todofrases.live');
            });

            Session::flash('message', 'Su frase quedo en estado pendiente, un administrador la verá para poder aprobarla. 
                Muchas gracias por participar en TodoFrases');
        } else {

            $phrase = new Phrase();
            $phrase->user_id = Auth::user()->id;
            $phrase->status = 'APPROVED';
            $phrase->fill($request->all())->save();

            Session::flash('message', 'Frase guardada');
        }

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
        $phrase->status = 'APPROVED';
        $phrase->fill($request->all())->save();

        Session::flash('message', 'Frase editada correctamente');
        return back();
    }

    public function destroy($id)
    {
        $phrase = Phrase::find($id);
        $phrase->delete();

        Session::flash('message', 'Frase ' . $phrase->text . ' eliminada correctamente');
        return back();
    }

    public function pending()
    {
        $phrases = Phrase::orderBy('id', 'DESC')
            ->where('status', 'PENDING')
            ->paginate(10);

        $categories = Category::all();

        return view('admin.phrase.pendingPhrases', compact('phrases', 'categories'));

    }

    public function reject()
    {
        $phrases = Phrase::orderBy('id', 'DESC')
            ->where('status', 'REJECTED')
            ->paginate(10);

        $categories = Category::all();

        return view('admin.phrase.rejectPhrases', compact('phrases', 'categories'));

    }

    public function approvePhrase($id)
    {
        $phrase = Phrase::find($id);

        $phrase->status = 'APPROVED';
        $phrase->save();

        Mail::send('admin.email.approve', ['phrase' =>$phrase],function ($msj) use($phrase) {
            $msj->from('info@todofrases.live', 'Administrador');
            $msj->subject('Frases Aprobada');
            $msj->to($phrase->user->email);
        });

        Session::flash('message', 'Frase aprobada correctamente');
        return back();
    }

    public function rejectPhrase($id)
    {
        $phrase = Phrase::find($id);
        $phrase->status = 'REJECTED';
        $phrase->save();

        Session::flash('message', 'Frase rechazada correctamente');
        return back();
    }
}
