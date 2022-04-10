@extends('layouts.dashboard')

@section('title')
    Dashboard main page
@endsection

@section('breadcrumbs')
    breadcrumb
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Welcome {{ Auth::user()->name }}</h2>
        </div>
    </div>
@endsection