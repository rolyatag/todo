@extends('layouts.app')

@section('content')
    <h2>Checklists</h2>
    <p><a href="{{ url('/checklists/create') }}">Add a Checklist</a></p>

    @if ($checklists->count() == 0)
        <p>There are no checklists in the system.</p>
    @else
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($checklists as $checklist)
                <tr>
                    <td>{{ $checklist->name }}</td>
                    <td>{{ $checklist->description }}</td>
                    <td>
                        <a href="{{ route('checklists.show', $checklist->id) }}">View</a> -
                        <a href="{{ route('checklists.edit', $checklist->id) }}">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
@stop

