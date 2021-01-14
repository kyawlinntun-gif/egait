@extends('layout')

@section('content')
    <div class="index">
        @if (Session::get('status'))
            <div class="alert alert-info">
                {{ Session::get('status') }}
            </div>
        @endif
        <h1>Student Crud Step by Step</h1>
        <a href="{{ url('/students/create') }}" class="btn btn-success">Create New Student</a>
        <div class="row">
            <div class="col-12">
                <table class="table table-light">
                    <tbody>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Course</th>
                            <th>Fee</th>
                            <th>Action</th>
                        </tr>
                        @if ($students)
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->course }}</td>
                                    <td>{{ $student->fee }}</td>
                                    <td>
                                        <a href="{{ url('/students/' .  $student->id) }}" class="btn btn-primary">Show</a>
                                        <a href="{{ url('/students/'. $student->id . '/edit') }}" class="btn btn-warning mx-2">Edit</a><a class="btn btn-danger" onClick="event.preventDefault();document.getElementById('delete').submit()">Delete</a>
                                        <form action="{{ url('/students/'. $student->id) }}" method="POST" id="delete">
                                            @csrf()
                                            @method("delete")
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

