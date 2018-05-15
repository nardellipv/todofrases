@extends('layouts.main_front')

@section('content')
    <div class="about-content">
        <div class="about-section">
            <div class="about-grid">
                <div class="about-grid2">
                    <h3>{{ $category->category }}</h3>
                    <ul>
                        @foreach($phrases as $phrase)
                            <li><a href="#">{!! $phrase->text !!}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection