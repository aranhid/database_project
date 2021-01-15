@extends('database.templates.index')

@section('title', 'Car generations')

@section('route_create')
    {{ route('car_generations.create') }}
@endsection

@section('index_content')
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Model id</th>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($carGenerations as $carGeneration)
            <tr>
                <td>{{ $carGeneration->id }}</td>
                <td>{{ $carGeneration->model_id }}</td>
                <td>{{ $carGeneration->name }}</td>
                <td>
                    <form action="{{ route('car_generations.destroy', $carGeneration->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a href="{{ route('car_generations.show', $carGeneration->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('car_generations.edit', $carGeneration->id) }}">
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

    {!! $carGenerations->links() !!}

@endsection
