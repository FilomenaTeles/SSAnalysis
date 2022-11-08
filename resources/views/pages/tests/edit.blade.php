@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')
    <div class="container box">

    @component('components.tests.test-form-edit',
    [
    'test' => $test,
    'testTypes' => $testTypes,
    'testPhases' => $testPhases,
    'students' => $students, //added
    'groups' => $groups         //added
    ])
    @endcomponent
    </div>

@endsection
