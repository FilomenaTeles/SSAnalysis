@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')
    <div class="container box">
        <h1>Editar curso</h1>

        @component('components.courses.course-form-edit'
           /* ['course' => $course ]*/
        )
        @endcomponent
    </div>

@endsection
