<h4>Editar teste</h4>
<br>
<div class="container">

    <?php $contador = 0 ?>

<form method="POST" action="{{ url('/tests/'.$test->id) }}">
{{ csrf_field() }}
{{ method_field('put') }}

    <div class="form-group">
        <label for="test_date">Data do teste</label>
        <input
            type="date"
            id="test_date"
            name="test_date"
            class="form-control"
            value="{{$test->test_date}}"
            required
        >
    </div>
    <br>
    <div class="form-group">
        <label for="test_type_id">Escolha o tipo de teste</label>
        <select name="test_type_id" id="test_type_id">
            @foreach($testTypes as $testType)
                @if($testType->id === $test->test_type_id)
                <option value="{{ $testType->id}}" selected>{{ $testType->description}} </option>
                @else
                <option value="{{ $testType->id}}">{{ $testType->description}} </option>
                @endif
            @endforeach
        </select>
    </div>
    <br>
    <div class="form-group">
        <label for="test_phase_id">Escolha a fase do teste</label>
        <select name="test_phase_id" id="test_phase_id">
            @foreach($testPhases as $testPhase)
                @if($testPhase->id === $test->test_phase_id)
                <option value="{{ $testPhase->id}}" selected>{{ $testPhase->description}} </option>
                @else
                <option value="{{ $testPhase->id}}">{{ $testPhase->description}} </option>
                @endif
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="group_id">Escolha a turma</label>
        <select name="group_id" id="group_id" class="custom-select" >
            @foreach($test->students as $student)
                @if($contador == 0)
                <option value="{{ $student->group->id }}" selected>{{ $student->group->edition }} </option>
                    <input type="text" value="{{$contador++}}"hidden>
                @endif
            @endforeach
        </select>
    </div>

    <button type="submit" class="mt-2 mb-5 btn btn-primary">Salvar</button>
    <a href="{{ URL::previous() }}" type="button" id="back-btn" class="mt-2 mb-5 btn">Cancelar</a>
</form>
</div>
