@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')
    <div class="container box">
        <h1>Editar aluno</h1>

        @component('components.groups.group-form-edit',
           ['group' => $group ]
        )
        @endcomponent

    </div>

@endsection
