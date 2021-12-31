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
        @for($i=0;$i<count($answers);$i++)
            <button>{{$answers[$i]->answer}}</button>
        @endfor

        <form method="post">
            @csrf
            <input type="button" value="sembarangsek" name="bebas">
            <input type="hidden" name="answers" value="{{$answers}}">
        </form>

    </div>

    @php
        if (isset($_POST['bebas']))
        {
            $answers = $_POST['answers'];
            if ($answers[0] == 1){

            }
        }
    @endphp

@endsection
