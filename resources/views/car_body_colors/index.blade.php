@extends('database.templates.index')

@section('title', 'Car body colors')

@section('route_create')
    {{ route('car_body_colors.create') }}
@endsection

@section('index_content')
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($carBodyColors as $carBodyColor)
            <tr>
                <td>{{ $carBodyColor->id }}</td>
                <td>{{ $carBodyColor->name }}</td>
                <td>
                    <form action="{{ route('car_body_colors.destroy', $carBodyColor->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a href="{{ route('car_body_colors.show', $carBodyColor->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('car_body_colors.edit', $carBodyColor->id) }}">
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

    {!! $carBodyColors->links() !!}

@endsection
