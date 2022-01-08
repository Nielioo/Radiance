@extends('layouts.mainLayout')

@section('title', 'MainModePage')

@section('css', 'mainMode')

@section('mainContent')

<button class="back-redirect btn" onclick="window.location = '{{ url(route('mainMode.index')) }}'">
	<i class="fas fa-arrow-left fa-3x"></i>
</button>
<div class="mode justify-content-center row mx-5 mt-4 mb-5">
	<a class="img-mode col col-3" href="{{ route('stages.show', ['stage' => '1']) }}">
		<img class="img-fluid" src="/img/stages/unhover/bridge_dark.png" alt="Kesetimbangan Benda Tegar"
			onmouseover="this.src='/img/stages/hover/bridge_light.png'"
			onmouseout="this.src='/img/stages/unhover/bridge_dark.png'">
	</a>

	<a class="img-mode col col-3" href="{{ route('stages.show', ['stage' => '2']) }}">
		<img class="img-fluid" src="/img/stages/unhover/resto_dark.png" alt="Dinamika Rotasi/Momen Inersia"
			onmouseover="this.src='/img/stages/hover/resto_light.png'"
			onmouseout="this.src='/img/stages/unhover/resto_dark.png'">
	</a>

	<a class="img-mode col col-3" href="{{ route('stages.show', ['stage' => '3']) }}">
		<img class="img-fluid" src="/img/stages/unhover/dark_forest_dark.png" alt="Elastisitas dan Hukum Hooke"
			onmouseover="this.src='/img/stages/hover/dark_forest_light.png'"
			onmouseout="this.src='/img/stages/unhover/dark_forest_dark.png'">
	</a>

	<a class="img-mode col col-3" href="{{ route('stages.show', ['stage' => '4']) }}">
		<img class="img-fluid" src="/img/stages/unhover/park_dark.png" alt="Hukum Pascal"
			onmouseover="this.src='/img/stages/hover/park_light.png'"
			onmouseout="this.src='/img/stages/unhover/park_dark.png'">
	</a>

	<div class="w-100"></div>

	<a class="img-mode col col-3" href="{{ route('stages.show', ['stage' => '5']) }}">
		<img class="img-fluid" src="/img/stages/unhover/forest_dark.png" alt="Suhu, Kalor, dan Skala Termometer"
			onmouseover="this.src='/img/stages/hover/forest_light.png'"
			onmouseout="this.src='/img/stages/unhover/forest_dark.png'">
	</a>

	<a class="img-mode col col-3" href="{{ route('stages.show', ['stage' => '6']) }}">
		<img class="img-fluid" src="/img/stages/unhover/underwater_dark.png" alt="Gelombang Bunyi"
			onmouseover="this.src='/img/stages/hover/underwater_light.png'"
			onmouseout="this.src='/img/stages/unhover/underwater_dark.png'">
	</a>

	<a class="img-mode col col-3" href="{{ route('stages.show', ['stage' => '7']) }}">
		<img class="img-fluid" src="/img/stages/unhover/in_town_dark.png" alt="Cermin dan Lensa"
			onmouseover="this.src='/img/stages/hover/in_town_light.png'"
			onmouseout="this.src='/img/stages/unhover/in_town_dark.png'">
	</a>
</div>

@endsection