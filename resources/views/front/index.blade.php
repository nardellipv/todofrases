@extends('layouts.main_front')

@section('content')
    <div class="col-md-12 cabecera" id="cabecera">
        <h1>Frases para reflexionar y compartir</h1>
    </div>
    <div>
        <div class="container headerContainer">
            <div class="row">
                <div class="col-md-6">
                    <p>Registrate y compatí frases y fotos con lindas frases a tu amigos.</p>
                    <p>Es totalmente <b>gratis</b> y nunca cobraremos nada, solo queremos compartir y hacer una
                        comunidad
                        que escriba frases, suba imágenes y vote las mejores frases para luego compartir con las
                        personas
                        amadas que todos tenemos.</p>
                </div>
                <div class="col-md-6">
                    <p><b>Lee, reflexiona, compartí y vota frases</b> de la vida real, oraciones cortas, sabias y
                        bonitas
                        para compartir y quedarse pensando. Estas oraciones van a llegarte al alma</p>
                    <p>Esperamos que éstas palabras y mensajes lleguen a tu corazón y te sirvan para cualquier momento
                        de la vida. Queremos que participes votando las
                        frases que más te gusten y por supuesto compartas con tus seres queridos.<br><br></p>
                </div>
            </div>
        </div>
    </div>
    <div data-bs-parallax-bg="true" class="randomImg">
        <h2 class="text-center"><span class="text-muted">Frases aleatoreas</span></h2>
        <ul class="text-center">
            @foreach($lastPhrasesLists1 as $lastPhraselist1)
                <li style="color:#294896;font-family:Acme, sans-serif;">
                    <h5>{!! $lastPhraselist1->text !!}</h5>
                    <b>{{ $lastPhraselist1->author }}</b>
                </li>
                <br/>
            @endforeach
        </ul>
    </div>
    <div class="container" id="ranking">
        <div class="row">
            <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                <h2 class="text-center" id="ranking"><br><span class="text-muted">Las frases que más votaron los usuarios</span><br><br>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                <ul>
                    @foreach($rankings as $ranking)
                        <li>
                            <h5 style="color:#3b8e31;font-family:Acme, sans-serif;">{!! $ranking->phrase->text !!}</h5>
                            <b>{{ $ranking->phrase->author }}</b>
                            <h6 class="text text-muted">
                                <small><i>{{ $ranking->vote }} votos</i></small>
                            </h6>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="photo-gallery" id="gallery">
        <div class="container galleryImg" data-aos="fade-up" data-aos-delay="150">
            <div class="intro">
                <h2 class="text-center text-muted">Galería de Imágenes</h2>
                <p class="text-center">Reflexiona con estas imágenes y comparte con tus seres amados.</p>
            </div>
            <div class="row photos">
                @foreach($photos as $photo)
                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                        <a href="../storage/app/{{ $photo->image }}" data-lightbox="photos">
                            <img class="img-fluid img-thumbnail h-100 w-100" src="../storage/app/{{ $photo->image }}">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div data-aos="fade-up" data-aos-delay="150" class="footer-basic">
        <div class="row">
            <div class="col header-images-columns">
                <div class="centered"></div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="gallery-pt"></div>
        </div>

        <div class="text-center">
            @include('front.external.adsIndex')
        </div>
<br />
        <footer>
            @include('front.part.footer')
        </footer>
    </div>
@endsection