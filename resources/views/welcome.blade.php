@extends('layouts.app')

@section('content')
    <p>Welcome to the To Do List App.</p>
    <ul>
        <li><a href="{{ url('/checklists') }}">Checklists</a></li>
    </ul>
@endsection