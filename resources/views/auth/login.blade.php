<!DOCTYPE html>
<html lang="es">
<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Login :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content=""/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
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
        <h2>Ingresar</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" placeholder="E-MAIL"
                   class="ggg form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                   value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif

            <input type="password" placeholder="PASSWORD"
                   class="ggg form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
            @if ($errors->has('password'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif
            <span><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}</span>
            <h6><a href="#">Olvide mi password?</a></h6>
            <div class="clearfix"></div>
            <input type="submit" value="Ingresar" name="login">
        </form>
        <p>No tengo cuenta?<a href="#">Crear una cuenta</a></p>
    </div>
</div>
<script src="{{ asset('js/bootstrap.js') }}'"></script>
<script src="{{ asset('js/jquery.dcjqaccordion.2.7.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('js/jquery.nicescroll.js') }}"></script>
<!--[if lte IE 8]>-->
<script language="javascript" type="text/javascript" src="{{ asset('js/flot-chart/excanvas.min.js') }}"></script>
<!--[endif]-->
<script src="{{ asset('js/jquery.scrollTo.js') }}"></script>
</body>
</html>