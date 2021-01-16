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
            <select name="manufacturer_id" class="form-select" aria-label="Default select example">
                @foreach ($manufacturers as $manufacturer)
                    <option value="{{ $manufacturer->id }}"
                        @if ($manufacturer->id == $car_model->manufacturer_id)
                            selected
                        @endif
                        >{{ $manufacturer->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
@endsection