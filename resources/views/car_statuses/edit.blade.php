@extends('database.templates.action')

@section('title', 'Edit car status')

@section('route_index')
    {{ route('car_statuses.index') }}
@endsection

@section('route_form')
    {{ route('car_statuses.update', $carStatus->id) }}
@endsection

@section('form_method')
    @method('PUT')
@endsection

@section('form_body')
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" value="{{ $carStatus->name }}" class="form-control" placeholder="Name">
        </div>
    </div>
@endsection