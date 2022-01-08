@extends('layouts.mainLayout')

@section('title', 'MainModePage')

@section('css', 'mainMode')

@section('mainContent')
    {{ Session::forget('previousScore'); }}
    {{ Session::forget('previousTimer'); }}

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
