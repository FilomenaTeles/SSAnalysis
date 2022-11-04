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
            <label for="test_type">Escolha o tipo de teste</label>
            <select name="test_type" id="test_type">
                @foreach($testTypes as $testType)
                    <option value="{{ $testType->id}}">{{ $testType->description}} </option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="test_phase">Escolha a fase do teste</label>
            <select name="test_phase" id="test_phase">
                @foreach($testPhases as $testPhase)
                    <option value="{{ $testPhase->id}}">{{ $testPhase->description}} </option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit" class="mt-2 mb-5 btn btn-primary">Criar teste</button>
        </div>
        <div>
            <a type="button" href="{{ url('/tests') }}" class="btn btn-primary mb-2 ">Cancelar</a>
        </div>
    </form>
</div>


