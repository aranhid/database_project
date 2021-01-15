@extends('layouts.app')

@section('content')
    <h2>Databases</h2>
    <div>
        <ul>
            <li>
                <a href="{{ route('positions.index') }}">Positions</a>
            </li>
            <li>
                <a href="{{ route('staff.index') }}">Staff</a>
            </li>
            <li>
                <a href="{{ route('clients.index') }}">Clients</a>
            </li>
            <li>
                <a href="{{ route('car_manufacturers.index') }}">Car manufacturers</a>
            </li>
            <li>
                <a href="{{ route('car_models.index') }}">Car models</a>
            </li>
            <li>
                <a href="{{ route('car_generations.index') }}">Car generations</a>
            </li>
            <li>
                <a href="{{ route('car_body_types.index') }}">Car body types</a>
            </li>
            <li>
                <a href="{{ route('car_body_colors.index') }}">Car body colors</a>
            </li>
            <li>
                <a href="{{ route('car_drive_types.index') }}">Car drive types</a>
            </li>
            <li>
                <a href="{{ route('car_transmission_types.index') }}">Car transmission types</a>
            </li>
            <li>
                <a href="{{ route('fuel_types.index') }}">Fuel types</a>
            </li>
            <li>
                <a href="{{ route('car_statuses.index') }}">Car statuses</a>
            </li>
            <li>
                <a href="{{ route('car_states.index') }}">Car states</a>
            </li>
            <li>
                <a href="{{ route('cars.index') }}">Cars</a>
            </li>
            <li>
                <a href="{{ route('test_drives.index') }}">Test drives</a>
            </li>
            <li>
                <a href="{{ route('orders.index') }}">Orders</a>
            </li>
            <li>
                <a href="{{ route('payment_methods.index') }}">Payment methods</a>
            </li>
        </ul>
    </div>
@endsection