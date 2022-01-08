@extends('layouts.mainLayout')

@section('title', $title)

@section('mainContent')

    <div class="profile-redirrect" style="font-size: 36px" onclick="window.location.href='/login'">
        <i class="fas fa-user"></i>
    </div>
    <div class="leaderboard-redirrect" style="font-size: 36px" onclick="window.location='{{url(route('timeChallengeHistories.index'))}}'">
        <i class="fas fa-trophy"></i>
    </div>

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
