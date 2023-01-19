@extends('layouts.admin')

@section('content')
    <form class="m-5" method="POST" action="{{ route('admin.projects.update', $project) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input value="{{ $project->name }}" type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="client_name" class="form-label">Client name</label>
            <i nput value="{{ $project->client_name }}" type="text" class="form-control" id="client_name"
                name="client_name">
        </div>

        <div class="mb-3">
            <label for="summary" class="form-label">Summary</label>
            <input value="{{ $project->summary }}" type="text" class="form-control" id="summary" name="summary">
        </div>
        <div class="mb-3">
            <label for="cover_img" class="form-label">Cover img</label>
            <input value="{{ $project->cover_img }}" type="text" class="form-control" id="cover_img" name="cover_img">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
