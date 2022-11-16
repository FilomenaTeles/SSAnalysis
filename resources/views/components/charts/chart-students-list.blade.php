<?php
$cont = 1;
$grade_Tec = [];
$grade_SS = [];
?>


<table class="table table-striped  text-center" id="group-student" style="margin: auto">
    <thead>
    <tr>
        <th scope="col"></th>
        <th scope="col">Nome</th>
        <th scope="col">Gráfico</th>
    </tr>

    </thead>
    <tbody>
    @foreach($students as $key => $student)
        @if($student -> group_id == $groupId->id)
            @foreach($studentTests as $studentTest)
                @if($studentTest -> student_id == $student->id)
                    @foreach($tests as $test)
                        @if($test -> id == $studentTest->test_id)

                            <!--TESTE TECNICO FASE 1 -->
                            @if($test-> test_type_id == 1 && $test->test_phase_id==1)
                                    <input type="text" value=" {{$grade_Tec[0]=$studentTest->grade}}" hidden>
                                           <!--TESTE TECNICO FASE 2 -->
                            @elseif($test-> test_type_id == 1 && $test->test_phase_id==2)
                                <input type="text" value=" {{$grade_Tec[1]=$studentTest->grade}}" hidden>
                                <!--TESTE TECNICO FASE 3 -->
                            @elseif($test-> test_type_id == 1 && $test->test_phase_id==3)
                                <input type="text" value=" {{$grade_Tec[2]=$studentTest->grade}}" hidden>

                                <!--TESTE SS FASE 1 -->
                            @elseif($test-> test_type_id == 2 && $test->test_phase_id==1)
                                <input type="text" value=" {{$grade_SS[0]=$studentTest->grade}}" hidden>
                                <!--TESTE SS FASE 2 -->
                            @elseif($test-> test_type_id == 2 && $test->test_phase_id==2)
                                <input type="text" value=" {{$grade_SS[1]=$studentTest->grade}}" hidden>
                                <!--TESTE SS FASE 3 -->
                            @elseif($test-> test_type_id == 2 && $test->test_phase_id==3)
                                <input type="text" value=" {{$grade_SS[2]=$studentTest->grade}}" hidden>
                            @endif
                        @endif
                    @endforeach
                @endif
            @endforeach



            <tr>

                <td>{{$cont}}</td>
                <td>{{$student -> name}}</td>

                <td>
                    <button class="btn btn-primary" type="button" data-toggle="collapse"
                            data-target="#collapse{{$student->id}}" aria-expanded="false"
                            aria-controls="collapseExample">
                        <i class="bi bi-clipboard-data"></i>
                    </button>

                    <div class="collapse" id="collapse{{$student->id}}">
                        <div class="card card-body">
                            @component('components.charts.chart-student',[
                            'name' =>'chart'.$student->id,
                            'label' => 'label'.$student->id,
                            'dataTec' => 'dataTec'.$student->id,
                            'dataSS' => 'dataSS'.$student->id,
                            'data' => 'data'.$student->id,
                            'gradesTec'=>$grade_Tec,
                            'gradesSS'=>$grade_SS,

           ])
                            @endcomponent
                        </div>
                    </div>
                </td>


            </tr>
            <input type="text" value="{{$cont++}}" hidden>
        @endif

    @endforeach

    </tbody>
</table>
