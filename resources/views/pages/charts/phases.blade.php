@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')
    <div class="container box">


        @component('components.charts.charts-phases',[
        'groupId' => $groupId,
        'tests'      => $tests,
        'groups'    => $groups,
        'testPhases' =>$testPhases,
        'studentTests' => $studentTests,
        'studentsList' => $students,
         'testsPhasesList'=> $testsPhasesList,
    ])
        @endcomponent
            <br>
        <?php

        $labels_names[] = [];

        $data_gradeTec1[] = [];
        $data_gradeSS1[] = [];

        $data_gradeTec2[] = [];
        $data_gradeSS2[] = [];

        $data_gradeTec3[] = [];
        $data_gradeSS3[] = [];

        $data_grade_avg_Tec[] = [];
        $data_grade_avg_SS[] = [];

        $pos=0;

        ?>

        @foreach($tests as $test)
            <!--FASE 1-->
            @if($test->test_phase_id ==1 && $test -> test_type_id ==1)
                <!--Teste Tecnico-->
                @foreach($test->students as $key => $student)

                    @if($student->group_id == $groupId ->id && $student->isActive ==1)

                        <input type="text" value=" {{$labels_names[$key]=$student->name}}" hidden>
                        <input type="text" value="  {{$data_gradeTec1[$key]=$student->pivot -> grade}}" hidden>

                    @endif
                @endforeach

            @endif

            @if($test->test_phase_id ==1 && $test -> test_type_id ==2)
                <!--Teste SS-->
                @foreach($test->students as $key => $student)
                    @if($student->group_id == $groupId ->id && $student->isActive ==1)
                            <input type="text" value=" {{$labels_names[$key]=$student->name}}" hidden>
                        <input type="text" value="  {{$data_gradeSS1[$key]=$student->pivot -> grade}}" hidden>


                    @endif
                @endforeach

            @endif

            <!--FASE 2-->
            @if($test->test_phase_id ==2 && $test -> test_type_id ==1)
                <!--Teste Tecnico-->
                @foreach($test->students as $key => $student)
                    @if($student->group_id == $groupId ->id && $student->isActive ==1)
                        <input type="text" value=" {{$labels_names[$key]=$student->name}}" hidden>
                        <input type="text" value="  {{$data_gradeTec2[$key]=$student->pivot -> grade}}" hidden>


                    @endif
                @endforeach

            @endif

            @if($test->test_phase_id ==2 && $test -> test_type_id ==2)
                <!--Teste SS-->
                @foreach($test->students as $key => $student)
                    @if($student->group_id == $groupId ->id && $student->isActive ==1)
                            <input type="text" value=" {{$labels_names[$key]=$student->name}}" hidden>
                        <input type="text" value="  {{$data_gradeSS2[$key]=$student->pivot -> grade}}" hidden>


                    @endif
                @endforeach

            @endif
            <!--FASE 3-->
            @if($test->test_phase_id ==3 && $test -> test_type_id ==1)
                <!--Teste Tecnico-->
                @foreach($test->students as $key => $student)
                    @if($student->group_id == $groupId ->id && $student->isActive ==1)
                        <input type="text" value=" {{$labels_names[$key]=$student->name}}" hidden>
                        <input type="text" value="  {{$data_gradeTec3[$key]=$student->pivot -> grade}}" hidden>


                    @endif
                @endforeach

            @endif

            @if($test->test_phase_id ==3 && $test -> test_type_id ==2)
                <!--Teste SS-->
                @foreach($test->students as $key => $student)
                    @if($student->group_id == $groupId ->id && $student->isActive ==1)
                            <input type="text" value=" {{$labels_names[$key]=$student->name}}" hidden>
                        <input type="text" value="  {{$data_gradeSS3[$key]=$student->pivot -> grade}}" hidden>

                    @endif
                @endforeach

            @endif




            @for($i=0; $i<sizeof($testsPhasesList); $i++)

                    @if($testsPhasesList[$i]["id"]==1 && !in_array(1,$testsPhasesList[$i]["test"]))
                        <input type="text" value="{{$data_gradeTec1[0] = 0}}" hidden>


                    @endif
                        @if($testsPhasesList[$i]["id"]==1 && !in_array(2,$testsPhasesList[$i]["test"]))
                            <input type="text" value="{{$data_gradeSS1[0] = 0}}" hidden>

                        @endif

                        @if($testsPhasesList[$i]["id"]==2 && !in_array(1,$testsPhasesList[$i]["test"]))
                            <input type="text" value="{{$data_gradeTec2[0] = 0}}" hidden>

                        @endif
                        @if($testsPhasesList[$i]["id"]==2 && !in_array(2,$testsPhasesList[$i]["test"]))
                            <input type="text" value="{{$data_gradeSS2[0] = 0}}" hidden>

                        @endif

                        @if($testsPhasesList[$i]["id"]==3 && !in_array(1,$testsPhasesList[$i]["test"]))
                            <input type="text" value="{{$data_gradeTec3[0] = 0}}" hidden>


                        @endif
                        @if($testsPhasesList[$i]["id"]==3 && !in_array(2,$testsPhasesList[$i]["test"]))
                            <input type="text" value="{{$data_gradeSS3[0] = 0}}" hidden>

                        @endif



                @endfor
                <!-- VER QUAL FASE QUE FALTA -->
                @if(!hasPhase(1,$testsPhasesList))
                    <input type="text" value="{{$data_gradeTec1[0] = 0}}" hidden>
                    <input type="text" value="{{$data_gradeSS1[0] = 0}}" hidden>

                @endif

                @if(!hasPhase(2,$testsPhasesList))
                    <input type="text" value="{{$data_gradeTec2[0] = 0}}" hidden>
                    <input type="text" value="{{$data_gradeSS2[0] = 0}}" hidden>

                @endif

                @if(!hasPhases(3,$testsPhasesList))
                    <input type="text" value="{{$data_gradeTec3[0] = 0}}" hidden>
                    <input type="text" value="{{$data_gradeSS3[0] = 0}}" hidden>

                @endif


        @endforeach
            <?php
            function hasPhases($phaseId, $testsPhasesList)
            {
                foreach ($testsPhasesList as $testPhase){
                    if ( $testPhase["id"] ==$phaseId) {
                        return true;
                    }
                }
                return false;
            }
            ?>

            <?php $newlabels = array();
            $newgradeTec1 = array();
            $newgradeTec2 = array();
            $newgradeTec3 = array();
            $newgradeSS1 = array();
            $newgradeSS2 = array();
            $newgradeSS3 = array();?>

            @foreach($labels_names as $label_name)
                <?php array_push($newlabels,$label_name);

                ?>
            @endforeach
            @foreach($data_gradeTec1 as $label_name)
                <?php array_push($newgradeTec1,$label_name);?>
            @endforeach
            @foreach($data_gradeTec2 as $label_name)
                <?php array_push($newgradeTec2,$label_name);?>
            @endforeach
            @foreach($data_gradeTec3 as $label_name)
                <?php array_push($newgradeTec3,$label_name);?>
            @endforeach

            @foreach($data_gradeSS1 as $label_name)
                <?php array_push($newgradeSS1,$label_name);?>
            @endforeach
            @foreach($data_gradeSS2 as $label_name)
                <?php array_push($newgradeSS2,$label_name);?>
            @endforeach
            @foreach($data_gradeSS3 as $label_name)
                <?php array_push($newgradeSS3,$label_name);?>
            @endforeach

        <?php

        $labels_names = $newlabels;
        $data_gradeTec1 = $newgradeTec1;
        $data_gradeTec2 = $newgradeTec2;
        $data_gradeTec3 = $newgradeTec3;
        $data_gradeSS1 = $newgradeSS1;
        $data_gradeSS2 = $newgradeSS2;
        $data_gradeSS3 = $newgradeSS3;
        ?>


        <!--CRIAÇÃO DOS GRÁFICOS-->
        @if(isset($phaseId))
            @if($phaseId->id==1)
                <h4>Fase 1</h4>
                <div class="container">
                    <h5>Resultados dos Testes Técnicos e Dinâmicas de Grupo</h5>
                </div>
                    <br>


                @component('components.charts.chart',[
                'phaseId'=>$phaseId,
                 'labels_names'=>$labels_names,
                 'gradeTec'=>$data_gradeTec1,
                 'gradeSS'=>$data_gradeSS1,

])
                @endcomponent

                <br>

            @elseif($phaseId->id==2)
                <h4>Fase 2</h4>
                    <div class="container">
                        <h5>Resultados dos Testes Técnicos e Dinâmicas de Grupo</h5>
                    </div>
                    <br>
                @component('components.charts.chart',[
                'phaseId'=>$phaseId,
                'labels_names'=>$labels_names,
                'gradeTec'=>$data_gradeTec2,
                'gradeSS'=>$data_gradeSS2,
   ])
                @endcomponent
                <br>
            @else()
                <h4>Fase 3</h4>
                    <div class="container">
                        <h5>Resultados dos Testes Técnicos e Dinâmicas de Grupo</h5>
                    </div>
                    <br>

                @component('components.charts.chart',[
                          'phaseId'=>$phaseId,
                          'labels_names'=>$labels_names,
                          'gradeTec'=>$data_gradeTec3,
                          'gradeSS'=>$data_gradeSS3,

            ])

                @endcomponent
                <br>
            @endif
        @endif

        @if(isset($comp))
            <h4>Análise Comparativa das 3 Fases</h4>


            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <div class="container p-4">
                <h5>Teste Técnico</h5>
                <canvas id="myChart"></canvas>
                <p class="text-center"><small>Gráfico das 3 fases dos testes técnicos de cada aluno</small></p>
            </div>

                <!-- VALIDAÇÃO CASO NÃO EXISTA UM TIPO OU FASE DO TESTE  -->
                <!-- SE OS TAMANHOS DOS ARRAYS FOREM DIFERENTES VAI AO ARRAY MAIS PEQUENO, O QUE NÃO TEM NOTAS POR NÃO EXISTIR  -->
                <!-- E PARA CADA POSIÇÃO DO LABELS_NAMES VAI DAR NOTA 0, ASSIM OS ARRAS TEM SEMPRE O MESMO TAMANHO  -->

                @if (sizeof($data_gradeTec1) != sizeof($data_gradeTec2) || sizeof($data_gradeTec1) != sizeof($data_gradeTec3) || sizeof($data_gradeTec2) != sizeof($data_gradeTec3))
                    <!-- TESTE TEC FASE 1 NÃO EXISTE -->
                    @if(sizeof($data_gradeTec1)<=1)
                        @for($i=0; $i<sizeof($labels_names); $i++)
                            <input type="text" value="{{$data_gradeTec1[$i]= 0}}" hidden>
                        @endfor
                    @endif
                    <!-- TESTE TEC FASE 2 NÃO EXISTE -->
                    @if(sizeof($data_gradeTec2)<=1)
                        @for($i=0; $i<sizeof($labels_names); $i++)
                            <input type="text" value="{{$data_gradeTec2[$i]= 0}}" hidden>
                        @endfor
                    @endif

                    <!-- TESTE TEC FASE 3 NÃO EXISTE -->
                    @if(sizeof($data_gradeTec3)<=1)
                        @for($i=0; $i<sizeof($labels_names); $i++)
                            <input type="text" value="{{$data_gradeTec3[$i]= 0}}" hidden>
                        @endfor
                    @endif
                @endif


                @if (sizeof($data_gradeSS1) != sizeof($data_gradeSS2) || sizeof($data_gradeSS1) != sizeof($data_gradeSS3) || sizeof($data_gradeSS2) != sizeof($data_gradeSS3))
                    <!-- TESTE SS FASE 1 NÃO EXISTE -->
                    @if(sizeof($data_gradeSS1)<=1)
                        @for($i=0; $i<sizeof($labels_names); $i++)
                            <input type="text" value="{{$data_gradeSS1[$i]= 0}}" hidden>
                        @endfor
                    @endif
                    <!-- TESTE SS FASE 2 NÃO EXISTE -->
                    @if(sizeof($data_gradeSS2)<=1)
                        @for($i=0; $i<sizeof($labels_names); $i++)
                            <input type="text" value="{{$data_gradeSS2[$i]= 0}}" hidden>
                        @endfor
                    @endif
                    <!-- TESTE SS FASE 3 NÃO EXISTE -->
                    @if(sizeof($data_gradeSS3)<=1)
                        @for($i=0; $i<sizeof($labels_names); $i++)
                            <input type="text" value="{{$data_gradeSS3[$i]= 0}}" hidden>
                        @endfor
                    @endif

                @endif


            @component('components.charts.chart-comp',[

               'labels_names'=>$labels_names,
               'gradesFase1' => $data_gradeTec1,
               'gradesFase2' => $data_gradeTec2,
               'gradesFase3' => $data_gradeTec3,
  ])
            @endcomponent

            <div class="container p-4">
                <h5>Teste Dinâmica de Grupo</h5>
                <canvas id="lineChartSS"></canvas>
                <p class="text-center"><small>Gráfico das 3 fases das dinâmicas de grupo de cada aluno</small></p>
            </div>


            @component('components.charts.chart-comp-ss',[

                   'labels_names'=>$labels_names,
                   'gradesFase1' => $data_gradeSS1,
                   'gradesFase2' => $data_gradeSS2,
                   'gradesFase3' => $data_gradeSS3,
      ])
            @endcomponent

            <!--FAZER MEDIA DE TODAS AS FASES PARA CADA TIPO DE TESTE-->



            <?php

                    $data_grade_avg_Tec = array();
                    $data_grade_avg_SS = array();




                    ?>


            @for ($i = 0; $i < sizeof($labels_names); $i++)

                    <input type="text"
                               value="  {{array_push($data_grade_avg_Tec,($data_gradeTec1[$i]+$data_gradeTec2[$i]+$data_gradeTec3[$i])/3)}}"
                               hidden>
                        <input type="text"
                               value="  {{array_push($data_grade_avg_SS, ($data_gradeSS1[$i]+$data_gradeSS2[$i]+$data_gradeSS3[$i])/3)}}"
                               hidden>
                    <input type="text"
                           value="   {{$data_grade_avg_Tec[$i] = number_format($data_grade_avg_Tec[$i], 2, '.', '')}}"
                           hidden>
                    <input type="text"
                           value="   {{$data_grade_avg_SS[$i] = number_format($data_grade_avg_SS[$i], 2, '.', '')}}" hidden>


                @endfor






            <div class="container p-4">
                <h5>Testes Técnicos vs Dinâmica de Grupo</h5>
                <canvas id="ChartComp"></canvas>
                <p class="text-center"><small>Gráfico da média das 3 fases de cada tipo de teste</small></p>
            </div>

            @component('components.charts.chart-comp-comp',[

                      'labels_names'=>$labels_names,
                      'data_grade_avg_Tec' =>$data_grade_avg_Tec,
                      'data_grade_avg_SS' =>$data_grade_avg_SS
         ])
            @endcomponent

        @endif
        @if(isset($st))
            <br>
            @component('components.charts.chart-students-list',[
         'students' =>$students,
         'groupId' => $groupId,
         'tests'      => $tests,
         'groups'    => $groups,
         'testPhases' =>$testPhases,
         'studentTests' => $studentTests,

])
            @endcomponent
            <br>
        @endif
    </div>

@endsection
