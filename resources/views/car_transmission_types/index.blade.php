@extends('database.templates.index')

@section('title', 'Car transmission types')

@section('route_create')
    {{ route('car_transmission_types.create') }}
@endsection

@section('index_content')
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($carTransmissionTypes as $carTransmissionType)
            <tr>
                <td>{{ $carTransmissionType->id }}</td>
                <td>{{ $carTransmissionType->name }}</td>
                <td>
                    <form action="{{ route('car_transmission_types.destroy', $carTransmissionType->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a href="{{ route('car_transmission_types.show', $carTransmissionType->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('car_transmission_types.edit', $carTransmissionType->id) }}">
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

    {!! $carTransmissionTypes->links() !!}

@endsection
