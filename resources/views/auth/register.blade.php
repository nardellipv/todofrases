<!DOCTYPE html>
<html lang="es">
<head>
    <title>Register Administrador</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content=""/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{ asset('backStyle/css/bootstrap.min.css') }}">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{ asset('backStyle/css/style.css') }}" rel='stylesheet' type='text/css'/>
    <link href="{{ asset('backStyle/css/style-responsive.css') }}" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
          rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{ asset('backStyle/css/font.css') }}" type="text/css"/>
    <link href="{{ asset('backStyle/css/font-awesome.css') }}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="{{ asset('js/jquery2.0.3.min.js') }}"></script>
</head>
<body>
<div class="log-w3">
    <div class="w3layouts-main">
        <h2>Registrarse</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input id="name" type="text" class="ggg form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                   name="name"
                   value="{{ old('name') }}" placeholder="Nombre Completo" required autofocus>

            @if ($errors->has('name'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
            @endif

            <input id="email" type="email" class="ggg form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                   name="email" value="{{ old('email') }}" placeholder="EMail" required>

            @if ($errors->has('email'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif

            <input id="password" type="password"
                   class="ggg form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                   placeholder="Contraseña" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif

            <input id="password-confirm" type="password" class="ggg form-control" name="password_confirmation"
                   placeholder="Repetir Contraseña" required>

            <div class="clearfix"></div>
            <input type="submit" value="{{ __('Registrar') }}" name="login">
        </form>
    </div>
</div>
<script src="{{ asset('backStyle/js/bootstrap.js') }}"></script>
<script src="{{ asset('backStyle/js/jquery.dcjqaccordion.2.7.js') }}"></script>
<script src="{{ asset('backStyle/js/scripts.js') }}"></script>
<script src="{{ asset('backStyle/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('backStyle/js/jquery.nicescroll.js') }}"></script>
<!--[endif]-->
<script src="{{ asset('backStyle/js/jquery.scrollTo.js') }}"></script>
</body>
</html>