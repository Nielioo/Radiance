@extends('layouts.mainLayout')

@section('title', $title)

@section('mainContent')

<div class="container newLogin">
	<div class="row justify-content-center">
		<h1 class="loginLogin">Edit Question</h1>

		<!-- Content Row -->
		<div class="">
			@php
			$answerId1 = $problem->gameAnswers[0];
			$answerId2 = $problem->gameAnswers[1];
			$answerId3 = $problem->gameAnswers[2];
			$answerId4 = $problem->gameAnswers[3];
			@endphp
			<form
				action="{{ route('adminProblem.update', ['adminProblem' => $problem->id, 'answerId1' => $answerId1, 'answerId2' => $answerId2, 'answerId3' => $answerId3, 'answerId4' => $answerId4]) }}"
				method="POST" class="newLoginForm">
				@csrf
				<input type="hidden" name="_method" value="PATCH">

				<div class="form-group">
					<label for="problem" class="col-md-4 col-form-label text-md-right">Question</label>

					<div class="col">
						<textarea id="problem" type="textarea"
							class="form-control @error('problem') is-invalid @enderror" name="problem" rows="5" required
							autofocus>{{ $problem->problem }}</textarea>
						@error('problem')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>


				@foreach ($problem->gameAnswers as $answer)
				<div class="form-group">
					<label for="answer{{ $loop->iteration }}" class="col-md-4 col-form-label text-md-right">Answer
						Option {{ $loop->iteration }}</label>

					<div class="row">
						<div class="col">
							<input id="answer{{ $loop->iteration }}" type="text"
								class="form-control @error('answer{{ $loop->iteration }}') is-invalid @enderror"
								name="answer{{ $loop->iteration }}" value="{{ $answer->answer }}" required autofocus>

							@error('answer{{ $loop->iteration }}')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						<div class="col-3">
							<select id="isTrue{{ $loop->iteration }}" name="isTrue{{ $loop->iteration }}"
								class="form-control">
								<option value="0" {{ $answer->isTrue == 1 ? 'selected' : '' }}>False</option>
								<option value="1" {{ $answer->isTrue == 1 ? 'selected' : '' }}>True</option>
							</select>

							@error('isTrue{{ $loop->iteration }}')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>
				</div>
				@endforeach

				<div class="form-group">
					<label for="level" class="col-md-4 col-form-label text-md-right">Level</label>

					<div class="col">
						<select id="level" name="level_id" class="form-control">
							<option value="" {{ $level->id == null ? 'selected' : '' }}>None</option>
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
							@foreach ($topics as $topic)
							<option value="{{ $topic->id }}">{{ $topic->topic }}</option>
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
					<button type="submit" class="btn btn-success newAddQuestion">Update</button>
				</div>
			</form>
		</div>

	</div>
</div>

@endsection