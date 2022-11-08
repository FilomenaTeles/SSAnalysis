<h1>Registar notas dos testes - <small> {{$groupTest->edition}} </small></h1>
<br>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Data</th>
        <th scope="col">Tipo</th>
        <th scope="col">Fase</th>
        <th scope="col">Registar</th>

    </tr>
    </thead>
    <tbody>
    @foreach($tests as $test)
        @foreach($test-> students as $student)
            @if ($student->group->id == $groupTest->id)
                <tr>
                    <td>{{$test->test_date}} </td>
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
                        <a href=
                            @if($test->test_type_id == 1)
                               "{{url('/studentTests/'.$groupTest->id.'/'.$test->id.'/edit')}}"
                           @else
                            "{{url('/studentTests/'.$groupTest->id.'/'.$test->id.'/edit')}}"
                        @endif
                           type="button" class="btn btn-primary"><i class="bi bi-journal-plus"></i>
                        </a>

                    </td>
                </tr>
            @endif
        @endforeach
    @endforeach
    </tbody>
</table>
