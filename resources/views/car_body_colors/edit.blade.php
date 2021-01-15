@extends('database.templates.action')

@section('title', 'Edit color')

@section('route_index')
    {{ route('car_body_colors.index') }}
@endsection

@section('route_form')
    {{ route('car_body_colors.update', $carBodyColor->id) }}
@endsection

@section('form_method')
    @method('PUT')
@endsection

@section('form_body')
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" value="{{ $carBodyColor->name }}" class="form-control" placeholder="Name">
        </div>
    </div>
@endsection