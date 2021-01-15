@extends('database.templates.show')

@section('title')
    {{ $carTransmissionType->name }}
@endsection

@section('route_index')
    {{ route('car_transmission_types.index') }}
@endsection

@section('show_content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $carTransmissionType->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Created:</strong>
                {{ date_format($carTransmissionType->created_at, 'jS M Y') }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Updated:</strong>
                {{ date_format($carTransmissionType->updated_at, 'jS M Y') }}
            </div>
        </div>
    </div>
@endsection
