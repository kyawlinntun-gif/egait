@extends('layout')

@section('content')

    <div class="create">
        <h1>Edit New Students</h1>
        <a href="{{ url('/students') }}" class="btn btn-primary">Back</a>
        <div class="row">
            <div class="col-12">
                <form action="{{ url('/students/' . $student->id) }}" method="POST">
                    @csrf()
                    @method('put')
                    <div class="form-group m-2">
                        <label for="name">Student Name</label>
                        <input type="text" id="name" placeholder="Student Name" class="form-control" name="name" value="{{ old('name') ? old('name') : $student->name }}">
                        @error('name')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group m-2">
                        <label for="course">Course</label>
                        <input type="text" id="course" placeholder="Course" class="form-control" name="course" value="{{ old('course') ? old('course') : $student->course }}">
                        @error('course')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group m-2">
                        <label for="fee">Fee</label>
                        <input type="number" id="fee" placeholder="Fee" class="form-control" name="fee" value="{{ old('fee') ? old('fee') : $student->fee }}">
                        @error('fee')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection