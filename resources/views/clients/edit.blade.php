@extends('database.templates.action')

@section('title', 'Edit client')

@section('route_index')
    {{ route('clients.index') }}
@endsection

@section('route_form')
    {{ route('clients.update', $client->id) }}
@endsection

@section('form_method')
    @method('PUT')
@endsection

@section('form_body')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>First name:</strong>
            <input type="text" name="firstname" value="{{ $client->firstname }}" class="form-control" placeholder="Firstname">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Second name:</strong>
            <input type="text" name="secondname" value="{{ $client->secondname }}" class="form-control" placeholder="Secondname">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Last name:</strong>
            <input type="text" name="lastname" value="{{ $client->lastname }}" class="form-control" placeholder="Lastname">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Position:</strong>
            <input type="text" name="phone" value="{{ $client->phone }}" class="form-control" placeholder="Phone">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Work phone:</strong>
            <input type="text" name="email" value="{{ $client->email }}" class="form-control" placeholder="Email">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Birth date:</strong>
            <input type="date" name="birth_date" value="{{ $client->birth_date }}" class="form-control" placeholder="Birthdate">
        </div>
    </div>
@endsection
