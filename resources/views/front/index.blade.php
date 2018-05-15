@extends('layouts.main_front')

@section('content')
    <div class="banner">
        <div class="col-md-8 banner-left">
            <h3>Última Frase</h3>
            <p>{{ $lastPhrase->text }}</p>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- banner -->
    <!-- welcome -->
    <div class="welcome">
        @include('front.part.ads1')
        <div class="welcome-top">
            <div class="col-md-6 welcome-left">
                <div class="view view-tenth">
                    <a href="{{  url('categoria', $randPhrase1->category_id) }}">
                        <div class="inner_content clearfix">
                            <div class="product_image">
                                <img src="{{ asset('frontStyle/images/img5.jpg') }}" class="img-responsive of-my"
                                     alt="img5.jpg"/>
                                <div class="mask">
                                    <h4>Frase Aleatorea</h4>
                                    <p>{{ $randPhrase1->text }}</p>
                                    <h5>Continuar leyendo...</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 welcome-right">
                <div class="view view-tenth">
                    <a href="{{  url('categoria', $randPhrase2->category_id) }}">
                        <div class="inner_content clearfix">
                            <div class="product_image">
                                <img src="{{ asset('frontStyle/images/img4.jpg') }}" class="img-responsive of-my"
                                     alt="img4.jpg"/>
                                <div class="mask">
                                    <h4>Más Frases</h4>
                                    <p>{{ $randPhrase2->text }}</p>
                                    <h5>Continue reading...</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- welcome-bottom -->
        <div class="welcome-bottom">
            <ul>
                @foreach($lastPhrasesLists1 as $lastPhraselist1)
                    <li><h5>{!! $lastPhraselist1->text !!}</h5></li>
                    <br />
                @endforeach
            </ul>
        </div>

        <!-- welcome-bottom -->
    </div>
    <!-- welcome -->
    <div class="should">
        @include('front.part.ads2')
    </div>
@endsection