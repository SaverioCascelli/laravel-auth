@extends('layouts.admin')

@section('content')
    <div class="container text-center mt-5">
        <div class="row">
            <div class="col">
                <img src="{{ $project->cover_img }}" alt="{{ $project->name }}">
                <h1>{{ $project->name }}</h1>
                <h3>client: {{ $project->client_name }}</h3>
                <p>{{ $project->summary }}</p>

            </div>
        </div>
    </div>
@endsection
