@extends('layouts.main_admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            @if (Session::has('message'))
                <p class="alert alert-danger">{!! Session::get('message') !!}</p>
            @endif
            <section class="panel">
                <header class="panel-heading">
                    Editar categoría
                </header>
                <div class="panel-body">
                    {!! Form::model($phrase, ['method' => 'PATCH','route' => ['phrase.update', $phrase->id], 'class'=>'form-horizontal bucket-form']) !!}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Editar Categoría</label>
                        <div class="col-sm-6">
                            <select name="category_id" class="form-control m-bot15">
                                <option>{{ $phrase->category->category }}</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Editar frase</label>
                        <div class="col-sm-6">
                            <textarea type="text" name="text" class="form-control">{{ $phrase->text }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Editar Autor</label>
                        <div class="col-sm-6">
                            <input type="text" name="author" class="form-control" value="{{ $phrase->author }}">
                        </div>
                        <button type="submit" class="btn btn-info">Editar</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </section>
        </div>
    </div>
@endsection