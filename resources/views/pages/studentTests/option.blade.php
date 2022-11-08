@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')
    <div class="container box">


        @component('components.studentTests.studentTests-list',
    [
        'groupTest'  => $groupTest,
        'tests'      => $tests,
        'students'   => $students, //added
        'groups'     => $groups,         //added
        'courses'    => $courses,
        'testTypes'  => $testTypes,
        'testPhases' => $testPhases
    ])
        @endcomponent

    </div>

@endsection
