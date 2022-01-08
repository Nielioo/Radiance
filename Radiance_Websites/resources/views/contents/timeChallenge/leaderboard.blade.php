@extends('layouts.leaderboard')

@section('title', $title)

@section('content')

    <button class="home-redirect btn" onclick="window.location.href = '/'">
        <i class="fas fa-home fa-3x"></i>
	</button>

    <button class="try-again-redirect btn" onclick="window.location.href = '/inTime'">
        <i class="fas fa-undo fa-3x"></i>
    </button>

    <h1 class="page-title d-flex justify-content-center">Leaderboards</h1>

    <div class="table-custom">
        <div class="table-cell">
            <ul class="leader">
                <div id="decoration"></div>
                <div id="decoration2"></div>
                <div id="decoration3"></div>

                @foreach ($timeChallengeHistories as $history)
                    @if ($loop->iteration == 1)
                        <li class="firstName">
                            <span class="list_num">{{ $loop->iteration }}</span>
                            {{-- <img src="https://d13yacurqjgara.cloudfront.net/users/36050/avatars/small/1d8a44e2ee79af698f5079b705e2bab7.jpeg?1445833398" /> --}}
                            <h2>{{ $history->student->name }}<span class="number">{{ $history->score }}
                                    pts</span></h2>
                        </li>
                    @elseif($loop->iteration == 2)
                        <li class="secondName">
                            <span class="list_num">{{ $loop->iteration }}</span>
                            {{-- <img src="https://d13yacurqjgara.cloudfront.net/users/36050/avatars/small/1d8a44e2ee79af698f5079b705e2bab7.jpeg?1445833398" /> --}}
                            <h2>{{ $history->student->name }}<span class="number">{{ $history->score }}
                                    pts</span></h2>
                        </li>
                    @elseif($loop->iteration == 3)
                        <li class="thirdName">
                            <span class="list_num">{{ $loop->iteration }}</span>
                            {{-- <img src="https://d13yacurqjgara.cloudfront.net/users/36050/avatars/small/1d8a44e2ee79af698f5079b705e2bab7.jpeg?1445833398" /> --}}
                            <h2>{{ $history->student->name }}<span class="number">{{ $history->score }}
                                    pts</span></h2>
                        </li>
                    @else
                        <li class="defaultName">
                            <span class="list_num">{{ $loop->iteration }}</span>
                            {{-- <img src="https://d13yacurqjgara.cloudfront.net/users/36050/avatars/small/1d8a44e2ee79af698f5079b705e2bab7.jpeg?1445833398" /> --}}
                            <h2>{{ $history->student->name }}<span class="number">{{ $history->score }}
                                    pts</span></h2>
                        </li>
                    @endif
                @endforeach

            </ul>
        </div>
    </div>

@endsection
