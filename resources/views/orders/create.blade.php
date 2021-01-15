@extends('database.templates.action')

@section('title', 'Add new order')

@section('route_index')
    {{ route('orders.index') }}
@endsection

@section('route_form')
    {{ route('orders.store') }}
@endsection

@section('form_body')
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Client:</strong>
            <select name="client_id" class="form-select" aria-label="Default select example">
                @foreach ($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->firstname }} {{ $client->lastname }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Manager:</strong>
            <select name="manager_id" class="form-select" aria-label="Default select example">
                @foreach ($managers as $manager)
                    <option value="{{ $manager->id }}">{{ $manager->firstname }} {{ $manager->lastname }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Car:</strong>
            <select name="car_id" class="form-select" aria-label="Default select example">
                @foreach ($cars as $car)
                    <option value="{{ $car->id }}">{{ $car->manufacturer->name }}  {{ $car->model->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Price:</strong>
            <input type="number" name="price">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Status:</strong>
            <input type="text" name="status">
        </div>
    </div>
@endsection
