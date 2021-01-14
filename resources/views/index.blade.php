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
        </ul>
    </div>
@endsection