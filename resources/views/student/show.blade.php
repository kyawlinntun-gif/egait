@extends('layout')

@section('content')

    <div class="create">
        <h1>Info of {{ $student->name }}</h1>
        <a href="{{ url('/students') }}" class="btn btn-primary">Back</a>
        <div class="row mt-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Name: {{ $student->name }}</h1>
                        <p>Course: {{ $student->course }}</p>
                        <p>Fee: {{ $student->fee }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection