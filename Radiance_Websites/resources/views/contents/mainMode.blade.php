@extends('layouts.mainLayout')

@section('title', $title)

@section('css', 'mainMode')

@section('mainContent')

    <button class="back-redirect btn" onclick="window.location.href = '/'">
        <i class="fas fa-arrow-left fa-3x"></i>
    </button>

    <div class="mode justify-content-center row mx-5 mt-4 mb-5">
        <a class="img-mode col-3" href="{{ route('stages.index') }}">
            <img class="img-fluid" src="/img/mainMode/unhover/story_mode_dark.png" alt="Story Mode"
                onmouseover="this.src='/img/mainMode/hover/story_mode_light.png'"
                onmouseout="this.src='/img/mainMode/unhover/story_mode_dark.png'">
        </a>

        <a class="img-mode col-3" href="/inTime">
            <img class="img-fluid" src="/img/mainMode/unhover/time_challenge_mode_dark.png" alt="Time Challenge Mode"
                onmouseover="this.src='/img/mainMode/hover/time_challenge_mode_light.png'"
                onmouseout="this.src='/img/mainMode/unhover/time_challenge_mode_dark.png'">
        </a>
    </div>

@endsection
