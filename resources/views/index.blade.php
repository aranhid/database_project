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
        </ul>
    </div>
@endsection