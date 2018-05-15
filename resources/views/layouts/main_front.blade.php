<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Archive a blog Category Flat Bootstarp Responsive Website Template | Home :: w3layouts</title>
    <link href="{{ asset('frontStyle/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('frontStyle/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Archive Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('frontStyle/css/flexslider.css') }}" type="text/css" media="screen"/>
    <script src="{{ asset('frontStyle/js/jquery.min.js') }}"></script>
</head>
<body>
<!-- header -->
<div class="content-main">
    <div class="container">
        @include('front.part.menu')

        <div class="col-md-9 top-right">
            @yield('content')
        </div>

        <div class="clearfix"></div>
    </div>
</div>
<!-- footer -->
<div class="footer">
    @include('front.part.footer')
</div>
<!-- footer -->
</body>
</html>