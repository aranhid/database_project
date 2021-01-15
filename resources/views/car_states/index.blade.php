@extends('database.templates.index')

@section('title', 'Car states')

@section('route_create')
    {{ route('car_states.create') }}
@endsection

@section('index_content')
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($carStates as $carState)
            <tr>
                <td>{{ $carState->id }}</td>
                <td>{{ $carState->name }}</td>
                <td>
                    <form action="{{ route('car_states.destroy', $carState->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a href="{{ route('car_states.show', $carState->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('car_states.edit', $carState->id) }}">
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

    {!! $carStates->links() !!}

@endsection
