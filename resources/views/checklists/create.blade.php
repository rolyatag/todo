@extends('layouts.app')

@section('content')
    <h1>Checklist</h1>
    {!! Form::open(['route' => 'checklists.store']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Add Checklist', ['class'=>'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}
@endsection
@stop