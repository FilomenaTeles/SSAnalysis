@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')
    <div class="container box">
        <h1>Registar notas dos testes</h1>

        @component('components.studentTests.studentTests-list')
        @endcomponent
    </div>

@endsection
