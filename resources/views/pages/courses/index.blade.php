@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')
    <div class="container box">
        <h1>Cursos</h1>

        @component('components.courses.courses-list', ['courses' =>$courses]);
        @endcomponent
    </div>

@endsection
