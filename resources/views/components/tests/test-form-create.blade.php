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
            <label for="">Escolha a(s) turma(s)</label>
            <select name="" id="">
            <!--- Terminar -->
            </select>
        </div>

        <button type="submit" class="mt-2 mb-5 btn btn-primary">Criar teste</button>
        <a href="{{ URL::previous() }}" type="button" id="back-btn" class="mt-2 mb-5 btn">Cancelar</a>

    </form>
</div>


