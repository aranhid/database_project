@extends('database.templates.index')

@section('title', 'Car drive types')

@section('route_create')
    {{ route('car_drive_types.create') }}
@endsection

@section('index_content')
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($carDriveTypes as $carDriveType)
            <tr>
                <td>{{ $carDriveType->id }}</td>
                <td>{{ $carDriveType->name }}</td>
                <td>
                    <form action="{{ route('car_drive_types.destroy', $carDriveType->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a href="{{ route('car_drive_types.show', $carDriveType->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('car_drive_types.edit', $carDriveType->id) }}">
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

    {!! $carDriveTypes->links() !!}

@endsection
