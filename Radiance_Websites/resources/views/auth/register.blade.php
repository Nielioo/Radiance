@extends('layouts.mainLayout')

@section('mainContent')

<div class="container newRegister">
	<div class="row justify-content-center">
		<h1 class="newRegister_title">Register</h1>

		<!-- Content Row -->
		<div class="">

			<form action="{{ route('register') }}" method="POST" class="registerForm">
				@csrf

				<div class="form-group">
					<label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

					<div class="col">
						<input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
							name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

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
							name="email" value="{{ old('email') }}" required autocomplete="email">

						@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>

				<div class="form-group">
					<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

					<div class="col">
						<input id="password" type="password"
							class="form-control @error('password') is-invalid @enderror" name="password" required
							autocomplete="new-password">

						@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>

				<div class="form-group">
					<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm
						Password') }}</label>

					<div class="col">
						<input id="password-confirm" type="password" class="form-control" name="password_confirmation"
							required autocomplete="new-password">
					</div>
				</div>

				<div class="form-group">
					<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

					<div class="col">
						<input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
							name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
						<input id="birthyear" type="date" class="form-control @error('name') is-invalid @enderror"
							name="birthyear" value="{{ old('birthyear') }}">

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
							name="school" value="{{ old('school') }}">

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
							name="city" value="{{ old('city') }}">

						@error('city')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>
				<br />

				<div class="text-center">
					<button type="submit" class="btn btn-success">{{ __('Register') }}</button>
				</div>

				<div class="text-center dontHaveAccount">
					<p>
						Already have an account?
						<a href="{{ route('login') }}">{{ __('Login') }}</a>
					</p>
				</div>
			</form>
		</div>

	</div>
</div>

@endsection