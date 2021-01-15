@extends('database.templates.index')

@section('title', 'Car statuses')

@section('route_create')
    {{ route('car_statuses.create') }}
@endsection

@section('index_content')
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($carStatuses as $carStatus)
            <tr>
                <td>{{ $carStatus->id }}</td>
                <td>{{ $carStatus->name }}</td>
                <td>
                    <form action="{{ route('car_statuses.destroy', $carStatus->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a href="{{ route('car_statuses.show', $carStatus->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('car_statuses.edit', $carStatus->id) }}">
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

    {!! $carStatuses->links() !!}

@endsection
