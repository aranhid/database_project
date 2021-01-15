@extends('database.templates.action')

@section('title', 'Edit car body type')

@section('route_index')
    {{ route('car_body_types.index') }}
@endsection

@section('route_form')
    {{ route('car_body_types.update', $carBodyType->id) }}
@endsection

@section('form_method')
    @method('PUT')
@endsection

@section('form_body')
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" value="{{ $carBodyType->name }}" class="form-control" placeholder="Name">
        </div>
    </div>
@endsection