@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')
    <div class="container box">

        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @component('components.studentTests.studentTests-list',
    [
        'groupTest'  => $groupTest,
        'tests'      => $tests,
        'students'   => $students,
        'groups'     => $groups,
        'courses'    => $courses,
        'testTypes'  => $testTypes,
        'testPhases' => $testPhases
    ])
        @endcomponent

    </div>

@endsection
