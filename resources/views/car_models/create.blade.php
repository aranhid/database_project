@extends('database.templates.action')

@section('title', 'Add new model')

@section('route_index')
    {{ route('car_models.index') }}
@endsection

@section('route_form')
    {{ route('car_models.store') }}
@endsection

@section('form_body')
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" class="form-control" placeholder="name">
        </div>
        <div class="form-group">
            <strong>Car manufacturer:</strong>
            <select name="manufacturer_id" class="form-select" aria-label="Default select example">
                @foreach ($manufacturers as $manufacturer)
                    <option value="{{ $manufacturer->id }}">{{ $manufacturer->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
@endsection