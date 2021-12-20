@extends('layouts.mainLayout')

@section('title', 'MainModePage')

@section('css', 'mainMode')

@section('mainContent')

    <div class="mode">
        <a class="img-mode" href="/firstStage">
            <img class="img-fluid" src="/img/stages/unhover/Bridge_dark.png" alt="Kesetimbangan Benda Tegar"
            onmouseover="this.src='/img/stages/hover/Bridge_light.png'" onmouseout="this.src='/img/stages/unhover/Bridge_dark.png'">
        </a>

        <a class="img-mode">
            <img class="img-fluid" src="/img/stages/unhover/Resto_dark.png" alt="Dinamika Rotasi/Momen Inersia"
            onmouseover="this.src='/img/stages/hover/Resto_light.png'" onmouseout="this.src='/img/stages/unhover/Resto_dark.png'">
        </a>

        <a class="img-mode">
            <img class="img-fluid" src="/img/stages/unhover/DarkForest_dark.png" alt="Elastisitas dan Hukum Hooke"
            onmouseover="this.src='/img/stages/hover/DarkForest_light.png'" onmouseout="this.src='/img/stages/unhover/DarkForest_dark.png'">
        </a>

        <a class="img-mode">
            <img class="img-fluid" src="/img/stages/unhover/Park_dark.png" alt="Hukum Pascal"
            onmouseover="this.src='/img/stages/hover/Park_light.png'" onmouseout="this.src='/img/stages/unhover/Park_dark.png'">
        </a>

        <a class="img-mode">
            <img class="img-fluid" src="/img/stages/unhover/Forest_dark.png" alt="Suhu, Kalor, dan Skala Termometer"
            onmouseover="this.src='/img/stages/hover/Forest_light.png'" onmouseout="this.src='/img/stages/unhover/Forest_dark.png'">
        </a>

        <a class="img-mode">
            <img class="img-fluid" src="/img/stages/unhover/UnderWater_dark.png" alt="Gelombang Bunyi"
            onmouseover="this.src='/img/stages/hover/UnderWater_light.png'" onmouseout="this.src='/img/stages/unhover/UnderWater_dark.png'">
        </a>

        <a class="img-mode">
            <img class="img-fluid" src="/img/stages/unhover/InTown_dark.png" alt="Cermin dan Lensa"
            onmouseover="this.src='/img/stages/hover/InTown_light.png'" onmouseout="this.src='/img/stages/unhover/InTown_dark.png'">
        </a>
    </div>

@endsection
