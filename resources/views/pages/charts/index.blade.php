@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')
    <div class="container box">
        <h1>Análise Comparativa</h1>

        @component('components.charts.charts-card',
    [
    'tests'      => $tests,
    'groups'    => $groups,
    'courses'   => $courses
    ])
        @endcomponent

    </div>

@endsection
