@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')
    <div class="container box">
        @if(isset($groupId))
            @component('components.students.student-form-create',[
            'groupId' => $groupId
])
            @endcomponent
        @else
        @component('components.students.student-form-create',[
            'groups' => $groups
])
        @endcomponent
        @endif
    </div>

@endsection
