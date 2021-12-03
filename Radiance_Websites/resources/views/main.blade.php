@extends('layout.mainLayout')

@section('title', 'MainPage')

@section('css', 'main')

@section('content')

    <div class="bg">
        <div class="navigation">
            <h1>Navigation</h1>
        </div>
        <div class="context">
            <p id="radiance">Radiance</p>
            <div class="cursor"></div>
        </div>

        <div class="items">
            <i class="fa fa-brain"></i>
        </div>
    </div>

    <script>
        const cursor = document.querySelector('.cursor');
        document.addEventListener('mousemove', (e) => {
            cursor.style.left = e.clientX + 'px';
            cursor.style.top = e.clientY + 'px';
        })
    </script>

@endsection
