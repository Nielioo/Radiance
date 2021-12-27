@extends('layouts.mainLevel')

@section('title', $title)

{{-- @section('css', 'mainLevel') --}}

@section('mainContent')
<div id="main-background">
	<img id="main-background-image" src="/img/levels/backgrounds/background_{{ $theme }}.png">

	<img id="rae" src="/img/mascots/rae/rae_default.png" alt="rae">

	<div id="ui">
		<div id="ui-elements" class="d-flex flex-column align-items-center">
			<div id="option-bars" class="d-flex flex-column align-self-end text">
				<div id="option-bar1" class="option-bar">
					<p id="option-bar-text1" class="option-bar-text fs-5 me-3 mb-0">
						Lorem, ipsum dolor.
					</p>

					<img id="option-bar-image1" class="mb-2" src="/img/levels/ui/option_bar_{{ $theme }}_unhover.png"
						onmouseover="this.src='/img/levels/ui/option_bar_{{ $theme }}_unhover.png'"
						onmouseout="this.src='/img/levels/ui/option_bar_{{ $theme }}_unhover.png'">
				</div>

				<div id="option-bar2" class="option-bar">
					<p id="option-bar-text2" class="option-bar-text fs-5 me-3 mb-0">
						Lorem ipsum dolor sit amet.
					</p>

					<img id="option-bar-image2" class="mb-2" src="/img/levels/ui/option_bar_{{ $theme }}_unhover.png"
						onmouseover="this.src='/img/levels/ui/option_bar_{{ $theme }}_unhover.png'"
						onmouseout="this.src='/img/levels/ui/option_bar_{{ $theme }}_unhover.png'">
				</div>

				<div id="option-bar3" class="option-bar">
					<p id="option-bar-text3" class="option-bar-text fs-5 me-3 mb-0">
						Lorem ipsum dolor sit amet consectetur.
					</p>

					<img id="option-bar-image3" class="mb-2" src="/img/levels/ui/option_bar_{{ $theme }}_unhover.png"
						onmouseover="this.src='/img/levels/ui/option_bar_{{ $theme }}_unhover.png'"
						onmouseout="this.src='/img/levels/ui/option_bar_{{ $theme }}_unhover.png'">
				</div>

				<div id="option-bar4" class="option-bar">
					<p id="option-bar-text4" class="option-bar-text fs-5 me-3 mb-0">
						Lorem ipsum dolor sit, amet consectetur adipisicing elit.
					</p>

					<img id="option-bar-image4" class="mb-2" src="/img/levels/ui/option_bar_{{ $theme }}_unhover.png"
						onmouseover="this.src='/img/levels/ui/option_bar_{{ $theme }}_unhover.png'"
						onmouseout="this.src='/img/levels/ui/option_bar_{{ $theme }}_unhover.png'">
				</div>
			</div>

			<div id="dialog-box">
				<img id="dialog-box-image" src="/img/levels/ui/dialog_box_{{ $theme }}.png">

				<div id="dialog-text" class="text">
					<p id="dialog-text-name" class="fs-2 fw-bold">Stage {{ $stage }} Level {{ $level }} Theme {{
						$theme }}
					</p>

					<p id="dialog-text-conversation" class="fs-4">
						Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae neque, voluptatibus at
						dolorum id voluptatem officiis expedita placeat fugiat voluptates voluptas sint. Dolorem fuga
						quia repudiandae, quod minima eos delectus mollitia iure temporibus facere, eaque earum,
						deserunt exercitationem est? Eveniet, consequuntur laboriosam vero quia voluptate nisi. Eos
						aspernatur officia atque?
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection