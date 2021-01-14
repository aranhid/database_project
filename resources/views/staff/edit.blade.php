@extends('database.templates.action')

@section('title', 'Edit position')

@section('route_index')
    {{ route('staff.index') }}
@endsection

@section('route_form')
    {{ route('staff.update', $employee->id) }}
@endsection

@section('form_method')
    @method('PUT')
@endsection

@section('form_body')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>First name:</strong>
            <input type="text" name="firstname" value="{{ $employee->firstname }}" class="form-control" placeholder="Firstname">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Second name:</strong>
            <input type="text" name="secondname" value="{{ $employee->secondname }}" class="form-control" placeholder="Secondname">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Last name:</strong>
            <input type="text" name="lastname" value="{{ $employee->lastname }}" class="form-control" placeholder="Lastname">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Position:</strong>
            <input type="text" name="position_id" value="{{ $employee->position_id }}" class="form-control" placeholder="Position">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Work phone:</strong>
            <input type="text" name="work_phone" value="{{ $employee->work_phone }}" class="form-control" placeholder="Workphone">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Personal phone:</strong>
            <input type="text" name="personal_phone" value="{{ $employee->personal_phone }}" class="form-control" placeholder="Personalphone">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Birth date:</strong>
            <input type="date" name="birth_date" value="{{ $employee->birth_date }}" class="form-control" placeholder="Birthdate">
        </div>
    </div>
@endsection
