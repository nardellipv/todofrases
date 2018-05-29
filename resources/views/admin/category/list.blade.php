@extends('layouts.main_admin')

@section('content')
    @if (Session::has('message'))
        <p class="alert alert-danger">{!! Session::get('message') !!}</p>
    @endif
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Cateogrías
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Creada</th>
                        <th style="width:30px;">Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->category }}</td>
                            <td>{{ $category->created_at }}</td>
                            @if(Auth::user()->type == 'ADMIN')
                                <td>
                                    <a href="{{ url('category', $category->id) }}" type="submit" class="btn btn-link"><i
                                                class="fa fa-check text-success text-active"></i></a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['category.destroy', $category->id],'style'=>'display:inline']) !!}
                                    {{Form::token() }}
                                    <button type="submit" class="btn btn-link">
                                        <i class="fa fa-times text-danger text"></i></button>
                                    {!! Form::Close() !!}
                                </td>
                            @else
                                <td>
                                    <button type="submit" class="btn btn-link disabled"><i
                                                class="fa fa-check text-success text-active"></i></button>
                                    <button type="submit" class="btn btn-link disabled">
                                        <i class="fa fa-times text-danger text"></i></button>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <footer class="panel-footer">
                <div class="row">
                    <div class="col-sm-7 text-right text-center-xs">
                        {!! $categories->render() !!}
                    </div>
                </div>
            </footer>
        </div>
    </div>

@endsection