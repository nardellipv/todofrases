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
                    {!! Form::model($categoryEdit, ['method' => 'PATCH','route' => ['category.update', $categoryEdit->id], 'class'=>'form-horizontal bucket-form']) !!}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Categorías existentes</label>
                        <div class="col-sm-6">
                            <select class="form-control m-bot15">
                                @foreach($categories as $category)
                                    <option>{{ $category->category }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Editar Categoría</label>
                        <div class="col-sm-6">
                            <input type="text" name="category" class="form-control" value="{{ $categoryEdit->category }}">
                        </div>
                        <button type="submit" class="btn btn-info">Editar</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </section>
        </div>
    </div>
@endsection