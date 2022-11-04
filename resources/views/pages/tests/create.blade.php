@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')
    <div class="container box">
        <h1>Criar Teste</h1>
    </div>
    @component('components.tests.test-form-create', [
    'tests' => $tests,
    'testTypes' => $testTypes,
    'testPhases' => $testPhases
    ])
    @endcomponent

@endsection

