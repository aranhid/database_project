@extends('database.templates.index')

@section('title', 'Car models')

@section('route_create')
    {{ route('car_models.create') }}
@endsection

@section('index_content')
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Manufacturer</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($carModels as $carModel)
            <tr>
                <td>{{ $carModel->id }}</td>
                <td>{{ $carModel->name }}</td>
                <td>{{ $carModel->manufacturer->name }}</td>
                <td>
                    <form action="{{ route('car_models.destroy', $carModel->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a href="{{ route('car_models.show', $carModel->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('car_models.edit', $carModel->id) }}">
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

    {!! $carModels->links() !!}

@endsection
