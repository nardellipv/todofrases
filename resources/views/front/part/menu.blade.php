<div>
    <div class="col-md-12 cabecera" id="cabecera">
        <nav class="navbar navbar-light navbar-expand-md fixed-top bg-light navigation-clean-button">
            <div class="container"><a class="navbar-brand" href="#"><img
                            src="{{ asset('frontStyle/img/logo.png') }}"></a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                            class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a href="{{ url('/') }}" class="nav-link">Página
                                Principal</a>
                        </li>
                        @if(Request::path() === '/')
                            <li class="nav-item" role="presentation"><a href="#ranking" class="nav-link">Ranking de
                                    frases</a>
                            </li>
                            <li class="nav-item" role="presentation"><a href="#gallery" class="nav-link">Galería de imágenes</a>
                            </li>
                        @endif
                        <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown"
                                                aria-expanded="false" href="#">Categorías </a>
                            <div class="dropdown-menu" role="menu">
                                @foreach($categories as $category)
                                    <a href="{{ url('categoria', $category->category) }}" class="dropdown-item"
                                       role="presentation">{{ $category->category }}
                                    </a>
                                @endforeach
                            </div>
                        </li>
                    </ul>
                    <span class="navbar-text actions"> <a href="{{ url('login') }}" class="login">Ingresar</a>
                        <a href="{{ url('register') }}" class="btn btn-light action-button" role="button">Registrarse</a></span>
                </div>
            </div>
        </nav>

    </div>
</div>