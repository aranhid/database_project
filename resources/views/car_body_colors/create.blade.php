@extends('database.templates.action')

@section('title', 'Add new color')

@section('route_index')
    {{ route('car_body_colors.index') }}
@endsection

@section('route_form')
    {{ route('car_body_colors.store') }}
@endsection

@section('form_body')
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" class="form-control" placeholder="name">
        </div>
    </div>
@endsection