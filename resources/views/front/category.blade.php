@extends('layouts.main_front')

@section('content')
    <div data-aos="fade-up" data-aos-delay="400">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-9 phrase">
                    @if (Session::has('message'))
                        <p class="alert alert-danger">{!! Session::get('message') !!}</p>
                    @endif
                    <h2 style="font-family:'Slabo 27px', serif;">{{ $categoryFind->category }}</h2>
                    @foreach($phrases as $phrase)
                    <p class="text-muted text-justify" style="font-family:Acme, sans-serif;">{!! $phrase->text !!} <b>{{ $phrase->author }}</b>
                        <a href="{{ url('like', $phrase->id) }}"><img src="{{ asset('frontStyle/img/like.png') }}"></a>
                    @endforeach
                </div>
                <div class="col-md-6 col-lg-3 ads">
                    @include('front.external.adsCategory')
                </div>
            </div>
        </div>
    </div>

    <script data-cfasync='false' type='text/javascript' src='//p285918.clksite.com/adServe/banners?tid=285918_554159_3'></script>
@endsection