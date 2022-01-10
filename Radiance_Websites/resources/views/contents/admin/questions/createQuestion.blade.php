@extends('layouts.mainLayout')

@section('title', $title)

@section('mainContent')

<div class="container newLogin">
	<div class="row justify-content-center">
		<h1 class="loginLogin">Create Question</h1>

		<!-- Content Row -->
		<div class="">

			<form action="{{ route('adminProblem.store') }}" method="POST" class="newLoginForm">
				@csrf

				<div class="form-group">
					<label for="problem" class="col-md-4 col-form-label text-md-right">Question</label>

					<div class="col">
						<input id="problem" type="text" class="form-control @error('problem') is-invalid @enderror"
							name="problem" value="{{ old('problem') }}" required autofocus>

						@error('problem')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>

				<div class="form-group">
					<label for="answer1" class="col-md-4 col-form-label text-md-right">Answer Option 1</label>

					<div class="row">
						<div class="col">
							<input id="answer1" type="text" class="form-control @error('answer1') is-invalid @enderror"
								name="answer1" value="{{ old('answer1') }}" required autofocus>

							@error('answer1')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						<div class="col-3">
							<select id="isTrue1" name="isTrue1" class="form-control">
								<option value="{{ 0 }}" selected>False</option>
								<option value="{{ 1 }}">True</option>
							</select>

							@error('isTrue1')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="answer2" class="col-md-4 col-form-label text-md-right">Answer Option 2</label>

					<div class="row">
						<div class="col">
							<input id="answer2" type="text" class="form-control @error('answer2') is-invalid @enderror"
								name="answer2" value="{{ old('answer2') }}" required autofocus>

							@error('answer2')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						<div class="col-3">
							<select id="isTrue2" name="isTrue2" class="form-control">
								<option value="{{ 0 }}" selected>False</option>
								<option value="{{ 1 }}">True</option>
							</select>

							@error('isTrue2')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="answer3" class="col-md-4 col-form-label text-md-right">Answer Option 3</label>

					<div class="row">
						<div class="col">
							<input id="answer3" type="text" class="form-control @error('answer3') is-invalid @enderror"
								name="answer3" value="{{ old('answer3') }}" required autofocus>

							@error('answer3')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						<div class="col-3">
							<select id="isTrue3" name="isTrue3" class="form-control">
								<option value="{{ 0 }}" selected>False</option>
								<option value="{{ 1 }}">True</option>
							</select>

							@error('isTrue3')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="answer4" class="col-md-4 col-form-label text-md-right">Answer Option 4</label>

					<div class="row">
						<div class="col">
							<input id="answer4" type="text" class="form-control @error('answer4') is-invalid @enderror"
								name="answer4" value="{{ old('answer4') }}" required autofocus>

							@error('answer4')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						<div class="col-3">
							<select id="isTrue4" name="isTrue4" class="form-control">
								<option value="{{ 0 }}" selected>False</option>
								<option value="{{ 1 }}">True</option>
							</select>

							@error('isTrue4')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="level" class="col-md-4 col-form-label text-md-right">Level</label>

					<div class="col">
						<select id="level" name="level_id" class="form-control">
							<option value="" selected disabled hidden>Choose level</option>
							<option value="">None</option>
							@foreach ($levels as $level)
							<option value="{{ $level->id }}">Stage {{ $level->gameStage->stage }} Level {{ $level->level
								}}</option>
							@endforeach
						</select>

						@error('level')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>

				<div class="form-group">
					<label for="topic" class="col-md-4 col-form-label text-md-right">Topic</label>

					<div class="col">
						<select id="topic" name="topic_id" class="form-control">
							<option value="" selected disabled hidden>Choose topic</option>
							@foreach ($topics as $topic)
							<option value="{{ $topic->id }}">{{ Str::ucfirst(Str::replace('_', ' ', $topic->topic)) }}</option>
							@endforeach
						</select>

						@error('topic')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>
				<br />

				<div class="text-center ">
					<button type="submit" class="btn btn-success newAddQuestion">Create</button>
				</div>
			</form>
		</div>

	</div>
</div>

@endsection