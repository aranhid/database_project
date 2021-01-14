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
        </ul>
    </div>
@endsection