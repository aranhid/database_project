@extends('database.templates.action')

@section('title', 'Add new car generation')

@section('route_index')
    {{ route('car_generations.index') }}
@endsection

@section('route_form')
    {{ route('car_generations.store') }}
@endsection

@section('form_body')
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
            <strong>Model id:</strong>
            <input type="text" name="model_id" class="form-control" placeholder="Model id">
        </div>
    </div>
@endsection