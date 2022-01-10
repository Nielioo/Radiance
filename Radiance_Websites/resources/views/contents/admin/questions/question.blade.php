@extends('layouts.mainLayout')

@section('mainContent')

<div>
	<a href="{{ route('adminProblem.create') }}" class="btn btn-outline-primary my-3">
		+ Add Problem
	</a>
</div>

<table class="table table-striped table-bordered table-responsive-sm">
	<thead class="">
		<tr class="text-center">
			<th scope="col">No</th>
			<th scope="col">Problem</th>
			<th scope="col">Stage</th>
			<th scope="col">Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($problems as $problem)
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $problem->problem }}</td>
			@if ($problem->gameLevel != null)
			<td>{{ $problem->gameLevel->gameStage->stage }}</td>
			@else
			<td>-</td>
			@endif
			{{-- <td>{{ $problem->gameTopic->topic }}</td> --}}
			<td>
				<a href="{{ route('adminProblem.edit', $problem) }}" class="btn btn-primary">Edit</a>
				<form action="{{ route('adminProblem.destroy', $problem) }}" method="POST">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>
		</tr>
		@endforeach
		{{-- @foreach ($courses as $course)
		<tr>
			<td class="text-center">{{ $loop->iteration }}</td>
			<td>{{ $course['course_id'] }}</td>
			<td><a href="{{ route('courses.show', $course) }}">{{ $course['name'] }}</a></td>
			<td>{{ $course['lecturer'] }}</td>
			<td>{{ $course['sks'] }}</td>
			<td>
				<a href="{{ route('courses.edit', $course) }}" class="btn btn-primary">Edit</a>
				<form action="{{ route('courses.destroy', $course) }}" method="POST">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>
		</tr>
		@endforeach --}}
	</tbody>
</table>
@endsection