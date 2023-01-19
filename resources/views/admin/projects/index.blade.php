@extends('layouts.admin')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Client name</th>
                <th scope="col">actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($data as $project)
                <tr>
                    <th>{{ $project->id }}</th>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->client_name }}</td>
                    <td>
                        <a href="{{ route('admin.projects.show', $project) }}">show </a>
                        <a href="{{ route('admin.projects.edit', $project) }}">edit</a>


                        <button href="">delete</button>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
@endsection
