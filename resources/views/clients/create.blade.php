@extends('database.templates.action')

@section('title', 'Create new client')

@section('route_index')
    {{ route('clients.index') }}
@endsection

@section('route_form')
    {{ route('clients.store') }}
@endsection

@section('form_body')
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>First name:</strong>
            <input type="text" name="firstname" class="form-control" placeholder="Firstname">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Second name:</strong>
            <input type="text" name="secondname" class="form-control" placeholder="Secondname">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Last name:</strong>
            <input type="text" name="lastname" class="form-control" placeholder="Lastname">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Phone:</strong>
            <input type="text" name="phone" class="form-control" placeholder="Phone">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email</strong>
            <input type="text" name="email" class="form-control" placeholder="Email">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Birth date:</strong>
            <input type="date" name="birth_date" class="form-control" placeholder="Birthdate">
        </div>
    </div>
@endsection