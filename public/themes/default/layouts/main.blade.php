@extends('layouts.clean')
@section('body_content')
    @include('partials.header')

    <div class="container">
        <div class="col-md-3 sidebar">
            @include('partials.column_left')
        </div>
        <div class="col-md-6">
            @yield('content')
        </div>
        <div class="col-md-3">
            @include('partials.column_right')
        </div>
    </div>

    @include('partials.footer')
@stop