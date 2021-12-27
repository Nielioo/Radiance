@extends('layouts.mainLevel')

@section('title', $title)

{{-- @section('css', 'mainLevel') --}}

@section('mainContent')
{{-- For Javascript purpose, hidden --}}
<label id="stageNumber">{{ $stage }}</label>
<label id="levelNumber">{{ $level }}</label>

<div id="main-background">
	<img id="main-background-image" class="img-fluid" src="/img/levels/backgrounds/background_{{ $theme }}.png">

	<img id="rae" class="img-fluid" src="/img/mascots/rae/rae_default.png" alt="rae">

	<div id="ui">
		<div id="ui-elements" class="d-flex flex-column align-items-center">
			<div id="option-bars" class="d-flex flex-column align-self-end text">
				<template id="option-bar">
					<button class="option-bar-button">
						<div class="option-bar">
							<p class="option-bar-text fs-5 me-3 mb-0">
								Lorem, ipsum dolor.
							</p>

							<img class="mb-2 img-fluid" src="/img/levels/ui/option_bar_{{ $theme }}_unhover.png"
								onmouseover="this.src='/img/levels/ui/option_bar_{{ $theme }}_unhover.png'"
								onmouseout="this.src='/img/levels/ui/option_bar_{{ $theme }}_unhover.png'">
						</div>
					</button>
				</template>
			</div>

			<div id="dialogue-box">
				<img id="dialogue-box-image" class="img-fluid"
					src="/img/levels/ui/dialogue_box_{{ $theme }}.png">

				<div id="dialogue-text" class="text">
					<p id="dialogue-text-name" class="fs-2 fw-bold">
						Stage {{ $stage }} Level {{ $level }} Theme {{ $theme }}
					</p>

					<p id="dialogue-text-conversation" class="fs-4">
						Lorem ipsum dolor sit amet.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection