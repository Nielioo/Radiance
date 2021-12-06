@extends('layouts.mainLayout')

@section('title', 'MainPage')

@section('mainContent')

    <div class="title">
        <p id="radiance">Radiance</p>
        <div class="cursor"></div>
    </div>

    <a id="play" class="play-button" href="#">
        <span></span>
    </a>
    <div id="overlay" class="overlay">
        <a class="overlay-close">&times;</a>
    </div>

    {{-- <script>
        const cursor = document.querySelector('.cursor');
        document.addEventListener('mousemove', (e) => {
            cursor.style.left = e.clientX + 'px';
            cursor.style.top = e.clientY + 'px';
        })
    </script> --}}

@endsection
