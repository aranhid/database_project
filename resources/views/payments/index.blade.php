@extends('database.templates.index')

@section('title', 'Payments')

@section('route_create')
    {{ route('payments.create') }}
@endsection

@section('index_content')
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Order</th>
            <th>Payment method</th>
            <th>Paid amount</th>
            <th>Reversed amount</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($payments as $payment)
            <tr>
                <td>{{ $payment->id }}</td>
                <td>{{ $payment->order->client->firstname }} {{ $payment->order->client->lastname }} -
                    {{ $payment->order->car->manufacturer->name }} {{ $payment->order->car->model->name }}</td>
                <td>{{ $payment->payment_method->name }}</td>
                <td>{{ $payment->paid_amount }}</td>
                <td>{{ $payment->reversed_amount }}</td>
                <td>
                    <form action="{{ route('payments.destroy', $payment->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a href="{{ route('payments.show', $payment->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('payments.edit', $payment->id) }}">
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

    {!! $payments->links() !!}

@endsection
