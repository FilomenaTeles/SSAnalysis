<div class="container text-right">
    <a href="{{url('/tests/create')}}" type="button" id="add-btn" class="btn btn-light">Adicionar teste <i
            class="bi bi-plus-circle-fill"></i></a>
</div>
<br>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Data do Teste</th>
        <th scope="col">Turma</th>
        <th scope="col">Tipo de Teste</th>
        <th scope="col">Fase de avaliação</th>
        <th scope="col">Editar</th>
    </tr>
    </thead>
    <tbody>
    @foreach($tests as $test)
        <tr>
            <td>{{$test->test_date}}</td>
            <td>
                @foreach($test -> studentTests as $studentTest)
                    @if(($test->id) == ($studentTest-> test_id))

                        <li>{{$studentTest->student->group->edition}}</li>
                    @endif
                @endforeach
            </td>
            @foreach($testTypes as $testType)
                @if(($testType->id) == ($test-> test_type_id))
                    <td>{{$testType->description}}</td>
                @endif
            @endforeach
            @foreach($testPhases as $testPhase)
                @if(($testPhase->id) == ($test-> test_phase_id))
                    <td>{{$testPhase->description}}</td>
                @endif
            @endforeach
            <td>
                <div class="d-inline-flex p-1 bd-highlight">

                    <a href="{{url('/tests/'.$test->id.'/edit')}}" type="button" class="btn btn-primary"><i
                            class="bi bi-pencil-square"></i></a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

