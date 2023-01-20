@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <table class="table bg-white">
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

                                    <form method="POST" action="{{ route('admin.projects.destroy', $project) }}">
                                        @csrf
                                        @method('DELETE')

                                        <button href="">delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
            {{ $data->links() }}
        </div>
    </div>
@endsection
