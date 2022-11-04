@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')
    <div class="container box">
        @component('components.users.user-form-create',[
            'userTypes'=>$userTypes
        ])
        @endcomponent
    </div>

@endsection
