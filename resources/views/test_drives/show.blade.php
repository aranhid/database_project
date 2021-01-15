@extends('database.templates.show')

@section('title')
    ID {{ $testDrive->id }}
@endsection

@section('route_index')
    {{ route('test_drives.index') }}
@endsection

@section('show_content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Car:</strong>
                {{ $testDrive->car->manufacturer->name }} {{ $testDrive->car->model->name }}
                {{ $testDrive->car->assembly_date }} {{ $testDrive->car->body_color->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Manager:</strong>
                {{ $testDrive->manager->firstname }} {{ $testDrive->manager->secondname }}
                {{ $testDrive->manager->lastname }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Client:</strong>
                {{ $testDrive->client->firstname }} {{ $testDrive->client->secondname }} {{ $testDrive->client->lastname }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Planned time:</strong>
                {{ $testDrive->planned_time }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                {{ $testDrive->status }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Created:</strong>
                {{ date_format($testDrive->created_at, 'jS M Y') }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Updated:</strong>
                {{ date_format($testDrive->updated_at, 'jS M Y') }}
            </div>
        </div>
    </div>
@endsection
