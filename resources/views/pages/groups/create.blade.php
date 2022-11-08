@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')
    <div class="container box">
        <h1>Criar turma</h1>

        @component('components.groups.group-form-create', ['courses' =>$courses])
        @endcomponent

    </div>

@endsection
