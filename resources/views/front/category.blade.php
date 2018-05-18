@extends('layouts.main_front')

@section('content')
    @if (Session::has('message'))
        <p class="alert alert-danger">{!! Session::get('message') !!}</p>
    @endif
    <div class="about-content">
        <div class="about-section">
            <div class="about-grid">
                <div class="about-grid2">
                    <h3>{{ $category->category }}</h3>
                    <ul>
                        @foreach($phrases as $phrase)
                            <li>
                                <a href="#">{!! $phrase->text !!} <b>{{ $phrase->author }}</b></a>
                                <a href="{{ url('like', $phrase->id) }}"><img src="{{ asset('frontStyle/images/likes.png') }}"></a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script data-cfasync='false' type='text/javascript' src='//p285918.clksite.com/adServe/banners?tid=285918_554159_3'></script>
@endsection