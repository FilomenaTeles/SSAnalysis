<h1>Registar notas dos testes - <small> {{$groupTest->edition}} </small></h1>
<br>
<?php $contador = 0 ?>
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
                @if($contador == 0)
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
                            <a href="{{url('/studentTests/'.$groupTest->id.'/'.$test->id)}}" type="button"
                               id="eye-btn" class="btn"><i class="bi bi-eye"></i>
                            </a>

                            @if($test->test_type_id == 1)
                                @if($student->pivot->grade == 0)
                                    <a href="{{url('studentTests/'.$groupTest->id.'/'.$test->id.'/edit')}}"
                                       type="button" class="btn btn-primary @if($test->test_date >= date('Y-m-d')) disable_btn @endif"><i class="bi bi-journal-plus"></i>
                                    </a>
                                @else
                                    <a href="{{url('studentTests/'.$groupTest->id.'/'.$test->id.'/edit')}}"
                                       type="button" class="btn btn-primary"><i class="bi bi-pencil-square"></i>
                                    </a>
                                @endif
                            @else

                                @if($student->pivot->grade == 0)
                                    <a href="{{url('studentTests/'.$groupTest->id.'/'.$test->id.'/editss')}}"
                                       type="button" class="btn btn-primary @if($test->test_date >= date('Y-m-d')) disable_btn @endif"><i class="bi bi-journal-plus"></i>
                                    </a>
                                @else
                                    <a href="{{url('studentTests/'.$groupTest->id .'/'.$test->id.'/editss2')}}"
                                       type="button" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                                @endif
                            @endif



                        </td>

                    </tr>
                        <?php $contador++ ?>
                @endif
            @endif
        @endforeach
            <?php $contador = 0 ?>
    @endforeach
    </tbody>
</table>
<div class="container text-right">
    <a href="{{url('studentTests')}}" type="button" id="back-btn" class="mt-2 mb-5 btn">Voltar</a>
</div>

<br>
