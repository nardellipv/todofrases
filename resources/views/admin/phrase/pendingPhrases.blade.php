@extends('layouts.main_admin')

@section('content')
    @if (Session::has('message'))
        <p class="alert alert-danger">{!! Session::get('message') !!}</p>
    @endif
    <div class="panel-body">
        <a href="{{ url('listphrases') }}" data-toggle="modal" class="btn btn-success">
            Listado de frases Aprobadas
        </a>
        <a href="{{ url('pending') }}" data-toggle="modal" class="btn btn-warning disabled" disabled>
            Listado de frases Pendientes a Aprobar
        </a>
        <a href="{{ url('reject') }}" data-toggle="modal" class="btn btn-danger">
            Listado de frases Rechazadas
        </a>
    </div>
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Frases Pendientes
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
                            <td>{{ $phrase->User->name }}</td>
                            @if(Auth::user()->type == 'ADMIN')
                                <td>
                                    <a href="{{ url('approvePhrase', $phrase->id) }}" type="submit" class="btn btn-link"><i
                                                class="fa fa-check text-pencil text-active"></i></a>
                                    <a href="{{ url('rejectPhrase', $phrase->id) }}" type="submit" class="btn btn-link"><i
                                                class="fa fa-times text-pencil text-active"></i></a>

                                </td>
                            @else
                                <td>
                                    <button type="submit" class="btn btn-link disabled"><i
                                                class="fa fa-check text-pencil text-active"></i></button>
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
                        {!! $phrases->render() !!}
                    </div>
                </div>
            </footer>
        </div>
    </div>

@endsection