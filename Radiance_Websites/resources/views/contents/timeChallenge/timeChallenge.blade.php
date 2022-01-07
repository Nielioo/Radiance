@extends('layouts.timeChallenge')

@section('title', $title)

{{-- @section('css', 'mainLevel') --}}

@section('main-content')
<div id="main-background">
	{{-- <img id="main-background-image" class="img-fluid" src="/img/levels/backgrounds/background_{{ $theme }}.png"
		alt=""> --}}

	<div id="ui">
		<div id="ui-elements" class="d-flex flex-column align-items-center">
			<div id="dialogue-box" class="pb-5">
				<img id="dialogue-box-image" class="img-fluid" src="/img/levels/ui/dialogue_box.png">

				<div id="dialogue-text" class="text">
					<p id="dialogue-text-name" class="fs-2 fw-bold">
						Question
					</p>

					<p id="dialogue-text-conversation" class="fs-4">
						{{ $problems[$randomNumber]->problem }}
					</p>
				</div>
			</div>

			<div id="option-bars" class="d-flex flex-column text">
				@foreach ($problems[$randomNumber]->gameAnswers as $answer)
				<button class="option-bar-button" onclick="checkAnswer({{ $answer->isTrue }})">
					<div class="option-bar">
						<p class="option-bar-text fs-5 me-3 mb-0">
							{{ $answer->answer }}
						</p>

						<img class="mb-2 img-fluid" src="/img/levels/ui/option_bar_unhover.png"
							onmouseover="this.src='/img/levels/ui/option_bar_hover.png'"
							onmouseout="this.src='/img/levels/ui/option_bar_unhover.png'">
					</div>
				</button>
				@endforeach
			</div>
		</div>
	</div>

	<div id="form">
		{{-- <form action="{{ route('storyHistories.store') }}" method="POST">
			@csrf
			<input type="hidden" name="student_id" value="{{ Auth::id() }}"> --}}

			<div id="action-buttons" class="option-bar text">
				<template id="next-button-template">
					<button class="option-bar-button" onclick="nextQuestion()">
						<div class="option-bar">
							<p class="option-bar-text fs-5 me-3 mb-0">
								Next
							</p>

							<img class="mb-2 img-fluid" src="/img/levels/ui/option_bar_unhover.png"
								onmouseover="this.src='/img/levels/ui/option_bar_hover.png'"
								onmouseout="this.src='/img/levels/ui/option_bar_unhover.png'">
						</div>
					</button>
				</template>
			</div>
			{{--
		</form> --}}
	</div>
</div>

<script>
	function nextQuestion() {
	@php
	$randomNumber = rand(0, 10);
	$problem = $problems[$randomNumber]->problem;
	@endphp
	$('#dialogue-text-conversation').html('{{ $problem }}');
	}
</script>
@endsection