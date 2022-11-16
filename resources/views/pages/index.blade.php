@extends('master.main')

@section('styles')
@stop

@section('scripts')
@stop

@section('content')
    <div class="container">
        <h1>Social Skills Analysis</h1>
    </div>
    @component('components.dashboard.next-tests-list',[
    'tests'      => $tests,
    'students'    => $students,
    'testTypes'  => $testTypes,
    'testPhases' => $testPhases
    ])
    @endcomponent

@endsection
