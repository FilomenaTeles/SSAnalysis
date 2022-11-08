@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')
    <div class="container box">
        @component('components.students.student-form-edit',[
            'student' => $student,
            'groups' => $groups
])
        @endcomponent
    </div>

@endsection
