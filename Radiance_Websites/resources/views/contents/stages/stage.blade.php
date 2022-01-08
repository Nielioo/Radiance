@extends('layouts.mainStage')

@section('title', $title)

{{-- @section('css', 'mainStage') --}}

@section('mainBackground')
<div id="main-background">
	<img id="main-background-image" class="img-fluid" src="/img/stages/maps/map_{{ $theme }}.png">
</div>
@endsection

@section('mainContent')
@for ($i = 0; $i < count($levels); $i++)
<div id="stage{{ $stage }}-level{{ $i + 1 }}">
	<a href="{{ route('stages.levels.show', ['stage' => $stage, 'level' => $i + 1]) }}">
		<img class="level-button-image img-fluid" src="{{ asset('/img/stages/unhover/button_level_unhover.png') }}"
			onmouseover="this.src='/img/stages/hover/button_level_hover.png'"
			onmouseout="this.src='/img/stages/unhover/button_level_unhover.png'">
	</a>

	<div class="level-stars d-flex">
		{{-- Check obtained star --}}
		@for ($j = 0; $j < 3; $j++)
		@if ($i + 1 == count($levels) && count($highestStars) != 10)
		<img id="level{{ $i + 1 }}-star{{ $j + 1 }}" class="level-star{{ $j + 1 }} level-star-image img-fluid" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">	
		@else
		@if ($j + 1 <= $highestStars[$i])
			<img id="level{{ $i + 1 }}-star{{ $j + 1 }}" class="level-star{{ $j + 1 }} level-star-image img-fluid" src="{{ asset('/img/stages/stars/star_obtain.png') }}">
		@else
			<img id="level{{ $i + 1 }}-star{{ $j + 1 }}" class="level-star{{ $j + 1 }} level-star-image img-fluid" src="{{ asset('/img/stages/stars/star_unobtain.png') }}">	
		@endif
		@endif
		@endfor
	</div>
</div>
@endfor
@endsection