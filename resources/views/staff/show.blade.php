@extends('database.templates.show')

@section('title')
    {{ $staff->name }}
@endsection

@section('route_index')
    {{ route('staff.index') }}
@endsection

@section('show_content')
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Firstname:</strong>
            {{ $staff->firstname }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Secondname:</strong>
            {{ $staff->secondname }}
        </div>
    </div>
@endsection
