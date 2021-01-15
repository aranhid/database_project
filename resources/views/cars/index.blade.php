@extends('database.templates.index')

@section('title', 'Cars')

@section('route_create')
    {{ route('cars.create') }}
@endsection

@section('index_content')
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Manufacturer</th>
            <th>Model</th>
            <th>Generation</th>
            <th>Body type</th>
            <th>Body color</th>
            <th>Drive type</th>
            <th>Transmission</th>
            <th>Fuel type</th>
            <th>Assembly date</th>
            <th>Price</th>
            <th>Status</th>
            <th>State</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($cars as $car)
            <tr>
                <td>{{ $car->id }}</td>
                <td>{{ $car->manufacturer->name }}</td>
                <td>{{ $car->model->name }}</td>
                <td>{{ $car->generation->name }}</td>
                <td>{{ $car->body_type->name }}</td>
                <td>{{ $car->body_color->name }}</td>
                <td>{{ $car->drive_type->name }}</td>
                <td>{{ $car->transmission_type->name }}</td>
                <td>{{ $car->fuel_type->name }}</td>
                <td>{{ $car->assembly_date }}</td>
                <td>{{ $car->price }}</td>
                <td>{{ $car->status->name }}</td>
                <td>{{ $car->state->name }}</td>
                <td>
                    <form action="{{ route('cars.destroy', $car->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a href="{{ route('cars.show', $car->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('cars.edit', $car->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>
                        </a>

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $cars->links() !!}

@endsection
