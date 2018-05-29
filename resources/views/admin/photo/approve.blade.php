@extends('layouts.main_admin')
@section('style')
    <link href="{{ asset('backStyle/css/style.css') }}" rel='stylesheet' type='text/css'/>
    <link href="{{ asset('backStyle/css/style-responsive.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('backStyle/css/lightbox.css') }}">
@endsection
@section('content')
    @if (Session::has('message'))
        <p class="alert alert-danger">{!! Session::get('message') !!}</p>
    @endif
    <div class="panel-body">
        <a href="{{ url('listPhoto') }}" data-toggle="modal" class="btn btn-success disabled" disabled>
            Listado de imágenes Aprobadas
        </a>
        <a href="{{ url('photoPending') }}" data-toggle="modal" class="btn btn-warning">
            Listado de imágenes Pendientes a Aprobar
        </a>
        <a href="{{ url('photoReject') }}" data-toggle="modal" class="btn btn-danger">
            Listado de imágenes Rechazadas
        </a>
    </div>
    <div class="gallery">
        <h2 class="w3ls_head">Imágenes Aprobadas</h2>
        <div class="gallery-grids">

            @foreach($photosApprove as $photo)
                <div class="gallery-top-grids">
                    <div class="col-sm-4 gallery-grids-left">
                        <div class="gallery-grid">
                            <a class="example-image-link" href="../storage/app/{{ $photo->image }}"
                               data-lightbox="example-set" data-title="{{ $photo->name }}">
                                <img src="../storage/app/{{ $photo->image }}" alt="{{ $photo->name }}"/>
                                @if(Auth::user()->type == 'ADMIN')
                                    <div class="captn">
                                        <a href="{{ url('rejectPhoto', $photo->id) }}" class="btn btn-danger">
                                            Rechazar Imágen
                                        </a>
                                    </div>
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="clearfix"></div>
            <script src="{{ asset('backStyle/js/lightbox-plus-jquery.min.js') }}"></script>

        </div>
    </div>
@endsection