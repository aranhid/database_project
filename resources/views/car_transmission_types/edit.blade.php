@extends('database.templates.action')

@section('title', 'Edit transmission')

@section('route_index')
    {{ route('car_transmission_types.index') }}
@endsection

@section('route_form')
    {{ route('car_transmission_types.update', $carTransmissionType->id) }}
@endsection

@section('form_method')
    @method('PUT')
@endsection

@section('form_body')
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" value="{{ $carTransmissionType->name }}" class="form-control" placeholder="Name">
        </div>
    </div>
@endsection