@extends('layouts.timeChallenge')

@section('title', $title)

@section('css', 'timeChallenge')

@section('main-content')
    <div id="main-background">
        <img id="main-background-image" class="img-fluid" src="/img/levels/backgrounds/background_sea.png" alt="">

        <div id="time-challenge-elements" class="d-flex justify-content-between align-items-center mx-5 my-4">
            <div id="score-bar">
                <div class="bar-text">
                    <span id="score-bar-text" class="text fs-4">{{ $score }}</span>
                    <span class="text fs-4">pts</span>
                </div>

                <img class="img-fluid" src="{{ asset('img/levels/ui/score_bar.png') }}">
            </div>

            <div id="timer-bar">
                <div class="bar-text">
                    <span id="timer-bar-text" class="text fs-4">{{ $timer }}</span>
                    <span class="text fs-4">s</span>
                </div>

                <img class="img-fluid" src="{{ asset('img/levels/ui/score_bar.png') }}">
            </div>
        </div>

        <div id="ui">
            <div id="ui-elements" class="d-flex flex-column align-items-center">
                <div id="dialogue-box" class="mx-4">
                    <img id="dialogue-box-image" class="img-fluid" src="/img/levels/ui/question_box.png">

                    <div id="dialogue-text" class="text">
                        <p id="dialogue-text-conversation" class="fs-4">
                            {{ $problem->problem }}
                        </p>
                    </div>
                </div>

                <div id="option-bars" class="row row-cols-2 pt-5 text">
                    @foreach ($answers as $answer)
                        <div class="col d-flex justify-content-center">
                            <button class="option-bar-button"
                                    onclick="window.location.href = '/checkAnswerTimeChallenge?chosenAnswerId={{ $answer->id }}&score={{ $score }}&timer=' + getTimer()">
                                <div class="option-bar">
                                    <p class="option-bar-text fs-5 me-3 mb-0">
                                        {{ $answer->answer }}
                                    </p>

                                    <img id="option-bar-image-{{ $loop->iteration }}" class="mb-2 img-fluid"
                                         src="/img/levels/ui/option_bar_unhover.png"
                                         onmouseover="this.src='/img/levels/ui/option_bar_hover.png'"
                                         onmouseout="this.src='/img/levels/ui/option_bar_unhover.png'">
                                </div>
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
