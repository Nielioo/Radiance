@extends('layouts.mainLayout')

@section('mainContent')

<div class="container newLogin">
	<div class="row justify-content-center">
		<h1 class="loginLogin">Add Answers</h1>

		<!-- Content Row -->
		<div class="">

			<form action="" method="POST" class="newLoginForm">
				@csrf

				<div class="form-group">
					<label for="email" class="col-md-4 col-form-label text-md-right">Point 1</label>

					<div class="col">
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
							name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

						@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>

                <div class="form-group">
					<label for="email" class="col-md-4 col-form-label text-md-right">Point 2</label>

					<div class="col">
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
							name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

						@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>

                <div class="form-group">
					<label for="email" class="col-md-4 col-form-label text-md-right">Point 3</label>

					<div class="col">
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
							name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

						@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>

                <div class="form-group">
					<label for="email" class="col-md-4 col-form-label text-md-right">Point 4</label>

					<div class="col">
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
							name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

						@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>

				{{-- <div class="form-group">
					<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

					<div class="col">
						<input id="password" type="password"
							class="form-control @error('password') is-invalid @enderror" name="password" required
							autocomplete="current-password">

						@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>

					@if (Route::has('password.request'))
					<a class="btn btn-link" href="{{ route('password.request') }}">
						{{ __('Forgot Your Password?') }}
					</a>
					@endif
				</div> --}}
				<br>

				<div class="text-center ">
					<button type="submit" class="btn btn-success newAddQuestion">Submit New Question and Answers</button>
				</div>

				{{-- <div class="text-center dontHaveAccount">
					<p>
						Don't have an account yet?
						<a href="{{ route('register') }}">{{ __('Register here') }}</a>
					</p>
				</div> --}}
			</form>
		</div>

	</div>
</div>

@endsection
