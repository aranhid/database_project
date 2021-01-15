@extends('database.templates.action')

@section('title', 'Edit payment method')

@section('route_index')
    {{ route('payment_methods.index') }}
@endsection

@section('route_form')
    {{ route('payment_methods.update', $paymentMethod->id) }}
@endsection

@section('form_method')
    @method('PUT')
@endsection

@section('form_body')
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" value="{{ $paymentMethod->name }}" class="form-control" placeholder="Name">
        </div>
    </div>
@endsection