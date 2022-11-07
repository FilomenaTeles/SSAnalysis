<div class="container">
    <h4>Criar teste</h4>
    <br>

    <form method="POST" action="{{ url('tests') }}">
        @csrf
        <div class="form-group">
            <label for="test_date">Data do teste</label>
            <input
                type="date"
                id="test_date"
                name="test_date"
                class="form-control"
                required
            >
        </div>
        <br>
        <div class="form-group">
            <label for="test_type_id">Escolha o tipo de teste</label>
            <select name="test_type_id" id="test_type_id">
                @foreach($testTypes as $testType)
                    <option value="{{ $testType->id}}">{{ $testType->description}} </option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="test_phase_id">Escolha a fase do teste</label>
            <select name="test_phase_id" id="test_phase_id">
                @foreach($testPhases as $testPhase)
                    <option value="{{ $testPhase->id}}">{{ $testPhase->description}} </option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="group_id">Escolha a(s) turma(s)</label>
            <select name="group_id[]" id="group_id" class="custom-select" multiple>
                <option selected>Turmas</option>
                <option value="1">WMD0622</option>
                <option value="2">GRSI0921</option>
                <option value="3">SD1122</option>
                <option value="4">CISEG0921</option>
                <option value="5">TPSI1021</option>
            </select>
        </div>

        <button type="submit" class="mt-2 mb-5 btn btn-primary">Criar teste</button>
        <a href="{{ URL::previous() }}" type="button" id="back-btn" class="mt-2 mb-5 btn">Cancelar</a>

    </form>
</div>


