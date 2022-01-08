@extends('layouts.mainLayout')

@section('title', 'MainModePage')

@section('css', 'mainMode')

@section('mainContent')
    {{ Session::forget('previousScore'); }}
    {{ Session::forget('previousTimer'); }}

    <div class="home-redirrect" style="font-size: 36px" onclick="window.location.href='/'">
        <i class="fas fa-home"></i>
    </div>

    <div class="title">
        <h1 id="time-challenge">Are you ready to try Time Challenge Mode?</h1>
    </div>

    <a id="play" class="play-button" onclick="window.location='{{ url(route('timeChallenges.index')) }}'">
        <span></span>
    </a>
    <div id="overlay" class="overlay">
        <a class="overlay-close">&times;</a>
    </div>

@endsection
