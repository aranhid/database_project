@extends('database.templates.action')

@section('title', 'Add new car')

@section('route_index')
    {{ route('cars.index') }}
@endsection

@section('route_form')
    {{ route('cars.store') }}
@endsection

@section('form_body')
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Manufacturer:</strong>
            <select name="manufacturer_id" class="form-select" aria-label="Default select example">
                @foreach ($manufacturers as $manufacturer)
                    <option value="{{ $manufacturer->id }}">{{ $manufacturer->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <strong>Model:</strong>
            <select name="model_id" class="form-select" aria-label="Default select example">
                @foreach ($models as $model)
                    <option value="{{ $model->id }}">{{ $model->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <strong>Generation:</strong>
            <select name="generation_id" class="form-select" aria-label="Default select example">
                @foreach ($generations as $generation)
                    <option value="{{ $generation->id }}">{{ $generation->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <strong>Body type:</strong>
            <select name="body_type_id" class="form-select" aria-label="Default select example">
                @foreach ($bodyTypes as $bodyType)
                    <option value="{{ $bodyType->id }}">{{ $bodyType->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <strong>Body color:</strong>
            <select name="body_color_id" class="form-select" aria-label="Default select example">
                @foreach ($bodyColors as $bodyColor)
                    <option value="{{ $bodyColor->id }}">{{ $bodyColor->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <strong>Drive type:</strong>
            <select name="drive_type_id" class="form-select" aria-label="Default select example">
                @foreach ($driveTypes as $driveType)
                    <option value="{{ $driveType->id }}">{{ $driveType->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <strong>Transmission type:</strong>
            <select name="transmission_type_id" class="form-select" aria-label="Default select example">
                @foreach ($transmissionTypes as $transmissionType)
                    <option value="{{ $transmissionType->id }}">{{ $transmissionType->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <strong>Fuel type:</strong>
            <select name="fuel_type_id" class="form-select" aria-label="Default select example">
                @foreach ($fuelTypes as $fuelType)
                    <option value="{{ $fuelType->id }}">{{ $fuelType->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <strong>Assembly date:</strong>
            <input type="number" name="assembly_date" min="1900" max="2100">
        </div>
        <div class="form-group">
            <strong>Price:</strong>
            <input type="number" name="price">
        </div>
        <div class="form-group">
            <strong>State:</strong>
            <select name="state_id" class="form-select" aria-label="Default select example">
                @foreach ($states as $state)
                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <strong>Status:</strong>
            <select name="status_id" class="form-select" aria-label="Default select example">
                @foreach ($statuses as $status)
                    <option value="{{ $status->id }}">{{ $status->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
@endsection
