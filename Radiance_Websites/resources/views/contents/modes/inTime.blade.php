@extends('layouts.mainLayout')

@section('title', 'MainModePage')

@section('css', 'mainMode')

@section('mainContent')
{{ Session::forget('previousScore'); }}
{{ Session::forget('previousTimer'); }}
<h1 class="mode">Time Challenge Mode</h1>
<button class="start-button" onclick="window.location='{{ url(route('timeChallenges.index')) }}'">Start</button>

@endsection