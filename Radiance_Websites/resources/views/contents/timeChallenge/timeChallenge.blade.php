@extends('layouts.timeChallenge')

@section('title', $title)

@section('css', 'timeChallenge')

@section('main-content')
<div id="main-background">
	<img id="main-background-image" class="img-fluid" src="/img/levels/backgrounds/background_sea.png" alt="">

	<div id="time-challenge-elements" class="d-flex justify-content-between align-items-center mx-5 my-5">
		<div id="score-bar">
			<h1 id="score-bar-text" class="bar-text text">{{ $score }}</h1>

			<img class="img-fluid" src="{{ asset('img/levels/ui/score_bar.png') }}">
		</div>

		<div id="timer-bar">
			<h1 id="timer-bar-text" class="bar-text text">{{ $timer }}</h1>

			<img class="img-fluid" src="{{ asset('img/levels/ui/time_bar.png') }}">
		</div>
	</div>

	<div id="ui">
		<div id="ui-elements" class="d-flex flex-column align-items-center">
			<div id="dialogue-box" class="pb-5">
				<img id="dialogue-box-image" class="img-fluid" src="/img/levels/ui/dialogue_box.png">

				<div id="dialogue-text" class="text">
					<p id="dialogue-text-name" class="fs-2 fw-bold">
						Question
					</p>

					<p id="dialogue-text-conversation" class="fs-4">
						{{ $problem->problem }}
					</p>
				</div>
			</div>

			<div id="option-bars" class="d-flex flex-column text">
				@foreach ($answers as $answer)
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
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection