@extends('database.templates.index')

@section('title', 'Staff')

@section('route_create')
    {{ route('staff.create') }}
@endsection

@section('index_content')
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>First Name</th>
            <th>Second Name</th>
            <th>Last Name</th>
            <th>Position</th>
            <th>Work phone</th>
            <th>Personal phone</th>
            <th>Birth date</th>
            <th>Date Created</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($staff as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->firstname }}</td>
                <td>{{ $employee->secondname }}</td>
                <td>{{ $employee->lastname }}</td>
                <td>{{ $employee->position_id }}</td>
                <td>{{ $employee->work_phone }}</td>
                <td>{{ $employee->personal_phone }}</td>
                <td>{{ $employee->birth_date }}</td>
                <td>{{ date_format($employee->created_at, 'jS M Y') }}</td>
                <td>
                    <form action="{{ route('staff.destroy', $employee->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a href="{{ route('staff.show', $employee->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('staff.edit', $employee->id) }}">
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

    {!! $staff->links() !!}

@endsection
