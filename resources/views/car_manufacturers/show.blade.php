@extends('database.templates.show')

@section('title')
    {{ $carmanufacturer->name }}
@endsection

@section('route_index')
    {{ route('car_manufacturers.index') }}
@endsection

@section('show_content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $carmanufacturer->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Created:</strong>
                {{ date_format($carmanufacturer->created_at, 'jS M Y') }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Updated:</strong>
                {{ date_format($carmanufacturer->updated_at, 'jS M Y') }}
            </div>
        </div>
    </div>
@endsection
