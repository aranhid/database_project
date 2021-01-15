@extends('database.templates.index')

@section('title', 'Car body types')

@section('route_create')
    {{ route('car_body_types.create') }}
@endsection

@section('index_content')
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($carBodyTypes as $carBodyType)
            <tr>
                <td>{{ $carBodyType->id }}</td>
                <td>{{ $carBodyType->name }}</td>
                <td>
                    <form action="{{ route('car_body_types.destroy', $carBodyType->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a href="{{ route('car_body_types.show', $carBodyType->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('car_body_types.edit', $carBodyType->id) }}">
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

    {!! $carBodyTypes->links() !!}

@endsection
