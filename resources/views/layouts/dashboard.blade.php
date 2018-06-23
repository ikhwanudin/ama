@extends('layouts.master')

@section('main')
    @include('partials.navbar')
    <div class="container mt-4">
        @yield('content')
    </div>
@endsection