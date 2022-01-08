@extends('layouts.question')

@section('title', $title)

{{-- @section('css', 'mainLevel') --}}

@section('question')

    <div id="main-background">
        <img id="main-background-image" class="img-fluid" src="/img/levels/backgrounds/background_{{ $theme }}.png"
             alt="">

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
                            {{-- Start of if chosen option null --}}
                            @if ($chosenOption == null)
                                {{-- {{ dd('default') }} --}}
                                <button class="option-bar-button"
                                        onclick="window.location.href = '/checkAnswerStory?stage={{ $stage }}&level={{ $level }}&chosenOption={{ $loop->iteration }}&chosenAnswerId={{ $answer->id }}'">
                                    {{-- onclick="checkAnswer({{ $answer->isTrue }}, {{ $loop->iteration }})"> --}}
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
                                {{-- Else of if chosen option null --}}
                            @else
                                {{-- Start of if iteration is chosenOption --}}
                                @if ($chosenOption == $loop->iteration)
                                    {{-- Start of if answer is true --}}
                                    @if ($isTrue)
                                        {{-- {{ dd('true') }} --}}
                                        <button class="option-bar-button">
                                            <div class="option-bar">
                                                <p class="option-bar-text fs-5 me-3 mb-0">
                                                    {{ $answer->answer }}
                                                </p>

                                                <img id="option-bar-image-{{ $loop->iteration }}" class="mb-2 img-fluid"
                                                     src="/img/levels/ui/option_bar_true.png">
                                            </div>
                                        </button>
                                        {{-- Else of if answer is true --}}
                                    @else
                                        {{-- {{ dd('false') }} --}}
                                        <button class="option-bar-button">
                                            <div class="option-bar">
                                                <p class="option-bar-text fs-5 me-3 mb-0">
                                                    {{ $answer->answer }}
                                                </p>

                                                <img id="option-bar-image-{{ $loop->iteration }}" class="mb-2 img-fluid"
                                                     src="/img/levels/ui/option_bar_false.png">
                                            </div>
                                        </button>
                                    @endif
                                    {{-- End of if answer is true --}}
                                    {{-- Else of if iteration is chosenOption--}}
                                @else
                                    {{-- {{ dd('other') }} --}}
                                    <button class="option-bar-button">
                                        {{-- onclick="checkAnswer({{ $answer->isTrue }}, {{ $loop->iteration }})"> --}}
                                        <div class="option-bar">
                                            <p class="option-bar-text fs-5 me-3 mb-0">
                                                {{ $answer->answer }}
                                            </p>

                                            <img id="option-bar-image-{{ $loop->iteration }}" class="mb-2 img-fluid"
                                                 src="/img/levels/ui/option_bar_unhover.png">
                                        </div>
                                    </button>
                                @endif
                                {{-- End of if iteration is chosenOption --}}
                            @endif
                            {{-- End of if chosen option null --}}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        @if ($chosenOption != null)
            <div id="action-buttons" class="option-bar text">
                <button class="option-bar-button"
                        onclick="window.location = '{{ route('stages.show', ['stage' => $stage]) }}'">
                    <div class="option-bar">
                        <p class="option-bar-text fs-5 me-3 mb-0">
                            Next
                        </p>

                        <img class="mb-2 img-fluid" src="/img/levels/ui/option_bar_unhover.png"
                             onmouseover="this.src='/img/levels/ui/option_bar_hover.png'"
                             onmouseout="this.src='/img/levels/ui/option_bar_unhover.png'">
                    </div>
                </button>
            </div>
        @endif
    </div>
@endsection
