@extends('layouts.mainLayout')

@section('title', 'MainModePage')

@section('css', 'mainMode')

@section('mainContent')
{{ Session::forget('previousScore'); }}
{{ Session::forget('previousTimer'); }}

<button class="back-redirect btn" onclick="window.location = '{{ url(route('mainMode.index')) }}'">
	<i class="fas fa-arrow-left fa-3x"></i>
</button>

<div class="title">
	<h1 id="time-challenge">Are you ready to try Time Challenge Mode?</h1>
</div>

<a id="play" class="play-button" href="{{ route('timeChallenges.index') }}">
	<span></span>
</a>
<button id="overlay" class="overlay">
	<a class="overlay-close">&times;</a>
</button>
@endsection