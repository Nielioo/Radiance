@extends('layouts.mainDashboard')

@section('title', $title)

@section('adminName', $adminName)

@section('mainContent')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row mb-3">
            <div class="col mt-0">
                <h1 class="h3 my-3 text-gray-800">Game Questions</h1>
            </div>
            <div class="col d-flex justify-content-end">
                <div>
                    <a href="{{ route('adminProblem.create') }}" class="btn btn-outline-primary my-3">
                        + Add Problem
                    </a>
                </div>
            </div>
        </div>

        <div class="container-fluid pb-5">
            <table class="table table-striped table-bordered table-responsive-sm" id="table">
                <thead class="">
                    <tr class="text-center">
                        <th class="col col-1">No</th>
                        <th class="col col-8">Problem</th>
                        <th class="col col-1">Stage</th>
                        <th class="col col-2">Action</th>
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
                                <span class="d-inline-block">
                                    <form action="{{ route('adminProblem.destroy', $problem->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </span>
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
        </div>
    </div>
    <!-- /.container-fluid -->

    <!-- End of Main Content -->
@endsection

@section('script')
    {{-- Boostrap 5 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    {{-- jQuery --}}
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    {{-- DataTables --}}
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.js"></script>
    <script>
        $(document).ready(function() {
            var thetable = $('#table').DataTable({});
        });
    </script>
@endsection
