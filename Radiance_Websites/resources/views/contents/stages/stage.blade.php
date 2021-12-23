@extends('layouts.mainStage')

@section('title', $title)

{{-- @section('css', 'mainStage') --}}

@section('mainBackground')
<img id="mainBackground" src="/img/stages/maps/map_{{ $theme }}.png">
@endsection

@section('mainContent')
@for ($i = 0; $i < count($levels); $i++)
<div id="stage{{ $stage }}-level{{ $i + 1 }}">
	<a href="#">
		<img class="img-fluid" src="{{ asset('/img/stages/unhover/button_' . $theme . '_level_unhover.png') }}"
			onmouseover="this.src='/img/stages/hover/button_{{ $theme }}_level_hover.png'"
			onmouseout="this.src='/img/stages/unhover/button_{{ $theme }}_level_unhover.png'">
	</a>

	<div class="level-stars d-flex">
		{{-- Check obtained star --}}
		@for ($j = 0; $j < 3; $j++)
		@if ($j + 1 <= $highestStars[$i])
			<img id="level{{ $i + 1 }}-star{{ $j + 1 }}" class="level-star{{ $j + 1 }}" src="{{ asset('/img/stages/stars/star_obtain.png') }}">
		@else
			<img id="level{{ $i + 1 }}-star{{ $j + 1 }}" class="level-star{{ $j + 1 }}" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">	
		@endif
		@endfor
	</div>
</div>
@endfor
@endsection