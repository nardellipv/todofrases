<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PhotoRequest;
use Validator;
use App\Photo;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class PhotoController extends Controller
{
    public function create()
    {
        return view('admin.photo.add');
    }

    public function store(PhotoRequest $request)
    {

        $photo = new Photo;
        $photo->user_id = auth()->user()->id;
        if (Auth::user()->type == 'USER') {
            $photo->status = 'PENDING';
        } else {
            $photo->status = 'APPROVED';
        }
        $photo->name = $request->file('photo')->getClientOriginalName();

        if ($request->hasFile('photo')) {
            //crear link simbolico en cpanel
            //ln -s /home/pablon/mikant/storage /home/pablon/public_html/storage

            $path = $request->file('photo')->store('public/images');
            $photo->image = $path;
        } else {
            Session::flash('message', 'Tiene que seleccionar una imágen.');
            return back();
        }
        $photo->save();

        if (Auth::user()->type == 'USER') {
            Session::flash('message', 'Su frase quedo en estado pendiente, un administrador la verá para poder aprobarla. 
                Muchas gracias por participar en TodoFrases');

            Mail::send('admin.email.photoPending', $request->all(), function ($msj) {
                $msj->from(Auth::user()->email, Auth::user()->name);
                $msj->subject('Frases Pendiente Agregada');
                $msj->to('info@todofrases.live');
            });
        } else {
            Session::flash('message', 'Imagen subida correctamente.');
        }
        return back();
    }

    public function destroy($id)
    {
        $photo = Photo::find($id);
        $photo->delete();

        Session::flash('message', 'Imágen eliminada correctamente');
        return back();
    }

    public function listPhoto()
    {
        $photosApprove = Photo::where('status', 'APPROVED')
            ->orderBy('id', 'DESC')
            ->get();

        return view('admin.photo.approve', compact('photosApprove'));
    }

    public function photoPending()
    {
        $photosPending = Photo::where('status', 'PENDING')
            ->orderBy('id', 'DESC')
            ->get();

        return view('admin.photo.pending', compact('photosPending'));
    }

    public function photoReject()
    {
        $photosRejected = Photo::where('status', 'REJECTED')
            ->orderBy('id', 'DESC')
            ->get();

        return view('admin.photo.reject', compact('photosRejected'));
    }

    public function approvePhoto($id)
    {
        $photosApprove = Photo::find($id);
        $photosApprove->status = 'APPROVED';
        $photosApprove->save();

        Mail::send('admin.email.photoApprove', ['photo' =>$photosApprove],function ($msj) use($photosApprove) {
            $msj->from('info@todofrases.live', 'Administrador');
            $msj->subject('Frases Aprobada');
            $msj->to($photosApprove->user->email);
        });

        Session::flash('message', 'Imagen aprobada correctamente.');
        return back();
    }

    public function rejectPhoto($id)
    {
        $photosAprove = Photo::find($id);
        $photosAprove->status = 'Rejected';
        $photosAprove->save();

        Session::flash('message', 'Imagen rechazada correctamente.');
        return back();
    }
}
