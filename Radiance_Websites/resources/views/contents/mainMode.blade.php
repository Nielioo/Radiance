@extends('layouts.mainLayout')

@section('title', 'MainModePage')

@section('css', 'mainMode')

@section('mainContent')

    <div class="mode">
        <a class="img-mode" href="/inStory">
            <img class="img-fluid" src="/img/mainMode/Story_Mode.png" alt="Story Mode">
        </a>

        <a class="img-mode" href="/inTime">
            <img class="img-fluid" src="/img/mainMode/Time_Challenge_Mode.png" alt="Time Challenge Mode">
        </a>


    </div>

@endsection
