@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')
    <div class="container box">
        <h1>Edit Courses</h1>

        @component('components.courses.course-form-edit'
//       ['couser' => $course]
        )
        @endcomponent
    </div>

@endsection
