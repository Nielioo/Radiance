@extends('layouts.mainLayout')

@section('title', $title)

@section('mainContent')

<div id="action-buttons" class="d-flex justify-content-between px-4">
	<div class="d-flex flex-row">
		<button class="btn" onclick="window.location.href = '/login'">
			<i class="fas fa-user fa-3x"></i>
		</button>

		@if (Auth::check() && Auth::user()->studentRelation->role == 'admin')
		<button class="btn" onclick="window.location.href = '/adminDashboard'">
			<i class="fas fa-users-cog fa-3x"></i>
		</button>
		@endif

	</div>

	<div class="d-flex flex-row">
		<!-- Button trigger modal -->
		<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
			<i class="fas fa-info-circle fa-3x"></i>
		</button>

		<button class="btn" onclick="window.location = '{{url(route('timeChallengeHistories.index'))}}'">
			<i class="fas fa-trophy fa-3x"></i>
		</button>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="exampleModalLabel">Informasi Game</h4>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<p class="fw-bold">
							Aturan Main Game
						</p>
						<ol>
							<li>
								Siswa/siswi diwajibkan untuk login. Jika belum pernah login, maka siswa/siswi harus
								register
								terlebih dahulu.
							</li>
							<li>
								Setelah login, siswa/siswi akan diarahkan ke halaman home.
							</li>
						</ol>
						<p class="fw-bold pt-4">
							Informasi
						</p>
						<ol>
							<li>
								Di halaman home, terdapat 3 fitur yaitu, profile, play, dan leaderboard.
							</li>
							<li>
								Pada fitur profile, data yang telah diinput oleh siswa/siswi dapat dilihat dan diubah
								sesuai
								keinginan siswa/siswi.
							</li>
							<li>
								Pada fitur play, terdapat 2 game mode yaitu "Story Mode" dan "Time Challenge Mode".
							<li>
								Pada leaderboard, username siswa/siswi akan terlihat jika telah memainkan "Time
								Challenge
								Mode".
							</li>
						</ol>
						<p class="fw-bold pt-4">
							Story Mode
						</p>
						<ol>
							<li>
								Pada Story Mode, terdapat 7 stages yang tiap stage mempunyai topikdan ceritanya
								tersendiri.
							</li>
							<li>
								Tiap stage terdapat 10 level yang mempunyai 1 soal tiap level.
							</li>
							<li>
								Beberapa level terdapat story yang dapat dibaca siswa/siswi sebelum memulai quiz.
							</li>
							<li>
								Siswa/siswi hanya dapat melanjutkan level selanjutnya jika level sebelumnya telah
								dinyatakan
								benar.
							</li>
						</ol>
						<p class="fw-bold pt-4">
							Time Challenge Mode
						</p>
						<ol>
							<li>
								Pada Time Challenge Mode, siswa/siswi akan diberi waktu selama 5 menit untuk mengerjakan
								soal sebanyak-banyaknya.
							</li>
							<li>
								Bagi tiap soal yang benar, siswa/siswi akan mendapat skor sebanyak 10 poin.
							</li>
							<li>
								Bagi tiap soal yang salah, akan terjadi penguranngan skor sebanyak 10 poin, jika skor
								berupa
								0 dan salah, skor siswa/siswi tidak akan berubah menjadi negatif.
							</li>
						</ol>
					</div>
					<div class="modal-footer">
						{{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button> --}}
						<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Saya mengerti</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="title">
	<p id="radiance">Radiance</p>
	{{-- <div class="cursor"></div> --}}
</div>

<a id="play" class="play-button" href="{{ route('mainMode.index') }}">
	<span></span>
</a>
<div id="overlay" class="overlay">
	<a class="overlay-close">&times;</a>
</div>

@endsection