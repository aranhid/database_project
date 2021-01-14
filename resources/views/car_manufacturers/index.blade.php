@extends('database.templates.index')

@section('title', 'Car manufacturers')

@section('route_create')
    {{ route('car_manufacturers.create') }}
@endsection

@section('index_content')
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($carManufacturers as $carManufacturer)
            <tr>
                <td>{{ $carManufacturer->id }}</td>
                <td>{{ $carManufacturer->name }}</td>
                <td>
                    <form action="{{ route('car_manufacturers.destroy', $carManufacturer->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a href="{{ route('car_manufacturers.show', $carManufacturer->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('car_manufacturers.edit', $carManufacturer->id) }}">
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

    {!! $carManufacturers->links() !!}

@endsection
