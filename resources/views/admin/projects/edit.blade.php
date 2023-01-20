@extends('layouts.admin')

@section('content')
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form class="m-5" method="POST" action="{{ route('admin.projects.update', $project) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input value="{{ old('name', $project->name) }}" type="text"
                class="form-control @error('name') is-invalid @enderror" id="name" name="name">
            @error('name')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="client_name" class="form-label">Client name</label>
            <input value="{{ old('client_name', $project->client_name) }}" type="text"
                class="form-control @error('client_name') is-invalid @enderror" id="client_name" name="client_name">
            @error('client_name')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="summary" class="form-label">Summary</label>
            <input value="{{ old('summary', $project->summary) }}" type="text"
                class="form-control @error('summary') is-invalid @enderror" id="summary" name="summary">
            @error('summary')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="cover_img" class="form-label">Cover img</label>
            <input value="{{ old('cover_img', $project->cover_img) }}" type="text"
                class="form-control @error('cover_img') is-invalid @enderror" id="cover_img" name="cover_img">
            @error('cover_img')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
