@extends('layouts.mainStage')

@section('title', $title)

{{-- @section('css', 'mainStage') --}}

@section('mainBackground')
<img id="mainBackground" src="/img/stages/maps/map_jungle.png">
@endsection

@section('mainContent')
@for ($i = 1; $i <= count($levels); $i++)

{{-- Get highest star --}}
@php
$level = $levels->firstWhere('level', $i);
$highestStar = 0;

if ($level !== null) {
	$highestStar = $level->gameStoryHistories
		->filter(function ($history) {
			return data_get($history, 'student_id') === Auth::user()->id;
	})->unique('star')->max('star');
}
@endphp

<div id="stage{{ $stage }}-level{{ $i }}">
	<a href="#">
		<img class="img-fluid" src="{{ asset('/img/stages/unhover/button_level_unhover.png') }}"
			onmouseover="this.src='/img/stages/hover/button_level_hover.png'"
			onmouseout="this.src='/img/stages/unhover/button_level_unhover.png'">
	</a>

	<div class="level-stars d-flex">
		{{-- Check obtained star --}}
		@for ($j = 1; $j <= 3; $j++)
		@if ($j <= $highestStar)
			<img id="level{{ $i }}-star{{ $j }}" class="level-star{{ $j }}" src="{{ asset('/img/stages/stars/star_obtain.png') }}">
		@else
			<img id="level{{ $i }}-star{{ $j }}" class="level-star{{ $j }}" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">	
		@endif
		@endfor
	</div>
</div>
@endfor
@endsection