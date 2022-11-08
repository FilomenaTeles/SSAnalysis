@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')
    <div class="container box">
        <h1>Visualizar turmas</h1>

        @component('components.groups.group-form-show',
           [
            'group' => $group,
            'courses' => $courses
        ])
        @endcomponent
    </div>

@endsection
