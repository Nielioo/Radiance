@extends('layouts.mainLayout')

@section('mainContent')

<div class="container newEditProfile">
	<div class="row justify-content-center">
		<h1 class="newRegister_title">Edit Profile</h1>

		<!-- Content Row -->
		<div class="">
			<form action="{{ route('profiles.update', Auth::id()) }}" method="POST" class="registerForm">
				@csrf
				<input type="hidden" name="_method" value="PATCH">

				<div class="form-group">
					<label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

					<div class="col">
						<input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
							name="username" value="{{ $student->username }}" required autocomplete="username" autofocus>

						@error('username')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>
				<div class="form-group">
					<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

					<div class="col">
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
							name="email" value="{{ $student->email }}" required autocomplete="email">

						@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>
				<div class="form-group">
					<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

					<div class="col">
						<input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
							name="name" value="{{ $student->name }}" required autocomplete="name" autofocus>

						@error('name')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>
				<div class="form-group">
					<label for="birthyear" class="col-md-4 col-form-label text-md-right">{{ __('Birthyear') }}</label>

					<div class="col">
						<input id="birthyear" type="date" class="form-control @error('birthyear') is-invalid @enderror"
							name="birthyear" value="{{ $student->birthyear }}">

						@error('birthyear')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>

				<div class="form-group">
					<label for="school" class="col-md-4 col-form-label text-md-right">{{ __('School') }}</label>

					<div class="col">
						<input id="school" type="text" class="form-control @error('school') is-invalid @enderror"
							name="school" value="{{ $student->school }}">

						@error('school')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>

				<div class="form-group">
					<label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

					<div class="col">
						<input id="city" type="text" class="form-control @error('city') is-invalid @enderror"
							name="city" value="{{ $student->city }}">

						@error('city')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>
				<br />

				<div class="text-center pb-5">
					<button type="submit" class="btn btn-success">Update</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
