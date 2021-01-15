@extends('database.templates.action')

@section('title', 'Edit car state')

@section('route_index')
    {{ route('car_states.index') }}
@endsection

@section('route_form')
    {{ route('car_states.update', $carState->id) }}
@endsection

@section('form_method')
    @method('PUT')
@endsection

@section('form_body')
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" value="{{ $carState->name }}" class="form-control" placeholder="Name">
        </div>
    </div>
@endsection