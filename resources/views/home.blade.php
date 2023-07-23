@extends('layouts.app')
@extends('layouts.nav')

@section('content')
<div class="container" id="app">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <example-component></example-component>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
