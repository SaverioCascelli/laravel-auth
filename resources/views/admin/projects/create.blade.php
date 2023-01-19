@extends('layouts.admin')

@section('content')
    <form class="m-5" action="{{ route('admin.projects.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="name" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="client_name" class="form-label">Client name</label>
            <input type="client_name" class="form-control" id="client_name" name="client_name">
        </div>

        <div class="mb-3">
            <label for="summary" class="form-label">Summary</label>
            <input type="summary" class="form-control" id="summary" name="summary">
        </div>
        <div class="mb-3">
            <label for="cover_img" class="form-label">Cover img</label>
            <input type="cover_img" class="form-control" id="cover_img" name="cover_img">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
