@extends('database.templates.action')

@section('title', 'Add new fuel type')

@section('route_index')
    {{ route('fuel_types.index') }}
@endsection

@section('route_form')
    {{ route('fuel_types.store') }}
@endsection

@section('form_body')
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" class="form-control" placeholder="name">
        </div>
    </div>
@endsection