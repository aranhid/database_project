@extends('database.templates.show')

@section('title')
    ID {{ $payment->id }}
@endsection

@section('route_index')
    {{ route('payments.index') }}
@endsection

@section('show_content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Order:</strong>
                {{ $payment->order->client->firstname }} {{ $payment->order->client->lastname }} -
                {{ $payment->order->car->manufacturer->name }} {{ $payment->order->car->model->name }}
                {{ $payment->order->car->assembly_date }} {{ $payment->order->car->body_color->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Payment method:</strong>
                {{ $payment->payment_method->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Paid amount:</strong>
                {{ $payment->paid_amount }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Reversed amount:</strong>
                {{ $payment->reversed_amount }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Created:</strong>
                {{ date_format($payment->created_at, 'jS M Y') }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Updated:</strong>
                {{ date_format($payment->updated_at, 'jS M Y') }}
            </div>
        </div>
    </div>
@endsection
