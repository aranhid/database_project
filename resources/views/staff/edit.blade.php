@extends('database.templates.action')

@section('title', 'Edit position')

@section('route_index')
    {{ route('staff.index') }}
@endsection

@section('route_form')
    {{ route('staff.update', $staff->id) }}
@endsection

@section('form_method')
    @method('PUT')
@endsection

@section('form_body')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>First name:</strong>
            <input type="text" name="firstname" value="{{ $staff->firstname }}" class="form-control" placeholder="Firstname">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Second name:</strong>
            <input type="text" name="secondname" value="{{ $staff->secondname }}" class="form-control" placeholder="Secondname">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Last name:</strong>
            <input type="text" name="lastname" value="{{ $staff->lastname }}" class="form-control" placeholder="Lastname">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Position:</strong>
            <select name="position_id" class="form-select" aria-label="Default select example">
                @foreach ($positions as $position)
                    <option value="{{ $position->id }}"
                        @if ($position->id == $staff->position_id)
                            selected
                        @endif
                        >{{ $position->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Work phone:</strong>
            <input type="text" name="work_phone" value="{{ $staff->work_phone }}" class="form-control" placeholder="Workphone">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Personal phone:</strong>
            <input type="text" name="personal_phone" value="{{ $staff->personal_phone }}" class="form-control" placeholder="Personalphone">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Birth date:</strong>
            <input type="date" name="birth_date" value="{{ $staff->birth_date }}" class="form-control" placeholder="Birthdate">
        </div>
    </div>
@endsection
