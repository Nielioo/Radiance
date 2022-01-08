@extends('layouts.leaderboard')

@section('title', $title)

@section('content')

    <h1 class="page-title d-flex justify-content-center">Leaderboards</h1>

    {{-- @foreach ($timeChallengeHistories as $history)
        {{ $loop->iteration }}
        {{ $history->student->name }}
        {{ $history->score }}
        <br>
    @endforeach --}}

    <div class="table-custom">
        <div class="table-cell">
            <ul class="leader">
                <div id="decoration"></div>
                <div id="decoration2"></div>
                <div id="decoration3"></div>

                @foreach ($timeChallengeHistories as $history)
                    <li>
                        <span class="list_num">{{ $loop->iteration }}</span>
                        {{-- <img src="https://d13yacurqjgara.cloudfront.net/users/36050/avatars/small/1d8a44e2ee79af698f5079b705e2bab7.jpeg?1445833398" /> --}}
                        <h2>{{ $history->student->name }}<span class="number">{{ $history->score }} pts</span></h2>
                    </li>
                @endforeach

            </ul>
        </div>
    </div>

@endsection
