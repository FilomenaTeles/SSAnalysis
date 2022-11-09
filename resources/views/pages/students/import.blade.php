@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')
    <div class="container box">
        @component('components.students.student-form-import')
        @endcomponent
    </div>

@endsection
