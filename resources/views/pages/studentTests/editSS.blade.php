@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')
    <div class="container box">
        <h1>Notas - Dinâmicas de Grupo</h1>

        @component('components.studentTests.studentTest-form-editSS',[
            'groupTest' => $groupTest,
            'testID'    => $testID,
            'students'  => $students,
            'tests'     => $tests,
            'groups'    => $groups,
            ])
        @endcomponent
    </div>

@endsection
