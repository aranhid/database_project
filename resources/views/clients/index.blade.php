@extends('database.templates.index')

@section('title', 'Clients')

@section('route_create')
    {{ route('clients.create') }}
@endsection

@section('index_content')
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>First Name</th>
            <th>Second Name</th>
            <th>Last Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Birth date</th>
            <th>Date Created</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($clients as $client)
            <tr>
                <td>{{ $client->id }}</td>
                <td>{{ $client->firstname }}</td>
                <td>{{ $client->secondname }}</td>
                <td>{{ $client->lastname }}</td>
                <td>{{ $client->phone }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->birth_date }}</td>
                <td>{{ date_format($client->created_at, 'jS M Y') }}</td>
                <td>
                    <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a href="{{ route('clients.show', $client->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('clients.edit', $client->id) }}">
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

    {!! $clients->links() !!}

@endsection