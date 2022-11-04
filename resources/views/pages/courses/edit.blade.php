@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')
    <div class="container box">
        <h1>Edit Courses</h1>

        @component('components.groups.group-form-edit'
       //['player' => $player, 'countries' => $countries]
        )
        @endcomponent
    </div>

@endsection
