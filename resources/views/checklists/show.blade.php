@extends('layouts.app')

@section('content')
    <h2>Checklists</h2>

   <ul>
       <li><strong>Name:</strong> {{ $checklist->name }}</li>
       <li><strong>Description:</strong> {{ $checklist->description }}</li>
   </ul>
@endsection
@stop

