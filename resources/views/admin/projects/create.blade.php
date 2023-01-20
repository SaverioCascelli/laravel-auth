@extends('layouts.admin')

@section('content')
    @if ($errors->any())
        <ul class="mt-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form class="m-5" action="{{ route('admin.projects.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input value="{{ old('name') }}" type="text" class="form-control @error('name') is-invalid @enderror"
                name="name">
            @error('name')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="client_name" class="form-label">Client name</label>
            <input value="{{ old('client_name') }}" type="text"
                class="form-control @error('client_name') is-invalid @enderror" name="client_name">
            @error('client_name')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="summary" class="form-label">Summary</label>
            <input value="{{ old('summary') }}" type="text" class="form-control @error('summary') is-invalid @enderror"
                name="summary">
            @error('summary')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="cover_img" class="form-label">Cover img</label>
            <input value="{{ old('cover_img') }}" type="text"
                class="form-control @error('cover_img') is-invalid @enderror" name="cover_img">
            @error('cover_img')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
