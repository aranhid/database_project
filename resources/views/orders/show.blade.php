@extends('database.templates.show')

@section('title')
    ID {{ $order->id }}
@endsection

@section('route_index')
    {{ route('orders.index') }}
@endsection

@section('show_content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Client:</strong>
                {{ $order->client->firstname }} {{ $order->client->secondname }} {{ $order->client->lastname }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Manager:</strong>
                {{ $order->manager->firstname }} {{ $order->manager->secondname }} {{ $order->manager->lastname }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Car:</strong>
                {{ $order->car->manufacturer->name }} {{ $order->car->model->name }} {{ $order->car->assembly_date }} {{ $order->car->body_color->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                {{ $order->price }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                {{ $order->status }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Created:</strong>
                {{ date_format($order->created_at, 'jS M Y') }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Updated:</strong>
                {{ date_format($order->updated_at, 'jS M Y') }}
            </div>
        </div>
    </div>
@endsection
