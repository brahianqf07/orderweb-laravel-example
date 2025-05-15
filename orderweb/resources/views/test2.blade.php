@extends('templates.base')
@section('title', 'Test2')
@section('content')

    <h1>Test 2</h1>
    <q>No soy hombre de plegarias,
        pero si estás en el cielo ayudame Superman!</q>
    <small>Homero J. Simpson</small>
    <button onclick="show_alert()">Clic!</button>
    
@endsection
@section('scripts')
<script src="{{ asset('js/test.js') }}"></script>
@endsection

