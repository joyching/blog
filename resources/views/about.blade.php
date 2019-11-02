@extends('layouts.base')

@section('content')
    <div class="page-title" style="background-image: url('{{ asset('images/page-title.png') }}')">
        <h1>About me</h1>
    </div>

    <section id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="about-img">
                        <img src="{{ asset('images/about-img.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about-content">
                        <h2>Who am i</h2>
                        <p>Photographs are a way of preserving a moment in our lives for the rest of our lives. Many of us have at least been tempted at the flashy array of photo printers which seemingly leap off the shelves at even the least tech-savvy. It surely seems old fashioned to talk about 35mm film and non-digital cameras in today’s day and age.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
