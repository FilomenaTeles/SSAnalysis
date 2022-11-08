@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')
    <div class="container box">
        <h1>Visualizar cursos</h1>

        @component('components.courses.course-form-show'

        )
        @endcomponent

    </div>

@endsection
