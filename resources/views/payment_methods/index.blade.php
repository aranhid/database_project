@extends('database.templates.index')

@section('title', 'Payment methods')

@section('route_create')
    {{ route('payment_methods.create') }}
@endsection

@section('index_content')
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($paymentMethods as $paymentMethod)
            <tr>
                <td>{{ $paymentMethod->id }}</td>
                <td>{{ $paymentMethod->name }}</td>
                <td>
                    <form action="{{ route('payment_methods.destroy', $paymentMethod->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a href="{{ route('payment_methods.show', $paymentMethod->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('payment_methods.edit', $paymentMethod->id) }}">
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

    {!! $paymentMethods->links() !!}

@endsection
