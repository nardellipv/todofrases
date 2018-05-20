<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Todo Frases | Las mejores frases</title>
    <link href="{{ asset('frontStyle/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('frontStyle/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Frases de amor, tiempo, piropos, chistes, Arte, cualidades, frases para facebook, frases para whatsapp"/>
    <meta name="description" content="Sitio para leer frases, reflexionar y compartir con seres queridos. Agregamos todas las semanas. Vota las
frases que mas te gusten y mira el ranking de las mas votadas.">
    <meta name="author" content="MikAnt">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('frontStyle/css/flexslider.css') }}" type="text/css" media="screen"/>

    <script src="{{ asset('frontStyle/js/jquery.min.js') }}"></script>

    @include('front.external.analytics')

    @yield('script')

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-7543412924958320",
            enable_page_level_ads: true
        });
    </script>

    <!-- Hotjar Tracking Code for https://www.todofrases.live -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:886822,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>

    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    {{--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b0061927fcccd0c"></script>--}}

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
<script>
    (function (w,i,d,g,e,t,s) {w[d] = w[d]||[];t= i.createElement(g);
        t.async=1;t.src=e;s=i.getElementsByTagName(g)[0];s.parentNode.insertBefore(t, s);
    })(window, document, '_gscq','script','//widgets.getsitecontrol.com/138026/script.js');
</script>
</body>
</html>