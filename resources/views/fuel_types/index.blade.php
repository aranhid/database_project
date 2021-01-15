@extends('database.templates.index')

@section('title', 'Fuel types')

@section('route_create')
    {{ route('fuel_types.create') }}
@endsection

@section('index_content')
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($fuelTypes as $fuelType)
            <tr>
                <td>{{ $fuelType->id }}</td>
                <td>{{ $fuelType->name }}</td>
                <td>
                    <form action="{{ route('fuel_types.destroy', $fuelType->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a href="{{ route('fuel_types.show', $fuelType->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('fuel_types.edit', $fuelType->id) }}">
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

    {!! $fuelTypes->links() !!}

@endsection
