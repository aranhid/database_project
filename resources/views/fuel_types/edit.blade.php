@extends('database.templates.action')

@section('title', 'Edit fuel type')

@section('route_index')
    {{ route('fuel_types.index') }}
@endsection

@section('route_form')
    {{ route('fuel_types.update', $fuelType->id) }}
@endsection

@section('form_method')
    @method('PUT')
@endsection

@section('form_body')
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" value="{{ $fuelType->name }}" class="form-control" placeholder="Name">
        </div>
    </div>
@endsection