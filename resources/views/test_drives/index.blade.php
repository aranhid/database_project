@extends('database.templates.index')

@section('title', 'Test drives')

@section('route_create')
    {{ route('test_drives.create') }}
@endsection

@section('index_content')
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Car</th>
            <th>Manager</th>
            <th>Client</th>
            <th>Planned time</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($testDrives as $testDrive)
            <tr>
                <td>{{ $testDrive->id }}</td>
                <td>{{ $testDrive->client->firstname }} {{ $testDrive->client->lastname }}</td>
                <td>{{ $testDrive->manager->firstname }} {{ $testDrive->manager->lastname }}</td>
                <td>{{ $testDrive->car->manufacturer->name }} {{ $testDrive->car->model->name }}</td>
                <td>{{ $testDrive->planned_time }}</td>
                <td>{{ $testDrive->status }}</td>
                <td>
                    <form action="{{ route('test_drives.destroy', $testDrive->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a href="{{ route('test_drives.show', $testDrive->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('test_drives.edit', $testDrive->id) }}">
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

    {!! $testDrives->links() !!}

@endsection
