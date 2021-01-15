@extends('database.templates.action')

@section('title', 'Edit test drive')

@section('route_index')
    {{ route('test_drives.index') }}
@endsection

@section('route_form')
    {{ route('test_drives.update', $testDrive->id) }}
@endsection

@section('form_method')
    @method('PUT')
@endsection

@section('form_body')
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Car:</strong>
            <select name="car_id" class="form-select" aria-label="Default select example">
                @foreach ($cars as $car)
                    <option value="{{ $car->id }}"
                        @if ($car->id == $testDrive->car_id)
                            selected
                        @endif
                        >{{ $car->manufacturer->name }} {{ $car->model->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Manager:</strong>
            <select name="manager_id" class="form-select" aria-label="Default select example">
                @foreach ($managers as $manager)
                    <option value="{{ $manager->id }}"
                        @if ($manager->id == $testDrive->manager_id)
                            selected
                        @endif
                        >{{ $manager->firstname }} {{ $manager->lastname }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Client:</strong>
            <select name="client_id" class="form-select" aria-label="Default select example">
                @foreach ($clients as $client)
                    <option value="{{ $client->id }}"
                        @if ($client->id == $testDrive->client_id)
                            selected
                        @endif
                        >{{ $client->firstname }} {{ $client->lastname }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Planned time:</strong>
            @php
                $date = new DateTime($testDrive->planned_time)
            @endphp
            <input type="datetime-local" name="planned_time" value="{{ date_format($date, 'Y-m-dTH:i') }}">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Status:</strong>
            <input type="text" name="status" value=" {{ $testDrive->status }}">
        </div>
    </div>
@endsection
