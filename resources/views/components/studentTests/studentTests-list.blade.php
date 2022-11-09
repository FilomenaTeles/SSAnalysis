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
                            @if($test->test_type_id == 1)
                           <a href="{{url('/studentTests/'.$groupTest->id.'/'.$test->id.'/edit')}}"type="button" class="btn btn-primary"><i class="bi bi-journal-plus"></i>
                           </a>
                           @else
                            <a href="{{url('/studentTests/'.$groupTest->id.'/'.$test->id.'/edit')}}" type="button" class="btn btn-primary"><i class="bi bi-journal-plus"></i>
                            </a>
                        @endif


                    </td>
                </tr>
            @endif
        @endforeach
    @endforeach
    </tbody>
</table>
<br>
<div class="container text-right">
<a href="{{ URL::previous() }}" type="button" id="back-btn" class="mt-2 mb-5 btn">Voltar</a>
</div>
