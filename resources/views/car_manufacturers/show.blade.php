@extends('database.templates.show')

@section('title')
    {{ $carManufacturer->name }}
@endsection

@section('route_index')
    {{ route('car_manufacturers.index') }}
@endsection

@section('show_content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $carManufacturer->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Created:</strong>
                {{ date_format($carManufacturer->created_at, 'jS M Y') }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Updated:</strong>
                {{ date_format($carManufacturer->updated_at, 'jS M Y') }}
            </div>
        </div>
    </div>
@endsection
