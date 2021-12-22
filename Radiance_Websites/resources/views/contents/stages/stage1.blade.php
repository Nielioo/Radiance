@extends('layouts.mainStage')

@section('title', 'Stage 1')

{{-- @section('css', 'mainStage') --}}

@section('mainBackground')
<img id="mainBackground" src="/img/stages/maps/map_jungle.png">
@endsection

@section('mainContent')
<div id="level1">
	<a href="#">
		<img class="img-fluid" src="{{ asset('/img/stages/unhover/button_level_unhover.png') }}"
			onmouseover="this.src='/img/stages/hover/button_level_hover.png'"
			onmouseout="this.src='/img/stages/unhover/button_level_unhover.png'">
	</a>

	<div class="level-stars d-flex">
		<img id="level1-star1" class="level-star1" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">
		<img id="level1-star2" class="level-star2" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">
		<img id="level1-star3" class="level-star3" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">
	</div>
</div>

<div id="level2">
	<a href="#">
		<img class="img-fluid" src="{{ asset('/img/stages/unhover/button_level_unhover.png') }}"
			onmouseover="this.src='/img/stages/hover/button_level_hover.png'"
			onmouseout="this.src='/img/stages/unhover/button_level_unhover.png'">
	</a>

	<div class="level-stars d-flex">
		<img id="level2-star1" class="level-star1" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">
		<img id="level2-star2" class="level-star2" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">
		<img id="level2-star3" class="level-star3" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">
	</div>
</div>

<div id="level3">
	<a href="#">
		<img class="img-fluid" src="{{ asset('/img/stages/unhover/button_level_unhover.png') }}"
			onmouseover="this.src='/img/stages/hover/button_level_hover.png'"
			onmouseout="this.src='/img/stages/unhover/button_level_unhover.png'">
	</a>

	<div class="level-stars d-flex">
		<img id="level3-star1" class="level-star1" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">
		<img id="level3-star2" class="level-star2" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">
		<img id="level3-star3" class="level-star3" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">
	</div>
</div>

<div id="level4">
	<a href="#">
		<img class="img-fluid" src="{{ asset('/img/stages/unhover/button_level_unhover.png') }}"
			onmouseover="this.src='/img/stages/hover/button_level_hover.png'"
			onmouseout="this.src='/img/stages/unhover/button_level_unhover.png'">
	</a>

	<div class="level-stars d-flex">
		<img id="level4-star1" class="level-star1" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">
		<img id="level4-star2" class="level-star2" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">
		<img id="level4-star3" class="level-star3" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">
	</div>
</div>

<div id="level5">
	<a href="#">
		<img class="img-fluid" src="{{ asset('/img/stages/unhover/button_level_unhover.png') }}"
			onmouseover="this.src='/img/stages/hover/button_level_hover.png'"
			onmouseout="this.src='/img/stages/unhover/button_level_unhover.png'">
	</a>

	<div class="level-stars d-flex">
		<img id="level5-star1" class="level-star1" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">
		<img id="level5-star2" class="level-star2" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">
		<img id="level5-star3" class="level-star3" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">
	</div>
</div>

<div id="level6">
	<a href="#">
		<img class="img-fluid" src="{{ asset('/img/stages/unhover/button_level_unhover.png') }}"
			onmouseover="this.src='/img/stages/hover/button_level_hover.png'"
			onmouseout="this.src='/img/stages/unhover/button_level_unhover.png'">
	</a>

	<div class="level-stars d-flex">
		<img id="level6-star1" class="level-star1" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">
		<img id="level6-star2" class="level-star2" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">
		<img id="level6-star3" class="level-star3" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">
	</div>
</div>

<div id="level7">
	<a href="#">
		<img class="img-fluid" src="{{ asset('/img/stages/unhover/button_level_unhover.png') }}"
			onmouseover="this.src='/img/stages/hover/button_level_hover.png'"
			onmouseout="this.src='/img/stages/unhover/button_level_unhover.png'">
	</a>

	<div class="level-stars d-flex">
		<img id="level7-star1" class="level-star1" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">
		<img id="level7-star2" class="level-star2" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">
		<img id="level7-star3" class="level-star3" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">
	</div>
</div>

<div id="level8">
	<a href="#">
		<img class="img-fluid" src="{{ asset('/img/stages/unhover/button_level_unhover.png') }}"
			onmouseover="this.src='/img/stages/hover/button_level_hover.png'"
			onmouseout="this.src='/img/stages/unhover/button_level_unhover.png'">
	</a>

	<div class="level-stars d-flex">
		<img id="level8-star1" class="level-star1" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">
		<img id="level8-star2" class="level-star2" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">
		<img id="level8-star3" class="level-star3" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">
	</div>
</div>

<div id="level9">
	<a href="#">
		<img class="img-fluid" src="{{ asset('/img/stages/unhover/button_level_unhover.png') }}"
			onmouseover="this.src='/img/stages/hover/button_level_hover.png'"
			onmouseout="this.src='/img/stages/unhover/button_level_unhover.png'">
	</a>

	<div class="level-stars d-flex">
		<img id="level9-star1" class="level-star1" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">
		<img id="level9-star2" class="level-star2" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">
		<img id="level9-star3" class="level-star3" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">
	</div>
</div>

<div id="level10">
	<a href="#">
		<img class="img-fluid" src="{{ asset('/img/stages/unhover/button_level_unhover.png') }}"
			onmouseover="this.src='/img/stages/hover/button_level_hover.png'"
			onmouseout="this.src='/img/stages/unhover/button_level_unhover.png'">
	</a>

	<div class="level-stars d-flex">
		<img id="level10-star1" class="level-star1" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">
		<img id="level10-star2" class="level-star2" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">
		<img id="level10-star3" class="level-star3" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">
	</div>
</div>
@endsection