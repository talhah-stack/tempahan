@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h1 class="mb-3">{{ config('app.name', 'Room Booking') }}</h1>
            <p class="lead mb-4">Book and manage rooms online.</p>

            <a class="btn btn-primary me-2" href="{{ route('login') }}">{{ __('Login') }}</a>
            <a class="btn btn-outline-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
        </div>
    </div>
</div>
@endsection
