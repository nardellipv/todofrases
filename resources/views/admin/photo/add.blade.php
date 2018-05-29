@extends('layouts.main_admin')

@section('content')
    @foreach($errors->all() as $error)
        <p class="alert alert-danger">{{ $error }}</p>
    @endforeach
    @if (Session::has('message'))
        <p class="alert alert-danger">{!! Session::get('message') !!}</p>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Agregar Imágen
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        {!! Form::open(['method' => 'POST','route' => ['photo.store'],'style'=>'display:inline','enctype' => 'multipart/form-data']) !!}
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputFile">Seleccionar Archivo</label>
                                <input type="file" name="photo" id="exampleInputFile" accept="image/jpg" required>
                                <p class="help-block">Imágenes permitidas jpg, img, png.</p>
                            </div>
                            <button type="submit" class="btn btn-info">Subir</button>
                        {!! Form::Close() !!}
                    </div>

                </div>
            </section>

        </div>

    </div>
@endsection