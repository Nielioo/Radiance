@extends('layouts.mainLayout')

@section('title', $title)

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
			<td>
				<a href="{{ route('adminProblem.edit', $problem) }}" class="btn btn-primary">Edit</a>
				<form action="{{ route('adminProblem.destroy', $problem->id) }}" method="POST">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection