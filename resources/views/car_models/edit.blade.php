@extends('database.templates.action')

@section('title', 'Edit car model')

@section('route_index')
    {{ route('car_models.index') }}
@endsection

@section('route_form')
    {{ route('car_models.update', $car_model->id) }}
@endsection

@section('form_method')
    @method('PUT')
@endsection

@section('form_body')
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" value="{{ $car_model->name }}" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
            <strong>Car manufacturer:</strong>
            <input type="text" name="manufacturer_id" value="{{ $car_model->manufacturer_id }}" class="form-control" placeholder="Name">
        </div>
    </div>
@endsection