@extends('database.templates.action')

@section('title', 'Add new position')

@section('route_index')
    {{ route('positions.index') }}
@endsection

@section('route_form')
    {{ route('positions.store') }}
@endsection

@section('form_body')
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" class="form-control" placeholder="name">
        </div>
    </div>
@endsection