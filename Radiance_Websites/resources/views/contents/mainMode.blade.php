@extends('layouts.mainLayout')

@section('title', 'MainModePage')

@section('css', 'mainMode')

@section('mainContent')

    <div class="mode">
        <a class="img-mode" href="{{ route('stages.index') }}">
            <img class="img-fluid" src="/img/mainMode/unhover/story_mode_dark.png" alt="Story Mode"
            onmouseover="this.src='/img/mainMode/hover/story_mode_light.png'" onmouseout="this.src='/img/mainMode/unhover/story_mode_dark.png'">
        </a>

        <a class="img-mode" href="/inTime">
            <img class="img-fluid" src="/img/mainMode/unhover/time_challenge_mode_dark.png" alt="Time Challenge Mode"
            onmouseover="this.src='/img/mainMode/hover/time_challenge_mode_light.png'" onmouseout="this.src='/img/mainMode/unhover/time_challenge_mode_dark.png'">
        </a>
    </div>

@endsection
