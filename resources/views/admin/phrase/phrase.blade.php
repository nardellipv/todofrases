@extends('layouts.main_admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            @if (Session::has('message'))
                <p class="alert alert-danger">{!! Session::get('message') !!}</p>
            @endif
            <section class="panel">
                <header class="panel-heading">
                    Agregar frase
                </header>
                <div class="panel-body">
                    {!! Form::open(['method' => 'POST','route' => ['phrase.store'],'class'=>'form-horizontal bucket-form']) !!}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Argegar Frase</label>
                        <div class="col-sm-6">
                            <textarea type="text" name="text" class="form-control" required> </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Argegar Autor</label>
                        <div class="col-sm-6">
                            <input type="text" name="author" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Elegir Categoria</label>
                        <div class="col-sm-6">
                            <select name="category_id" class="form-control m-bot15" required>
                                <option value="">Categorías</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-info">Guardar</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </section>
        </div>
    </div>
@endsection