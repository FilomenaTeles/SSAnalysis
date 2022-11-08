@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')

    @component('components.tests.test-form-create', [
    'tests' => $tests,
    'testTypes' => $testTypes,
    'testPhases' => $testPhases,
    'students' => $students,
    'groups' => $groups
    ])
    @endcomponent

@endsection

