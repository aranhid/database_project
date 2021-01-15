@extends('database.templates.index')

@section('title', 'Orders')

@section('route_create')
    {{ route('orders.create') }}
@endsection

@section('index_content')
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Client</th>
            <th>Manager</th>
            <th>Car</th>
            <th>Price</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->client->firstname }} {{ $order->client->lastname }}</td>
                <td>{{ $order->manager->firstname }} {{ $order->manager->lastname }}</td>
                <td>{{ $order->car->manufacturer->name }} {{ $order->car->model->name }}</td>
                <td>{{ $order->price }}</td>
                <td>{{ $order->status }}</td>
                <td>
                    <form action="{{ route('orders.destroy', $order->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a href="{{ route('orders.show', $order->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('orders.edit', $order->id) }}">
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

    {!! $orders->links() !!}

@endsection
