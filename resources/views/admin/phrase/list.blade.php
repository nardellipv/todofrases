@extends('layouts.main_admin')

@section('content')
    @if (Session::has('message'))
        <p class="alert alert-danger">{!! Session::get('message') !!}</p>
    @endif
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Frases
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Autor</th>
                        <th>Categoría</th>
                        <th>Usuario</th>
                        <th style="width:30px;">Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($phrases as $phrase)
                        <tr>
                            <td>{{ $phrase->text }}</td>
                            <td>{{ $phrase->author }}</td>
                            <td>{{ $phrase->category->category }}</td>
                            <td>{{ $phrase->user_id }}</td>
                            <td>
                                <a href="{{ url('phrase', $phrase->id) }}" type="submit" class="btn btn-link"><i
                                            class="fa fa-check text-success text-active"></i></a>
                                {!! Form::open(['method' => 'DELETE','route' => ['category.destroy', $phrase->id],'style'=>'display:inline']) !!}
                                {{Form::token() }}
                                <button type="submit" class="btn btn-link" >
                                    <i class="fa fa-times text-danger text"></i></button>
                                {!! Form::Close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <footer class="panel-footer">
                <div class="row">
                    <div class="col-sm-7 text-right text-center-xs">
                        {!! $phrases->render() !!}
                    </div>
                </div>
            </footer>
        </div>
    </div>

@endsection