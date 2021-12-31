@extends('layouts.question')

@section('title', $title)

{{-- @section('css', 'mainLevel') --}}

@section('question')
    {{-- For Javascript purpose, hidden --}}
    <label id="stageNumber">{{ $stage }}</label>
    <label id="levelNumber">{{ $level }}</label>

    <div id="main-background">
        <img id="main-background-image" class="img-fluid"
             src="/img/levels/backgrounds/background_{{ $theme }}.png" alt="">

        <p>{{$problem->problem}}</p>
        <form method="post">
            @csrf
            @for($i=0;$i<count($answers);$i++)
                <input type="submit" value="{{$answers[$i]->answer}}" name="{{$i}}">
            @endfor

            <input type="hidden" name="answers" value="{{$answers}}">
        </form>

    </div>

    @php
        if (isset($_POST['0']))
        {
            $answers = $_POST['answers'];
            if ($answers[0]->isTrue == 1){
                route('');
            }
        }
    @endphp

@endsection
