@extends('database.templates.action')

@section('title', 'Edit position')

@section('route_index')
    {{ route('positions.index') }}
@endsection

@section('route_form')
    {{ route('positions.update', $position->id) }}
@endsection

@section('form_method')
    @method('PUT')
@endsection

@section('form_body')
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" value="{{ $position->name }}" class="form-control" placeholder="Name">
        </div>
    </div>
@endsection