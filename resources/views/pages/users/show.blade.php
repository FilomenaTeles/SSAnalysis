@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')
    <div class="container box">
        @component('components.users.user-form-show',[
            'user'=>$user
        ])
        @endcomponent
    </div>

@endsection
