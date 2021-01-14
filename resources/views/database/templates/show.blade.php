@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>@yield('title')</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="@yield('route_index')" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @yield('show_content')

@endsection