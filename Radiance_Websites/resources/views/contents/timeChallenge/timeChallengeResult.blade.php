@extends('layouts.timeChallenge')

@section('title', $title)

{{-- @section('css', 'timeChallengeResult') --}}

@section('main-content')
<div id="main-background">
	<img id="main-background-image" class="img-fluid" src="/img/levels/backgrounds/background_sea.png" alt="">

	<h1>{{ $score }}</h1>
	<button onclick="window.location = '/inTime'">Back to Time Challenge Mode</h1>
</div>
@endsection