@extends('layouts.mainLayout')

@section('title', $title)

@section('mainContent')

    <button class="profile-redirect btn" onclick="window.location.href = '/login'">
        <i class="fas fa-user fa-3x"></i>
	</button>

    <button class="leaderboard-redirect btn" onclick="window.location = '{{url(route('timeChallengeHistories.index'))}}'">
        <i class="fas fa-trophy fa-3x"></i>
	</button>

    <div class="title">
        <p id="radiance">Radiance</p>
        {{-- <div class="cursor"></div> --}}
    </div>

    <a id="play" class="play-button" href="{{ route('mainMode.index') }}">
        <span></span>
    </a>
    <div id="overlay" class="overlay">
        <a class="overlay-close">&times;</a>
    </div>

@endsection
