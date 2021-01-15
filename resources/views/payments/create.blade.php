@extends('database.templates.action')

@section('title', 'Add new payment')

@section('route_index')
    {{ route('payments.index') }}
@endsection

@section('route_form')
    {{ route('payments.store') }}
@endsection

@section('form_body')
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Order:</strong>
            <select name="order_id" class="form-select" aria-label="Default select example">
                @foreach ($orders as $order)
                    <option value="{{ $order->id }}">{{ $order->id }}. {{ $order->client->firstname }}
                        {{ $order->client->lastname }} - {{ $order->car->manufacturer->name }} {{ $order->car->model->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Payment method:</strong>
            <select name="payment_method_id" class="form-select" aria-label="Default select example">
                @foreach ($payment_methods as $payment_method)
                    <option value="{{ $payment_method->id }}">{{ $payment_method->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Paid amount:</strong>
            <input type="number" name="paid_amount">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Reversed amount:</strong>
            <input type="number" name="reversed_amount">
        </div>
    </div>
@endsection
