@extends('database.templates.action')

@section('title', 'Edit car')

@section('route_index')
    {{ route('cars.index') }}
@endsection

@section('route_form')
    {{ route('cars.update', $car->id) }}
@endsection

@section('form_method')
    @method('PUT')
@endsection

@section('form_body')
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Manufacturer:</strong>
        <select name="manufacturer_id" class="form-select" aria-label="Default select example">
            @foreach ($manufacturers as $manufacturer)
                <option value="{{ $manufacturer->id }}"
                    @if ($manufacturer->id == $car->manufacturer_id)
                        selected
                    @endif
                    >{{ $manufacturer->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <strong>Model:</strong>
        <select name="model_id" class="form-select" aria-label="Default select example">
            @foreach ($models as $model)
                <option value="{{ $model->id }}"
                    @if ($model->id == $car->model_id)
                        selected
                    @endif
                    >{{ $model->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <strong>Generation:</strong>
        <select name="generation_id" class="form-select" aria-label="Default select example">
            @foreach ($generations as $generation)
                <option value="{{ $generation->id }}"
                    @if ($generation->id == $car->generation_id)
                        selected
                    @endif
                    >{{ $generation->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <strong>Body type:</strong>
        <select name="body_type_id" class="form-select" aria-label="Default select example">
            @foreach ($bodyTypes as $bodyType)
                <option value="{{ $bodyType->id }}"
                    @if ($bodyType->id == $car->body_type_id)
                        selected
                    @endif
                    >{{ $bodyType->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <strong>Body color:</strong>
        <select name="body_color_id" class="form-select" aria-label="Default select example">
            @foreach ($bodyColors as $bodyColor)
                <option value="{{ $bodyColor->id }}"
                    @if ($bodyColor->id == $car->body_color_id)
                        selected
                    @endif
                    >{{ $bodyColor->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <strong>Drive type:</strong>
        <select name="drive_type_id" class="form-select" aria-label="Default select example">
            @foreach ($driveTypes as $driveType)
                <option value="{{ $driveType->id }}"
                    @if ($driveType->id == $car->drive_type_id)
                        selected
                    @endif
                    >{{ $driveType->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <strong>Transmission type:</strong>
        <select name="transmission_type_id" class="form-select" aria-label="Default select example">
            @foreach ($transmissionTypes as $transmissionType)
                <option value="{{ $transmissionType->id }}"
                    @if ($transmissionType->id == $car->transmission_type_id)
                        selected
                    @endif
                    >{{ $transmissionType->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <strong>Fuel type:</strong>
        <select name="fuel_type_id" class="form-select" aria-label="Default select example">
            @foreach ($fuelTypes as $fuelType)
                <option value="{{ $fuelType->id }}"
                    @if ($fuelType->id == $car->fuel_type_id)
                        selected
                    @endif
                    >{{ $fuelType->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <strong>Assembly date:</strong>
        <input type="number" name="assembly_date" value="{{ $car->assembly_date }}" min="1900" max="2100">
    </div>
    <div class="form-group">
        <strong>Price:</strong>
        <input type="number" name="price" value="{{ $car->price }}">
    </div>
    <div class="form-group">
        <strong>State:</strong>
        <select name="state_id" class="form-select" aria-label="Default select example">
            @foreach ($states as $state)
                <option value="{{ $state->id }}"
                    @if ($state->id == $car->state_id)
                        selected
                    @endif
                    >{{ $state->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <strong>Status:</strong>
        <select name="status_id" class="form-select" aria-label="Default select example">
            @foreach ($statuses as $status)
                <option value="{{ $status->id }}"
                    @if ($status->id == $car->status_id)
                        selected
                    @endif
                    >{{ $status->name }}</option>
            @endforeach
        </select>
    </div>
</div>
@endsection