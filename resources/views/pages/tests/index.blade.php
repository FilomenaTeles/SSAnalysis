@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')
    <div class="container box">
        <h1>Testes</h1>


    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @component('components.tests.tests-list', [
   'tests' => $tests,
   'testTypes' => $testTypes,
   'testPhases' => $testPhases,
   'groups' => $groups,
   'students'     => $students,
   ])
    @endcomponent
    </div>
@endsection
