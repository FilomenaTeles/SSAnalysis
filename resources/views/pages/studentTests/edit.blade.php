@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')
    <div class="container box">
        <h1>Notas</h1>

        @component('components.studentTests.studentTest-form-edit',[
            'groupTest' => $groupTest,
            'testID'    => $testID,
            'students'  => $students,
            'tests'     => $tests,

            ])
        @endcomponent
    </div>

@endsection
